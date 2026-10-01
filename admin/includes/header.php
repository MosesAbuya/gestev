<?php
session_start();
require_once '../config.php';

// Ensure tables exist
$conn->exec("CREATE TABLE IF NOT EXISTS subscribers (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL UNIQUE, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");

// Ensure logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestev Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; }
        .sidebar { min-height: 100vh; width: 250px; background: #343a40; color: #fff; transition: all 0.3s; }
        .sidebar a { color: #c2c7d0; padding: 15px; display: block; text-decoration: none; border-bottom: 1px solid #4f5962; }
        .sidebar a:hover, .sidebar a.active { background: #007bff; color: #fff; }
        .sidebar .brand { padding: 20px 15px; font-size: 20px; font-weight: bold; text-align: center; background: #23272b; border-bottom: none; }
        .content-wrapper { flex-grow: 1; display: flex; flex-direction: column; }
        .top-navbar { background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.08); padding: 15px 20px; }
        .main-content { padding: 20px; }
    </style>
</head>
<body class="d-flex m-0">

<!-- Sidebar -->
<div class="sidebar flex-shrink-0">
    <div class="brand">Gestev Admin</div>
    <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
    <a href="products.php" class="<?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>"><i class="fas fa-box me-2"></i> Products</a>
    <a href="inquiries.php" class="<?= basename($_SERVER['PHP_SELF']) == 'inquiries.php' ? 'active' : '' ?>"><i class="fas fa-envelope me-2"></i> Contact Inquiries</a>
    <a href="subscribers.php" class="<?= basename($_SERVER['PHP_SELF']) == 'subscribers.php' ? 'active' : '' ?>"><i class="fas fa-users me-2"></i> Subscribers</a>
</div>

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Top Navbar -->
    <div class="top-navbar d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-dark">Control Panel</h5>
        <div>
            <a href="/gestev/" class="btn btn-outline-secondary btn-sm me-2" target="_blank">View Site</a>
            <a href="?logout=1" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
