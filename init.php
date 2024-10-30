<?php

// Check if a session is already active before starting one
if (session_status() === PHP_SESSION_NONE) {
    session_start();  
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? 'fr';

$langFile = __DIR__ . "/languages/{$lang}.php";  // Charger le fichier dans le dossier "languages"

if (file_exists($langFile)) {
    $translations = include $langFile;  // Charger le fichier de langue
} else {
    $translations = include __DIR__ . "/languages/fr.php";
}

?>
