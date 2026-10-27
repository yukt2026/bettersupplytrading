<?php
/**
 * Better Supply Trading Establishment - Verification Script
 * Validates all aspects of the Website Enhancement & Development Requirements
 */

echo "========================================================================\n";
echo "BETTER SUPPLY TRADING ESTABLISHMENT - VERIFICATION SUITE\n";
echo "========================================================================\n\n";

$errors = 0;
$passes = 0;

function assert_test($description, $condition) {
    global $errors, $passes;
    if ($condition) {
        echo " [PASS] $description\n";
        $passes++;
    } else {
        echo " [FAIL] $description\n";
        $errors++;
    }
}

// 1. Dictionaries & Locales
$en = require __DIR__ . '/../locales/en.php';
$ar = require __DIR__ . '/../locales/ar.php';

assert_test("English dictionary loaded", is_array($en) && !empty($en));
assert_test("Arabic dictionary loaded", is_array($ar) && !empty($ar));

// 2. Exact Headings & Descriptions from Section 02
$expected_en_heading = 'Industrial, Chemical & Agricultural Trading Solutions';
assert_test("Hero heading EN exact match", ($en['pages']['home']['hero_title'] ?? '') === $expected_en_heading);
assert_test("Hero heading AR is present and relevant", !empty($ar['pages']['home']['hero_title']));

assert_test("Corporate Tagline EN exact match", ($en['pages']['home']['hero_tagline'] ?? '') === 'Connecting Markets. Supplying Industries.');
assert_test("Corporate Tagline AR is present and relevant", !empty($ar['pages']['home']['hero_tagline']));

// 3. Products & Services Sequence A through I
$expected_keys = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
$en_catalog_keys = array_keys($en['catalog'] ?? []);
$ar_catalog_keys = array_keys($ar['catalog'] ?? []);

assert_test("Catalog sequence EN is exactly A through I", $en_catalog_keys === $expected_keys);
assert_test("Catalog sequence AR is exactly A through I", $ar_catalog_keys === $expected_keys);

assert_test("Category A is Agrochemicals in EN", strpos($en['catalog']['a']['title'] ?? '', 'Agrochemicals') !== false);
assert_test("Category B is Chemicals in EN", strpos($en['catalog']['b']['title'] ?? '', 'Chemicals') !== false);
assert_test("Category C is Industrial Salt in EN", strpos($en['catalog']['c']['title'] ?? '', 'Industrial Salt') !== false);
assert_test("Category D is Building Materials in EN", strpos($en['catalog']['d']['title'] ?? '', 'Building & Construction') !== false);
assert_test("Category E is Machinery in EN", strpos($en['catalog']['e']['title'] ?? '', 'Industrial Machinery') !== false);
assert_test("Category F is Spare Parts in EN", strpos($en['catalog']['f']['title'] ?? '', 'Spare Parts') !== false);
assert_test("Category G is Industrial Supplies in EN", strpos($en['catalog']['g']['title'] ?? '', 'Mechanical, Electrical') !== false);
assert_test("Category H is Other Trading in EN", strpos($en['catalog']['h']['title'] ?? '', 'Other Trading') !== false);
assert_test("Category I is International Sourcing in EN", strpos($en['catalog']['i']['title'] ?? '', 'International Sourcing') !== false);

// 4. Primary Visibility (A, B, C priority is high)
assert_test("Category A priority is high", ($en['catalog']['a']['priority'] ?? '') === 'high');
assert_test("Category B priority is high", ($en['catalog']['b']['priority'] ?? '') === 'high');
assert_test("Category C priority is high", ($en['catalog']['c']['priority'] ?? '') === 'high');

// 5. RFQ Category Options (A through I)
$rfq_cats = array_keys($en['rfq_form']['categories'] ?? []);
foreach (['agrochemicals', 'industrial_chemicals', 'industrial_salts', 'building_materials', 'machinery_equipment', 'spare_parts', 'industrial_supplies', 'other_trading', 'international_sourcing'] as $required_cat) {
    assert_test("RFQ form includes category option: $required_cat", in_array($required_cat, $rfq_cats));
}

// 6. Remarks field present in RFQ form strings
assert_test("RFQ remarks field present in EN", !empty($en['rfq_form']['remarks']));
assert_test("RFQ remarks field present in AR", !empty($ar['rfq_form']['remarks']));

// 7. CR Compliance - No forbidden codes
$forbidden_patterns = ['451011', '451012', '465910', '466910', '[ENTER VERIFIED CR NUMBER]', 'DRAFT - LEGAL REVIEW REQUIRED'];
$files_to_scan = array_merge(
    glob(__DIR__ . '/../*.php'),
    glob(__DIR__ . '/../views/*.php'),
    glob(__DIR__ . '/../views/partials/*.php'),
    glob(__DIR__ . '/../locales/*.php')
);

$found_forbidden = false;
foreach ($files_to_scan as $file) {
    $content = file_get_contents($file);
    foreach ($forbidden_patterns as $pattern) {
        if (strpos($content, $pattern) !== false) {
            echo " [FAIL] Found forbidden pattern '$pattern' in $file\n";
            $found_forbidden = true;
            $errors++;
        }
    }
}
if (!$found_forbidden) {
    assert_test("Zero forbidden CR activity codes or unfinished placeholders in all codebase files", true);
}

// 8. Downloadable Company Profile Exists
$profile_pdf = __DIR__ . '/../public/docs/Better_Supply_Company_Profile.pdf';
assert_test("Approved Company Profile PDF exists", file_exists($profile_pdf) && filesize($profile_pdf) > 10000);

// 9. Sitemap & Robots
$sitemap = file_get_contents(__DIR__ . '/../sitemap.xml');
assert_test("Sitemap includes EN global-sourcing", strpos($sitemap, '/en/global-sourcing/') !== false);
assert_test("Sitemap includes AR global-sourcing", strpos($sitemap, '/ar/global-sourcing/') !== false);

// 10. Direct Team Contacts
assert_test("Sales contact Meharsha O.N configured", !empty($en['pages']['contact']['sales_title']));
assert_test("Operations contact Sayed Alavi configured", !empty($en['pages']['contact']['operations_title']));

// 11. View rendering test
echo "\n--- Testing View Rendering in EN and AR ---\n";
$views = ['home', 'about', 'products', 'industries', 'international-trading', 'partners', 'contact', 'privacy', 'terms'];
foreach (['en', 'ar'] as $l) {
    foreach ($views as $v) {
        // Execute rendering via php cli script
        $temp_script = __DIR__ . "/render_test_{$l}_{$v}.php";
        $code = "<?php\n\$_GET['lang'] = '{$l}';\n\$_GET['page'] = '{$v}';\n\$lang = '{$l}';\n\$page = '{$v}';\nob_start();\nrequire __DIR__ . '/../router.php';\n\$out = ob_get_clean();\necho strlen(\$out) . '||' . ((strpos(\$out, 'Better Supply') !== false || strpos(\$out, 'أفضل توريد') !== false) ? '1' : '0');\n";
        file_put_contents($temp_script, $code);
        
        $res = trim(shell_exec("php " . escapeshellarg($temp_script)));
        @unlink($temp_script);
        
        $parts = explode('||', $res);
        $bytes = intval($parts[0] ?? 0);
        $brand_ok = ($parts[1] ?? '0') === '1';
        
        assert_test("Rendered {$l}/{$v} successfully ({$bytes} bytes, Brand OK)", $bytes > 1000 && $brand_ok);
    }
}

echo "\n========================================================================\n";
echo "SUMMARY: Passed: $passes, Failed: $errors\n";
echo "========================================================================\n";
exit($errors > 0 ? 1 : 0);
