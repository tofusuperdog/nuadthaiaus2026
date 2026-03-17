<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determine language preference
$allowed_langs = ['en', 'th'];
$default_lang = 'en';

// Fix for local servers (like Five Server) that might not populate $_GET
$lang_param = null;

// Read from GET or URL first
if (isset($_GET['lang'])) {
    $lang_param = $_GET['lang'];
} elseif (isset($_SERVER['QUERY_STRING'])) {
    parse_str($_SERVER['QUERY_STRING'], $query_params);
    if (isset($query_params['lang'])) {
        $lang_param = $query_params['lang'];
    }
} elseif (isset($_SERVER['REQUEST_URI'])) {
    $url_parts = parse_url($_SERVER['REQUEST_URI']);
    if (isset($url_parts['query'])) {
        parse_str($url_parts['query'], $query_params);
        if (isset($query_params['lang'])) {
            $lang_param = $query_params['lang'];
        }
    }
}

// Check session first, then cookie
if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $allowed_langs)) {
    $current_lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $allowed_langs)) {
    $current_lang = $_COOKIE['lang'];
    $_SESSION['lang'] = $current_lang; // Restore session
} else {
    $current_lang = $default_lang;
}

// If we got a param in the URL, that overrides session/cookie
if ($lang_param && in_array($lang_param, $allowed_langs)) {
    $current_lang = $lang_param;
    $_SESSION['lang'] = $current_lang;
    setcookie('lang', $current_lang, time() + (86400 * 30), "/");
}

// Load translation file
$lang_file = __DIR__ . "/../lang/{$current_lang}.php";
$translations = [];

if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    // Fallback to English if file is missing
    $translations = include __DIR__ . "/../lang/en.php";
}

// Global translation function
if (!function_exists('_t')) {
    function _t($key, $default = '') {
        global $translations;
        return $translations[$key] ?? ($default !== '' ? $default : $key);
    }
}

?>
