<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!($_SESSION["logged_in"] ?? false)) {
    header("Location: /login.php");
    exit;
}
?>
