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

// Session Timeout (30 minutes)
$timeout_duration = 1800; // 30 minutes in seconds
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();

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
    <base href="<?= BASE_URL ?>admin/">

    <meta charset="UTF-8">
    <title>Gestev Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #333; }
        .sidebar { min-height: 100vh; width: 260px; background: #212529; color: #fff; transition: all 0.3s; position: fixed; top:0; bottom:0; left:0; z-index: 1000; }
        .sidebar a { color: #adb5bd; padding: 16px 20px; display: block; text-decoration: none; border-bottom: 1px solid rgba(255,255,255,0.05); font-weight: 500; transition: 0.2s; }
        .sidebar a:hover { color: #fff; background: rgba(255,255,255,0.05); padding-left: 25px; }
        .sidebar a.active { background: #0d6efd; color: #fff; border-left: 4px solid #fff; padding-left: 16px; }
        .sidebar .brand { padding: 25px 20px; font-size: 22px; font-weight: 700; text-align: center; background: #1a1d20; color: #fff; letter-spacing: 1px; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .content-wrapper { margin-left: 260px; flex-grow: 1; display: flex; flex-direction: column; min-height: 100vh; }
        .top-navbar { background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.03); padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaeaea; }
        .main-content { padding: 30px; }
        .stat-card { border: none; border-radius: 12px; transition: transform 0.3s; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        .stat-card .card-body { padding: 25px; position: relative; z-index: 2; }
        .stat-icon { position: absolute; right: -20px; bottom: -20px; font-size: 100px; opacity: 0.1; z-index: 1; }
        .table-custom { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
        .table-custom thead { background: #f8f9fa; }
        .table-custom th { border-bottom: none; font-weight: 600; color: #555; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; padding: 15px; }
        .table-custom td { vertical-align: middle; padding: 15px; border-color: #f1f1f1; }
        .btn-custom { border-radius: 8px; font-weight: 500; }
    </style>
</head>
<body class="d-flex m-0">

<!-- Sidebar -->
<div class="sidebar flex-shrink-0 shadow-lg">
    <div class="brand">GESTEV<span class="text-primary">ADMIN</span></div>
    <div class="mt-3">
        <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><i class="fas fa-chart-pie me-3 w-20px text-center"></i> Dashboard</a>
        <a href="products.php" class="<?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>"><i class="fas fa-boxes me-3 w-20px text-center"></i> Products</a>
        <a href="inquiries.php" class="<?= basename($_SERVER['PHP_SELF']) == 'inquiries.php' ? 'active' : '' ?>"><i class="fas fa-envelope-open-text me-3 w-20px text-center"></i> Inquiries</a>
        <a href="subscribers.php" class="<?= basename($_SERVER['PHP_SELF']) == 'subscribers.php' ? 'active' : '' ?>"><i class="fas fa-users me-3 w-20px text-center"></i> Subscribers</a>
    </div>
</div>

<!-- Content Wrapper -->
<div class="content-wrapper bg-light">
    <!-- Top Navbar -->
    <div class="top-navbar">
        <h5 class="mb-0 text-dark fw-bold"><i class="fas fa-shield-alt text-primary me-2"></i> Control Panel</h5>
        <div>
            <a href="<?= BASE_URL ?>" class="btn btn-light border btn-sm me-3 btn-custom" target="_blank"><i class="fas fa-external-link-alt me-1"></i> Live Site</a>
            <a href="?logout=1" class="btn btn-danger btn-sm btn-custom shadow-sm"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
