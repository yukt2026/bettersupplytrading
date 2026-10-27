<?php
/**
 * Better Supply Trading Establishment - Physical Directory Endpoints Generator
 * Generates lightweight index.php wrappers in /en/ and /ar/ directories.
 */

$pages = [
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
    'global-sourcing',
    'partners',
    'contact',
    'privacy',
    'terms',
];

$languages = ['en', 'ar'];

foreach ($languages as $l) {
    $lang_dir = __DIR__ . '/' . $l;
    if (!is_dir($lang_dir)) {
        mkdir($lang_dir, 0755, true);
    }

    // Home index in language root: /en/index.php or /ar/index.php
    $home_content = "<?php\n\$lang = '{$l}';\n\$page = 'home';\nrequire_once __DIR__ . '/../router.php';\n";
    file_put_contents($lang_dir . '/index.php', $home_content);

    // Each subpage
    foreach ($pages as $p) {
        $p_dir = $lang_dir . '/' . $p;
        if (!is_dir($p_dir)) {
            mkdir($p_dir, 0755, true);
        }
        $sub_content = "<?php\n\$lang = '{$l}';\n\$page = '{$p}';\nrequire_once __DIR__ . '/../../router.php';\n";
        file_put_contents($p_dir . '/index.php', $sub_content);
    }
}

echo "Physical endpoints for all 14 pages in English and Arabic generated successfully.\n";
