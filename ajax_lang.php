<?php
// ============================================================
// ajax_lang.php — Language Switcher AJAX Endpoint
// ============================================================

session_start();
require_once 'includes/functions.php';

header('Content-Type: application/json; charset=utf-8');

// 1. Get language from POST or JSON body robustly
$lang = 'km'; // default
if (isset($_POST['lang'])) {
    $lang = trim($_POST['lang']);
} else {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['lang'])) {
        $lang = trim($input['lang']);
    }
}

// 2. Validate language choice
if (!in_array($lang, ['km', 'en'], true)) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Invalid language. Allowed: km, en',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// 3. Save language to Session
$_SESSION['lang'] = $lang;

// 4. Fetch all translations safely
if (!function_exists('get_all_translations')) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Function get_all_translations() not found in functions.php',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$translations = get_all_translations($lang);

// 5. Verify translation dictionary
if (empty($translations)) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Translation dictionary is empty for: ' . $lang,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// 6. Return successful response back to JavaScript
echo json_encode([
    'status'       => 'success',
    'lang'         => $lang,
    'count'        => count($translations),
    'translations' => $translations,
], JSON_UNESCAPED_UNICODE);

exit;