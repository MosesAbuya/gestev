<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestev K. Limited - Quality Service Delivery</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/gestev/assets/css/style.css">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Navigation -->
<?php $isHome = (basename($_SERVER['PHP_SELF']) == 'index.php'); ?>
<nav class="navbar navbar-expand-lg fixed-top <?= $isHome ? 'navbar-dark' : 'navbar-light bg-white shadow-sm border-0' ?>" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/gestev/assets/logo/gestev-logo.png" alt="Gestev K. Limited Logo" style="height: 40px; <?= $isHome ? 'background: white; padding: 5px; border-radius: 4px;' : '' ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="/gestev/">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['about.php', 'our-team.php', 'certifications.php']) ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/gestev/about">Company Overview</a></li>
                        <li><a class="dropdown-item" href="/gestev/our-team">Our Leadership Team</a></li>
                        <li><a class="dropdown-item" href="/gestev/certifications">Certifications & Compliance</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['it-office-supplies.php', 'orthopaedics-mobility.php', 'patient-care.php', 'medical-equipment.php', 'it-services.php']) ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">Departments</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/gestev/it-office-supplies">IT & Office Supplies</a></li>
                        <li><a class="dropdown-item" href="/gestev/it-services">IT Services & Maintenance</a></li>
                        <li><a class="dropdown-item" href="/gestev/orthopaedics-mobility">Orthopaedics & Mobility</a></li>
                        <li><a class="dropdown-item" href="/gestev/patient-care">Patient Care & Clinical</a></li>
                        <li><a class="dropdown-item" href="/gestev/medical-equipment">Specialized Medical Equipment</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>" href="/gestev/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="d-none d-lg-block">
            <a href="contact.php" class="btn btn-primary">
                Contact Us
                <span class="icon-box"><i class="fas fa-arrow-right fs-6"></i></span>
            </a>
        </div>
    </div>
</nav>
