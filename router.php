<?php
/**
 * Better Supply Trading Establishment - Central Router & Front Controller
 * Handles /en/* and /ar/* requests, sets HTTP headers, validates route parameters,
 * and renders corresponding views with full bilingual context.
 */

// Initialize or detect language
$lang = $lang ?? ($_GET['lang'] ?? 'en');
if (!in_array($lang, ['en', 'ar'])) {
    $lang = 'en';
}

// Clean page slug
$page = $page ?? ($_GET['page'] ?? 'home');
$page = trim(strtolower($page), '/');
if (empty($page)) {
    $page = 'home';
}

// Map valid slugs to view files
$valid_routes = [
    'home' => 'home.php',
    'about' => 'about.php',
    'products' => 'products.php',
    'industrial-salts' => 'industrial-salts.php',
    'oilfield-chemicals' => 'oilfield-chemicals.php',
    'water-treatment' => 'water-treatment.php',
    'fertilizers' => 'fertilizers.php',
    'coco-peat' => 'coco-peat.php',
    'packaging-disposables' => 'packaging-disposables.php',
    'other-trading' => 'other-trading.php',
    'industries' => 'industries.php',
    'international-trading' => 'international-trading.php',
    'partners' => 'partners.php',
    'contact' => 'contact.php',
    'privacy' => 'privacy.php',
    'terms' => 'terms.php',
];

if (!array_key_exists($page, $valid_routes)) {
    http_response_code(404);
    $view_file = __DIR__ . '/views/404.php';
    if (!file_exists($view_file)) {
        require_once __DIR__ . '/header.php';
        echo '<div class="py-32 text-center text-white"><h1 class="text-4xl font-bold mb-4">404 - Page Not Found</h1><p class="text-slate-400 mb-8">The requested page could not be located.</p><a href="' . route_url('') . '" class="px-6 py-3 bg-emerald-600 rounded-lg text-white font-bold">Return Home</a></div>';
        require_once __DIR__ . '/footer.php';
        exit;
    }
} else {
    $view_file = __DIR__ . '/views/' . $valid_routes[$page];
}

require $view_file;
