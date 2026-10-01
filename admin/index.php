<?php
include 'includes/header.php';

// Get counts
$prod_count = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();
$inq_count = $conn->query("SELECT COUNT(*) FROM contact_messages")->fetchColumn();
$sub_count = $conn->query("SELECT COUNT(*) FROM subscribers")->fetchColumn();
?>

<h2 class="mb-4">Dashboard Overview</h2>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm text-center p-4 bg-white border-0">
            <h1 class="display-4 text-primary"><?= $prod_count ?></h1>
            <p class="text-muted mb-0">Total Products</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm text-center p-4 bg-white border-0">
            <h1 class="display-4 text-success"><?= $inq_count ?></h1>
            <p class="text-muted mb-0">Contact Inquiries</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm text-center p-4 bg-white border-0">
            <h1 class="display-4 text-info"><?= $sub_count ?></h1>
            <p class="text-muted mb-0">Subscribers</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
