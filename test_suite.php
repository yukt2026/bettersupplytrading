<?php
/**
 * Better Supply Corporation - Automated Test Suite
 * Tests all pages in EN and AR, RFQ validation, honeypot, file uploads, and compliance rules.
 */

$base_url = 'http://localhost/bettersupplytrading';

$pages = [
    '',
    'about',
    'products',
    'industrial-salts',
    'oilfield-chemicals',
    'water-treatment',
    'fertilizers',
    'coco-peat',
    'packaging-disposables',
    'other-trading',
    'industries',
    'international-trading',
    'partners',
    'contact',
    'privacy',
    'terms'
];

$languages = ['en', 'ar'];

echo "====================================================\n";
echo "1. TESTING HTTP STATUS & HTML RENDERING (32 PAGES)\n";
echo "====================================================\n";

$pass_count = 0;
$fail_count = 0;

foreach ($languages as $l) {
    foreach ($pages as $p) {
        $path = $p ? "{$l}/{$p}/" : "{$l}/";
        $url = "{$base_url}/{$path}";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $html = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $expected_dir = ($l === 'ar') ? 'dir="rtl"' : 'dir="ltr"';
        $has_dir = strpos($html, $expected_dir) !== false;
        $has_brand = ($l === 'ar') ? (strpos($html, 'مؤسسة أفضل توريد التجارية') !== false) : (strpos($html, 'Better Supply Corporation') !== false);
        $has_editor_note = (stripos($html, 'EDITOR / DEVELOPER NOTE') !== false);

        if ($code === 200 && $has_dir && $has_brand && !$has_editor_note) {
            echo " [PASS] {$path} (HTTP 200, {$expected_dir}, Brand OK, No Notes)\n";
            $pass_count++;
        } else {
            echo " [FAIL] {$path} (HTTP: {$code}, dir: " . ($has_dir ? 'OK' : 'FAIL') . ", brand: " . ($has_brand ? 'OK' : 'FAIL') . ", note: " . ($has_editor_note ? 'FORBIDDEN NOTE FOUND' : 'CLEAN') . ")\n";
            $fail_count++;
        }
    }
}

echo "\n====================================================\n";
echo "2. TESTING RFQ FORM SUBMISSION & SECURITY\n";
echo "====================================================\n";

// Test A: Valid RFQ Submission
$post_url = "{$base_url}/rfq-handler.php";

$valid_data = [
    'name' => 'Faisal Al-Otaibi',
    'company' => 'Eastern Drilling Contracting Co.',
    'email' => 'procurement@easterndrilling.test',
    'phone' => '+966 50 123 4567',
    'category' => 'industrial_salts',
    'product_spec' => 'High purity Sodium Chloride NaCl 99.5% for water utility softening',
    'quantity' => '250',
    'unit' => 'mt',
    'packaging' => '1000 kg FIBC bags with discharge spout',
    'destination' => 'King Abdulaziz Port, Dammam, Saudi Arabia',
    'delivery_date' => 'December 2026',
    'source_page' => 'industrial-salts',
    'privacy_consent' => '1',
    'website_url_hp' => '' // Honeypot clean
];

$ch = curl_init($post_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $valid_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$json = json_decode($res, true);
if ($code === 200 && !empty($json['success']) && !empty($json['lead_id'])) {
    echo " [PASS] Valid RFQ Submission -> Lead Created: {$json['lead_id']}\n";
    $pass_count++;
} else {
    echo " [FAIL] Valid RFQ Submission: Code {$code}, Res: {$res}\n";
    $fail_count++;
}

// Test B: Honeypot Anti-Spam Detection
$honeypot_data = $valid_data;
$honeypot_data['website_url_hp'] = 'http://spam-bot-crawler.com';

$ch = curl_init($post_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $honeypot_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);

$json = json_decode($res, true);
// Honeypot should silent-drop (success true without generating lead_id in database)
if (!empty($json['success']) && empty($json['lead_id'])) {
    echo " [PASS] Honeypot Trap -> Spam silently trapped and dropped.\n";
    $pass_count++;
} else {
    echo " [FAIL] Honeypot test failed.\n";
    $fail_count++;
}

// Test C: Missing Required Fields Validation
$invalid_data = $valid_data;
unset($invalid_data['name']);
unset($invalid_data['email']);

$ch = curl_init($post_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $invalid_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$json = json_decode($res, true);
if ($code === 422 && !empty($json['errors']['name']) && !empty($json['errors']['email'])) {
    echo " [PASS] Validation Error Catching -> Properly rejected with 422 Unprocessable Entity.\n";
    $pass_count++;
} else {
    echo " [FAIL] Validation Error Catching failed: Code {$code}\n";
    $fail_count++;
}

// Test D: File Attachment Upload
$dummy_pdf = __DIR__ . '/storage/test_spec.pdf';
file_put_contents($dummy_pdf, "%PDF-1.4\n%Test PDF Specification Document\n%%EOF");

$upload_data = $valid_data;
$upload_data['attachment'] = new CURLFile($dummy_pdf, 'application/pdf', 'Technical_Spec_Sheet.pdf');

$ch = curl_init($post_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $upload_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$json = json_decode($res, true);
if ($code === 200 && !empty($json['success'])) {
    echo " [PASS] File Attachment Upload -> PDF accepted and stored securely.\n";
    $pass_count++;
} else {
    echo " [FAIL] File Attachment Upload failed: {$res}\n";
    $fail_count++;
}
if (file_exists($dummy_pdf)) unlink($dummy_pdf);

echo "\n====================================================\n";
echo "3. VERIFYING STRICT COMPLIANCE RULES\n";
echo "====================================================\n";

// Scan public views for prohibited claims
$views_dir = __DIR__ . '/views';
$view_files = glob("{$views_dir}/*.php");

$forbidden_phrases = [
    'Aramco approved',
    'SLB approved',
    'authorized distributor',
    'ISO certified',
    'stock available',
    'EDITOR / DEVELOPER NOTE',
];

$compliance_passed = true;
foreach ($view_files as $vf) {
    $content = file_get_contents($vf);
    foreach ($forbidden_phrases as $phrase) {
        if (stripos($content, $phrase) !== false) {
            echo " [COMPLIANCE FAIL] Found '{$phrase}' in " . basename($vf) . "\n";
            $compliance_passed = false;
        }
    }
}

if ($compliance_passed) {
    echo " [PASS] Strict Compliance Check: Zero forbidden claims detected across all views.\n";
    $pass_count++;
} else {
    $fail_count++;
}

echo "\n====================================================\n";
echo "TEST SUMMARY: {$pass_count} PASSED, {$fail_count} FAILED\n";
echo "====================================================\n";
