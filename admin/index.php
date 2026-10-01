<?php
include 'includes/header.php';

// Get counts
$prod_count = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();
$inq_count = $conn->query("SELECT COUNT(*) FROM contact_messages")->fetchColumn();
$sub_count = $conn->query("SELECT COUNT(*) FROM subscribers")->fetchColumn();
?>

<div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
    <h2 class="mb-0 fw-bold text-dark">Dashboard Overview</h2>
    <span class="text-muted"><i class="fas fa-calendar-alt me-2"></i> <?= date('F j, Y') ?></span>
</div>

<div class="row g-4 mt-2">
    <div class="col-md-4">
        <div class="card stat-card bg-primary text-white h-100">
            <div class="card-body">
                <i class="fas fa-box stat-icon text-white"></i>
                <h6 class="text-uppercase fw-bold opacity-75 mb-3">Total Products</h6>
                <h1 class="display-3 fw-bold mb-0"><?= $prod_count ?></h1>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3 pt-0">
                <a href="products.php" class="text-white text-decoration-none fw-semibold">Manage Products <i class="fas fa-arrow-circle-right ms-1"></i></a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card stat-card bg-success text-white h-100">
            <div class="card-body">
                <i class="fas fa-envelope-open-text stat-icon text-white"></i>
                <h6 class="text-uppercase fw-bold opacity-75 mb-3">Contact Inquiries</h6>
                <h1 class="display-3 fw-bold mb-0"><?= $inq_count ?></h1>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3 pt-0">
                <a href="inquiries.php" class="text-white text-decoration-none fw-semibold">View Inquiries <i class="fas fa-arrow-circle-right ms-1"></i></a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card stat-card bg-info text-white h-100">
            <div class="card-body">
                <i class="fas fa-users stat-icon text-white"></i>
                <h6 class="text-uppercase fw-bold opacity-75 mb-3">Email Subscribers</h6>
                <h1 class="display-3 fw-bold mb-0"><?= $sub_count ?></h1>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3 pt-0">
                <a href="subscribers.php" class="text-white text-decoration-none fw-semibold">View Subscribers <i class="fas fa-arrow-circle-right ms-1"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-5 text-center">
                <img src="<?= BASE_URL ?>assets/logo/gestev-logo.png" alt="Gestev Logo" style="height: 60px;" class="mb-4 opacity-50">
                <h4 class="fw-bold text-dark">Welcome back to the Control Panel</h4>
                <p class="text-muted mb-0">Select an option from the sidebar to manage your website content.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
