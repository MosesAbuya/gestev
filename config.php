<?php

// Dynamic Base URL for Local vs Live
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost') {
    define('BASE_URL', '/gestev/');
} else {
    define('BASE_URL', '/');
}

// DB credentials — auto-switch based on environment
$httpHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'live';
if ($httpHost === 'localhost') {
    // Localhost (XAMPP)
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestev";

    // SMTP Settings for Local (Fallback to same as live or test)
    $smtp_host = "mail.gestevklimited.co.ke";
    $smtp_user = "info@gestevklimited.co.ke";
    $smtp_pass = "Gestev@2026";
} else {
    // Live cPanel
    $host = "localhost";
    $username = "gestevkl_gestev";
    $password = "Gestev@2026";
    $dbname = "gestevkl_gestev";

    // SMTP Settings for Live
    $smtp_host = "mail.gestevklimited.co.ke";
    $smtp_user = "info@gestevklimited.co.ke";
    $smtp_pass = "Gestev@2026"; // Assuming it matches DB, change if different
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
