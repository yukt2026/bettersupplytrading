<?php
/**
 * Better Supply Trading Establishment - Comprehensive Verification Suite
 * Validates all aspects of Website Corrections & Developer Requirements (27 October 2026)
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

// 2. Exact Headings & Descriptions
$expected_en_heading = 'Industrial, Chemical & Agricultural Trading Solutions';
assert_test("Hero heading EN exact match", ($en['pages']['home']['hero_title'] ?? '') === $expected_en_heading);
assert_test("Corporate Tagline EN exact match", ($en['pages']['home']['hero_tagline'] ?? '') === 'Connecting Markets. Supplying Industries.');

$expected_en_desc = "Better Supply Trading Establishment supports industrial and commercial buyers through product sourcing, specification-based procurement and coordinated supply solutions. We help customers identify suitable materials, obtain competitive quotations and manage purchasing requirements across Saudi Arabia, the GCC and international markets.";
assert_test("Homepage/About EN exact corporate description match", trim($en['pages']['home']['sec2_text'] ?? '') === $expected_en_desc && trim($en['pages']['about']['lead'] ?? '') === $expected_en_desc);

$expected_en_trust = "Our approach is built on understanding customer requirements, clear commercial communication, careful product matching and dependable coordination from inquiry to delivery.";
assert_test("Exact trust statement EN match", trim($en['pages']['home']['trust_statement'] ?? '') === $expected_en_trust && trim($en['pages']['about']['trust_statement'] ?? '') === $expected_en_trust);

// 3. Streamlined 4-Step Procurement Process
$procurement_steps_en = $en['pages']['about']['steps'] ?? [];
assert_test("Procurement process has exactly 4 steps", count($procurement_steps_en) === 4);
assert_test("Step 1 is Share Requirements", ($procurement_steps_en[0]['title'] ?? '') === 'Share Requirements');
assert_test("Step 2 is Specification Review", ($procurement_steps_en[1]['title'] ?? '') === 'Specification Review');
assert_test("Step 3 is Commercial Quotation", ($procurement_steps_en[2]['title'] ?? '') === 'Commercial Quotation');
assert_test("Step 4 is Delivery Coordination", ($procurement_steps_en[3]['title'] ?? '') === 'Delivery Coordination');

// 4. Products & Services Sequence 1 through 9
$expected_keys = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
$en_catalog_keys = array_keys($en['catalog'] ?? []);
$ar_catalog_keys = array_keys($ar['catalog'] ?? []);

assert_test("Catalog sequence EN preserves 1 through 9", $en_catalog_keys === $expected_keys);
assert_test("Catalog sequence AR preserves 1 through 9", $ar_catalog_keys === $expected_keys);

assert_test("Category 1 is Agrochemicals in EN", strpos($en['catalog']['a']['title'] ?? '', 'Agrochemicals') !== false);
assert_test("Category 2 is Chemicals in EN", strpos($en['catalog']['b']['title'] ?? '', 'Chemicals') !== false);
assert_test("Category 3 is Industrial Salt in EN", strpos($en['catalog']['c']['title'] ?? '', 'Industrial Salt') !== false);
assert_test("Category 4 is Building Materials in EN", strpos($en['catalog']['d']['title'] ?? '', 'Building & Construction') !== false);
assert_test("Category 5 is Machinery in EN", strpos($en['catalog']['e']['title'] ?? '', 'Industrial Machinery') !== false);
assert_test("Category 6 is Spare Parts in EN", strpos($en['catalog']['f']['title'] ?? '', 'Spare Parts') !== false);
assert_test("Category 7 is Industrial Supplies in EN", strpos($en['catalog']['g']['title'] ?? '', 'Mechanical, Electrical') !== false);
assert_test("Category 8 is Other Trading in EN", strpos($en['catalog']['h']['title'] ?? '', 'Other Trading') !== false);
assert_test("Category 9 is International Sourcing in EN", strpos($en['catalog']['i']['title'] ?? '', 'International Sourcing') !== false);

// 5. Check No Internal Letter Identifiers in Catalog Titles or RFQ Categories
foreach ($en['catalog'] as $k => $cat) {
    assert_test("Catalog EN item '$k' has no 'letter' attribute", !isset($cat['letter']));
    assert_test("Catalog EN item '$k' title has no 'A.' prefix", !preg_match('/^[A-I]\.\s*/', $cat['title']));
}
foreach ($en['rfq_form']['categories'] as $rfq_id => $rfq_label) {
    assert_test("RFQ EN category '$rfq_id' has no letter prefix", !preg_match('/^[A-I]\.\s*/', $rfq_label));
}
foreach ($ar['rfq_form']['categories'] as $rfq_id => $rfq_label) {
    assert_test("RFQ AR category '$rfq_id' has no Arabic letter prefix", !preg_match('/^[أ-ي]\.\s*/u', $rfq_label));
}

// 6. Industries We Serve (All 9 Sectors)
$en_sectors = $en['pages']['industries']['sectors'] ?? [];
$ar_sectors = $ar['pages']['industries']['sectors'] ?? [];
assert_test("Industries page EN has exactly 9 sectors", count($en_sectors) === 9);
assert_test("Industries page AR has exactly 9 sectors", count($ar_sectors) === 9);

$expected_sector_keywords = ['Oil & Gas', 'Petrochemical', 'Water Treatment', 'Agriculture', 'Construction', 'Manufacturing', 'Maintenance', 'Machinery', 'Commercial'];
$all_sectors_found = true;
foreach ($expected_sector_keywords as $kw) {
    $found = false;
    foreach ($en_sectors as $sec) {
        if (stripos($sec['name'], $kw) !== false) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $all_sectors_found = false;
        echo " [FAIL] Sector keyword '$kw' not found in EN sectors\n";
    }
}
assert_test("All 9 required industry sectors present in EN", $all_sectors_found);

// 7. Industrial Salt Specifications (99%+ NaCl, 4-6 mm)
$salt_cat_desc = $en['catalog']['c']['desc'] ?? '';
$salt_cat_items = implode(' ', $en['catalog']['c']['items'] ?? []);
$salt_page_content = serialize($en['pages']['industrial_salts'] ?? []);
assert_test("Industrial Salt has 99%+ NaCl specification in catalog", strpos($salt_cat_desc . $salt_cat_items, '99%') !== false);
assert_test("Industrial Salt has 4-6 mm granular size mentioned in salt page", strpos($salt_page_content, '4–6 mm') !== false || strpos($salt_page_content, '4-6 mm') !== false);

// 8. CR Compliance & Confidentiality
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

// 9. Downloadable Company Profile Exists and is Exactly 2 Pages
$profile_pdf = __DIR__ . '/../public/docs/Better_Supply_Company_Profile.pdf';
assert_test("Approved Company Profile PDF exists", file_exists($profile_pdf) && filesize($profile_pdf) > 10000);

$pdf_content = file_get_contents($profile_pdf);
preg_match_all('/\/Type\s*\/Page\b[^\/]/', $pdf_content, $matches);
$pdf_page_count = count($matches[0]);
assert_test("Company Profile PDF has strictly 2 pages (current: $pdf_page_count)", $pdf_page_count === 2);

// 10. Sitemap & New Landing Pages
$sitemap = file_get_contents(__DIR__ . '/../sitemap.xml');
$new_landing_routes = ['agrochemicals', 'industrial-chemicals', 'building-materials', 'machinery', 'spare-parts', 'industrial-salts'];
foreach ($new_landing_routes as $nlr) {
    assert_test("Sitemap includes EN $nlr", strpos($sitemap, "/en/$nlr/") !== false);
    assert_test("Sitemap includes AR $nlr", strpos($sitemap, "/ar/$nlr/") !== false);
}

// 11. View rendering test across all pages (including new landing pages)
echo "\n--- Testing View Rendering in EN and AR ---\n";
$all_views = [
    'home', 'about', 'products', 'industries', 'international-trading', 
    'industrial-salts', 'agrochemicals', 'industrial-chemicals', 
    'building-materials', 'machinery', 'spare-parts', 
    'partners', 'contact', 'privacy', 'terms'
];

foreach (['en', 'ar'] as $l) {
    foreach ($all_views as $v) {
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

// 12. Check for Letter Identifiers in Rendered HTML of Home & Products
$home_html = shell_exec("php -r \"\$_GET['lang']='en'; \$_GET['page']='home'; \$lang='en'; \$page='home'; ob_start(); require 'router.php'; echo ob_get_clean();\"");
$prod_html = shell_exec("php -r \"\$_GET['lang']='en'; \$_GET['page']='products'; \$lang='en'; \$page='products'; ob_start(); require 'router.php'; echo ob_get_clean();\"");

assert_test("Home page HTML has no 'Division A' or 'Division B'", strpos($home_html, 'Division A') === false && strpos($home_html, 'Division B') === false);
assert_test("Products page HTML has no 'Division A' or 'Division B'", strpos($prod_html, 'Division A') === false && strpos($prod_html, 'Division B') === false);
assert_test("Home page HTML has no 'Priority Sourcing Focus'", strpos($home_html, 'Priority Sourcing Focus') === false);
assert_test("Products page HTML has no 'Primary Sourcing Focus'", strpos($prod_html, 'Primary Sourcing Focus') === false);
assert_test("Products page HTML has no 'Verified Material Lines'", strpos($prod_html, 'Verified Material Lines') === false);

echo "\n========================================================================\n";
echo "SUMMARY: Passed: $passes, Failed: $errors\n";
echo "========================================================================\n";
exit($errors > 0 ? 1 : 0);
