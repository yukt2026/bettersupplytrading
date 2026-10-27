<?php
/**
 * Parity and Consistency Verification Script
 */

$views = [
    'home',
    'about',
    'products',
    'agrochemicals',
    'industrial-chemicals',
    'industrial-salts',
    'building-materials',
    'machinery',
    'spare-parts',
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
$forbidden_in_html = [
    'Division A', 'Division B', 'Division C', 'Division D', 'Division E', 'Division F', 'Division G', 'Division H', 'Division I',
    'Priority Sourcing Focus', 'Primary Sourcing Focus', 'Verified Material Lines',
    '451011', '451012', '465910', '466910',
    '[ENTER', 'DRAFT -'
];

$errors = 0;

foreach ($languages as $l) {
    foreach ($views as $v) {
        $temp = __DIR__ . "/test_{$l}_{$v}.php";
        $code = "<?php\n\$_GET['lang'] = '{$l}';\n\$_GET['page'] = '{$v}';\n\$lang = '{$l}';\n\$page = '{$v}';\nob_start();\nrequire __DIR__ . '/../router.php';\n\$html = ob_get_clean();\necho \$html;\n";
        file_put_contents($temp, $code);
        
        $output = shell_exec("php " . escapeshellarg($temp));
        @unlink($temp);
        
        if (empty($output) || strlen($output) < 1000) {
            echo "[FAIL] {$l}/{$v} rendered empty or truncated (" . strlen($output) . " bytes)\n";
            $errors++;
            continue;
        }
        
        foreach ($forbidden_in_html as $f) {
            if (stripos($output, $f) !== false) {
                echo "[FAIL] {$l}/{$v} contains forbidden string: '{$f}'\n";
                $errors++;
            }
        }
        
        // Check for ACTUAL PHP engine notices or errors
        if (preg_match('/(PHP Notice|PHP Warning|PHP Fatal error|<b>Notice<\/b>:|<b>Warning<\/b>:)/i', $output)) {
            echo "[FAIL] {$l}/{$v} contains PHP Error/Warning/Notice\n";
            $errors++;
        }
        
        echo "[PASS] {$l}/{$v} rendered cleanly (" . strlen($output) . " bytes)\n";
    }
}

if ($errors === 0) {
    echo "\n========================================================================\n";
    echo "=== ALL 42 VIEW RENDERS IN EN AND AR PASSED WITH ZERO ERRORS ===\n";
    echo "========================================================================\n";
} else {
    echo "\n=== FOUND {$errors} ERRORS ===\n";
}
exit($errors > 0 ? 1 : 0);
