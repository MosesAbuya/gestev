<?php

// Dynamic Base URL for Local vs Live
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost') {
    define('BASE_URL', '/gestev/');
} else {
    define('BASE_URL', '/');
}

//Live
$host = "localhost";
$username = "gestevkl_gestev";
$password = "Gestev@2026";
$dbname = "gestevkl_gestev";

//Localhost
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "gestev";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>