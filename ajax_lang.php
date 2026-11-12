<?php
// ============================================================
// ajax_lang.php — Language Switcher AJAX Endpoint
// ============================================================

session_start();
require_once 'includes/functions.php';

header('Content-Type: application/json; charset=utf-8');

// ១. ពិនិត្យមើលភាសាដែលបានផ្ញើមក
$lang = $_POST['lang'] ?? 'km';
if (!in_array($lang, ['km', 'en'], true)) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Invalid language. Allowed: km, en',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// ២. រក្សាទុកភាសាទៅក្នុង Session
$_SESSION['lang'] = $lang;

// ៣. ទាញយកពាក្យបកប្រែទាំងអស់ (ទាំង KM និង EN) ដោយស្វ័យប្រវត្តិពី functions.php
$translations = get_all_translations($lang);

// ៤. ពិនិត្យមើលថាតើមានទិន្នន័យឬអត់
if (empty($translations)) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Translation dictionary is empty for: ' . $lang,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// ៥. បញ្ជូនទិន្នន័យត្រឡប់ទៅ JavaScript វិញ
echo json_encode([
    'status'       => 'success',
    'lang'         => $lang,
    'count'        => count($translations),
    'translations' => $translations,
], JSON_UNESCAPED_UNICODE);

exit;