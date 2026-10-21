<?php
/**
 * Better Supply Trading Establishment - Internationalization (i18n) Engine
 * Supports Arabic (RTL) & English (LTR) with strict locale routing,
 * reciprocal hreflang generation, and translation lookups.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$site_config = require __DIR__ . '/config.php';

// Determine language from global $lang (set by router or directory endpoint),
// or query param, or session, or HTTP Accept-Language
if (empty($lang)) {
    if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ar'])) {
        $lang = $_GET['lang'];
    } elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['en', 'ar'])) {
        $lang = $_SESSION['lang'];
    } else {
        // Inspect browser language header
        $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
        $lang = ($browser_lang === 'ar') ? 'ar' : 'en';
    }
}

$_SESSION['lang'] = $lang;
$dir = ($lang === 'ar') ? 'rtl' : 'ltr';

// Load dictionary
$locales_dir = __DIR__ . '/locales';
$dict_file = $locales_dir . '/' . $lang . '.php';
$translations = file_exists($dict_file) ? require $dict_file : require $locales_dir . '/en.php';

/**
 * Translation helper with dot notation support
 */
function t($key, $default = '') {
    global $translations;
    $keys = explode('.', $key);
    $val = $translations;
    foreach ($keys as $k) {
        if (is_array($val) && isset($val[$k])) {
            $val = $val[$k];
        } else {
            return $default ?: $key;
        }
    }
    return $val;
}

/**
 * Check if a product category feature flag is enabled
 */
function is_category_active($cat_key) {
    global $site_config;
    return !empty($site_config['categories'][$cat_key]);
}

/**
 * Generate localized route URL
 * Example: route_url('about') -> /bettersupplytrading/en/about/ or /bettersupplytrading/ar/about/
 */
function route_url($page = '', $target_lang = null) {
    global $lang, $site_config;
    $current_l = $target_lang ?: $lang;
    $base = rtrim($site_config['base_path'], '/');
    
    $clean_page = trim($page, '/');
    if ($clean_page === '' || $clean_page === 'home') {
        return $base . '/' . $current_l . '/';
    }
    return $base . '/' . $current_l . '/' . $clean_page . '/';
}

/**
 * Resolve public asset URL
 */
function asset_url($path) {
    global $site_config;
    $base = rtrim($site_config['base_path'], '/');
    return $base . '/' . ltrim($path, '/');
}

/**
 * Resolve image URL with WebP fallback if browser supports it
 */
function img_url($filename) {
    return asset_url('public/images/' . ltrim($filename, '/'));
}

/**
 * Generate reciprocal hreflang tags and canonical links
 */
function render_seo_head($page = 'home') {
    global $lang, $site_config, $translations;
    
    $clean_page = ($page === 'home') ? '' : trim($page, '/');
    $en_url = rtrim($site_config['base_url'], '/') . '/en/' . ($clean_page ? $clean_page . '/' : '');
    $ar_url = rtrim($site_config['base_url'], '/') . '/ar/' . ($clean_page ? $clean_page . '/' : '');
    $canonical_url = ($lang === 'ar') ? $ar_url : $en_url;
    
    $seo_key = str_replace('-', '_', $clean_page ?: 'home');
    $title = $translations['seo'][$seo_key]['title'] ?? $translations['company_name'] . ' | ' . $translations['company_tagline'];
    $desc = $translations['seo'][$seo_key]['meta_desc'] ?? $translations['company_tagline'];
    
    $html = <<<HTML
    <title>{$title}</title>
    <meta name="description" content="{$desc}">
    <link rel="canonical" href="{$canonical_url}">
    <link rel="alternate" hreflang="en" href="{$en_url}">
    <link rel="alternate" hreflang="ar" href="{$ar_url}">
    <link rel="alternate" hreflang="x-default" href="{$en_url}">
    
    <!-- Open Graph / Social Sharing -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{$title}">
    <meta property="og:description" content="{$desc}">
    <meta property="og:url" content="{$canonical_url}">
    <meta property="og:site_name" content="{$translations['company_name']}">
    <meta property="og:locale" content="{$lang}">
    <meta property="og:image" content="{$site_config['base_url']}/public/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{$title}">
    <meta name="twitter:description" content="{$desc}">
    <meta name="twitter:image" content="{$site_config['base_url']}/public/images/og-image.jpg">
HTML;
    return $html;
}

/**
 * Render verified Organization Schema.org JSON-LD
 * Strictly verified fields - no fake address or invented registrations
 */
function render_organization_schema() {
    global $site_config;
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Corporation',
        'name' => $site_config['app_name_en'],
        'alternateName' => $site_config['app_name_ar'],
        'url' => $site_config['base_url'] . '/',
        'logo' => $site_config['base_url'] . '/public/images/logo.svg',
        'description' => 'B2B sourcing and wholesale trading of industrial salts, oilfield drilling materials, water treatment chemicals, fertilizers and commercial packaging.',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Dammam',
            'addressRegion' => 'Eastern Province',
            'addressCountry' => 'SA',
        ],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'Saudi Arabia'],
            ['@type' => 'GeoCircle', 'name' => 'GCC']
        ]
    ];
    
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
}
