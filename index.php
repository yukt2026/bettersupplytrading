<?php
/**
 * Better Supply Trading Establishment - Root Dispatcher
 * Redirects root visits to the appropriate language prefix (/en/ or /ar/).
 */

session_start();

$site_config = require __DIR__ . '/config.php';

// If route params are present, delegate to router
if (isset($_GET['lang']) && isset($_GET['page'])) {
    $lang = $_GET['lang'];
    $page = $_GET['page'];
    require_once __DIR__ . '/router.php';
    exit;
}

// Language detection
$lang = 'en';
if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['en', 'ar'])) {
    $lang = $_SESSION['lang'];
} elseif (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($browser_lang === 'ar') {
        $lang = 'ar';
    }
}

$redirect_target = rtrim($site_config['base_path'], '/') . '/' . $lang . '/';
header("Location: " . $redirect_target, true, 302);
exit;
