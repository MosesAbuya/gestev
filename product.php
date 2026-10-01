<?php 
require_once 'config.php';

if (!isset($_GET['slug'])) {
    header("Location: index.php");
    exit;
}

$slug = $_GET['slug'];
$stmt = $conn->prepare("SELECT * FROM products WHERE slug = ?");
$stmt->execute([$slug]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    header("Location: index.php");
    exit;
}

// Format department name for breadcrumb
$deptNames = [
    'it-office' => ['IT & Office Supplies', '/gestev/it-office-supplies'],
    'ortho' => ['Orthopaedics & Mobility', '/gestev/orthopaedics-mobility'],
    'patient-care' => ['Patient Care & Clinical', '/gestev/patient-care'],
    'medical-equipment' => ['Medical Equipments', '/gestev/medical-equipment']
];

$deptData = isset($deptNames[$product['department']]) ? $deptNames[$product['department']] : ['Products', '/gestev/'];
$deptTitle = $deptData[0];
$deptLink = $deptData[1];

include 'includes/header.php'; 
?>

<!-- Page Banner -->
<section class="page-banner bg-dark text-white text-center" style="background-image: url('/gestev/assets/images/<?= htmlspecialchars($product['image_filename']) ?>');">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-2">
        <h1 class="display-4 fw-bold mb-3" data-aos="fade-up"><?= htmlspecialchars($product['name']) ?></h1>
        <div class="eyebrow justify-content-center text-white" data-aos="fade-up" data-aos-delay="100">
            <a href="/gestev/">HOME</a> &nbsp;/&nbsp; 
            <a href="<?= $deptLink ?>"><?= strtoupper($deptTitle) ?></a> &nbsp;/&nbsp; 
            <?= strtoupper(htmlspecialchars($product['category'])) ?>
        </div>
    </div>
</section>

<!-- Product Details Section -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="bg-white p-3 rounded shadow-sm">
                    <img src="/gestev/assets/images/<?= htmlspecialchars($product['image_filename']) ?>" class="img-fluid rounded w-100" alt="<?= htmlspecialchars($product['name']) ?>" style="height: 500px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <span class="badge bg-primary px-3 py-2 mb-3"><?= htmlspecialchars($product['category']) ?></span>
                <h2 class="display-5 mb-4"><?= htmlspecialchars($product['name']) ?></h2>
                
                <h5 class="mb-3">Product Description</h5>
                <p class="text-muted mb-5 fs-5 lh-lg"><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                
                <div class="bg-white p-4 rounded shadow-sm mb-5">
                    <h5 class="mb-2">Need to order this item?</h5>
                    <p class="small text-muted mb-0">We offer bulk purchasing and procurement contracts for private institutions and government sectors.</p>
                </div>

                <a href="contact.php?subject=Inquiry about <?= urlencode($product['name']) ?>" class="btn btn-primary btn-lg">
                    Request a Quote
                    <span class="icon-box bg-white text-primary ms-3"><i class="fas fa-arrow-right fs-6"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related Products (Optional, just a placeholder section) -->
<section class="section-padding">
    <div class="container text-center">
        <h3 class="mb-5">Other Products in <?= $deptTitle ?></h3>
        <a href="<?= $deptLink ?>" class="btn btn-outline-dark">
            Back to <?= $deptTitle ?>
            <i class="fas fa-undo ms-2"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
