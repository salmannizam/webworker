<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check login
if (!($_SESSION["logged_in"] ?? false)) {
    header("Location: /login.php");
    exit;
}
?>
