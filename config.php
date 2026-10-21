<?php
/**
 * Better Supply Corporation (مؤسسة أفضل توريد التجارية)
 * Core Application Configuration & Feature Flags
 * Domain: bettersupplytrading.com
 * Location: Dammam, Kingdom of Saudi Arabia
 */

// Environment variable helper
if (!function_exists('env')) {
    function env($key, $default = null) {
        $val = getenv($key);
        if ($val === false || $val === null || $val === '') {
            return $default;
        }
        return $val;
    }
}

// Compute Base URL dynamically to support local XAMPP subfolder, custom port, or root domain
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? 80) == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';
$dir_name = trim(dirname($script_name), '/\\');

// Check if running in a subfolder (e.g., bettersupplytrading)
$base_path = '';
if (!empty($dir_name)) {
    // If inside /en or /ar subdirectories, remove language segment from base path
    $parts = explode('/', str_replace('\\', '/', $dir_name));
    $clean_parts = array_filter($parts, function($part) {
        return !in_array($part, ['en', 'ar', 'about', 'products', 'industrial-salts', 'oilfield-chemicals', 'water-treatment', 'fertilizers', 'coco-peat', 'packaging-disposables', 'other-trading', 'industries', 'international-trading', 'partners', 'contact', 'privacy', 'terms']);
    });
    if (!empty($clean_parts)) {
        $base_path = '/' . implode('/', $clean_parts);
    }
}

$site_config = [
    'app_name_en' => 'Better Supply Corporation',
    'app_name_ar' => 'مؤسسة أفضل توريد التجارية',
    'tagline_en' => 'Connecting Markets. Supplying Industries.',
    'tagline_ar' => 'ربط الأسواق. توريد الصناعات.',
    'domain' => 'bettersupplytrading.com',
    'base_path' => $base_path, // e.g. "/bettersupplytrading" or ""
    'base_url' => rtrim($protocol . $host . $base_path, '/'),

    // Contact details from Environment / PDF compliance guidelines
    // Strictly placeholder values until verified corporate credentials provided
    'contacts' => [
        'email' => env('RFQ_TO_EMAIL', '[ENTER VERIFIED CORPORATE EMAIL]'),
        'phone' => env('CORPORATE_PHONE', '[ENTER VERIFIED NUMBER]'),
        'whatsapp' => env('CORPORATE_WHATSAPP', '[ENTER VERIFIED NUMBER]'),
        'address_en' => env('CORPORATE_ADDRESS_EN', 'Dammam, Eastern Province, Kingdom of Saudi Arabia'),
        'address_ar' => env('CORPORATE_ADDRESS_AR', 'الدمام، المنطقة الشرقية، المملكة العربية السعودية'),
        'cr_number' => env('SAUDI_CR_NUMBER', '[ENTER VERIFIED CR NUMBER]'),
    ],

    // Product Category Feature Flags (set to false to gracefully hide without code removal)
    'categories' => [
        'industrial_salts' => (bool)env('CATEGORY_SALTS_ENABLED', true),
        'oilfield_chemicals' => (bool)env('CATEGORY_OILFIELD_ENABLED', true),
        'water_treatment' => (bool)env('CATEGORY_WATER_ENABLED', true),
        'fertilizers' => (bool)env('CATEGORY_FERTILIZERS_ENABLED', true),
        'coco_peat' => (bool)env('CATEGORY_COCOPEAT_ENABLED', true),
        'packaging_disposables' => (bool)env('CATEGORY_PACKAGING_ENABLED', true),
        'other_trading' => (bool)env('CATEGORY_OTHER_TRADING_ENABLED', true),
    ],

    // Analytics and verification
    'analytics' => [
        'ga4_id' => env('GA4_ID', ''), // e.g. 'G-XXXXXXXXXX'
    ],

    // Upload limits
    'upload' => [
        'max_bytes' => 10 * 1024 * 1024, // 10MB
        'allowed_extensions' => ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png', 'webp'],
    ]
];

return $site_config;
