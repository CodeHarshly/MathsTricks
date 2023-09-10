<?php
session_start();

// Check if the dark mode state is provided in the URL
if (isset($_GET['darkMode'])) {
    $darkMode = $_GET['darkMode'];
    $_SESSION['darkMode'] = ($darkMode === '1');
}

// Set the dark mode state in the session
if (!isset($_SESSION['darkMode'])) {
    $_SESSION['darkMode'] = false;
}
?>
