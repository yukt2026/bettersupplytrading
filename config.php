<?php
/**
 * Better Supply Trading Establishment (مؤسسة أفضل توريد التجارية)
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
    'app_name_en' => 'Better Supply Trading Establishment',
    'app_name_ar' => 'مؤسسة أفضل توريد التجارية',
    'tagline_en' => 'Connecting Markets. Supplying Industries.',
    'tagline_ar' => 'نربط الأسواق. نمد الصناعات.',
    'domain' => 'bettersupplytrading.com',
    'base_path' => $base_path, // e.g. "/bettersupplytrading" or ""
    'base_url' => rtrim($protocol . $host . $base_path, '/'),

    // Verified Corporate & Direct Team Contact Details
    'contacts' => [
        'email' => env('RFQ_TO_EMAIL', 'info@bettersupplytrading.com'),
        'phone' => env('CORPORATE_PHONE', '+966599510213'),
        'whatsapp' => env('CORPORATE_WHATSAPP', '+966599510213'),
        'address_en' => 'King Abdulaziz Road, Al Badi Dist. P.O. Box 5513, Dammam 32415, Saudi Arabia',
        'address_ar' => 'طريق الملك عبدالعزيز، حي البديع، ص.ب 5513، الدمام 32415، المملكة العربية السعودية',
        'cr_number' => env('SAUDI_CR_NUMBER', ''),
        'team' => [
            'sales' => [
                'name' => 'Meharsha O.N',
                'title_en' => 'Sales Executive',
                'title_ar' => 'مسؤول المبيعات التجارية',
                'dept_en' => 'Sales & Commercial Enquiries',
                'dept_ar' => 'المبيعات والاستفسارات التجارية',
                'phone' => '+966599510213',
                'email' => 'sales@bettersupplytrading.com',
            ],
            'operations' => [
                'name' => 'Sayed Alavi',
                'title_en' => 'Operations Director',
                'title_ar' => 'مدير العمليات التشغيلية',
                'dept_en' => 'Operations & Management Enquiries',
                'dept_ar' => 'إدارة العمليات واللوجستيات',
                'phone' => '0502851077',
                'email' => 'operations@bettersupplytrading.com',
            ]
        ]
    ],

    // Product Category Feature Flags (set to false to gracefully hide without code removal)
    'categories' => [
        // Final Display Sequence (1 - 9)
        'agrochemicals' => (bool)env('CATEGORY_AGROCHEMICALS_ENABLED', true),
        'industrial_chemicals' => (bool)env('CATEGORY_CHEMICALS_ENABLED', true),
        'industrial_salts' => (bool)env('CATEGORY_SALTS_ENABLED', true),
        'building_materials' => (bool)env('CATEGORY_BUILDING_ENABLED', true),
        'machinery_equipment' => (bool)env('CATEGORY_MACHINERY_ENABLED', true),
        'spare_parts' => (bool)env('CATEGORY_SPARES_ENABLED', true),
        'industrial_supplies' => (bool)env('CATEGORY_SUPPLIES_ENABLED', true),
        'other_trading' => (bool)env('CATEGORY_OTHER_TRADING_ENABLED', true),
        'international_sourcing' => (bool)env('CATEGORY_SOURCING_ENABLED', true),

        // Legacy / Sub-category flags for backward compatibility
        'oilfield_chemicals' => (bool)env('CATEGORY_OILFIELD_ENABLED', true),
        'water_treatment' => (bool)env('CATEGORY_WATER_ENABLED', true),
        'fertilizers' => (bool)env('CATEGORY_FERTILIZERS_ENABLED', true),
        'coco_peat' => (bool)env('CATEGORY_COCOPEAT_ENABLED', true),
        'packaging_disposables' => (bool)env('CATEGORY_PACKAGING_ENABLED', true),
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
