<?php 
require_once 'config.php';
include 'includes/header.php'; 

// Fetch IT & Office products
$stmt = $conn->prepare("SELECT * FROM products WHERE department = 'it-office-supplies' ORDER BY id DESC");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Page Banner -->
<section class="page-banner bg-dark text-white text-center" style="background-image: url('assets/images/Sleek corporate ultrabook open on a clean desk.jpg');">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-2">
        <h1 class="display-4 fw-bold mb-3" data-aos="fade-up">IT & Office Supplies</h1>
        <div class="eyebrow justify-content-center text-white" data-aos="fade-up" data-aos-delay="100">
            <a href="<?= BASE_URL ?>index">Home</a> &nbsp;/&nbsp; Departments &nbsp;/&nbsp; IT & Office
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="assets/images/Modern curved wooden corporate reception desk and modular 4-pod office cubicles.jpg" class="img-fluid rounded" alt="Office Furniture">
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <div class="eyebrow">Enterprise Solutions</div>
                <h2 class="display-5 mb-4">Equipping your modern workplace</h2>
                <p class="text-muted mb-4">We supply state-of-the-art IT equipment and ergonomic office furniture to ensure your business operations run smoothly and your team remains productive.</p>
                <ul class="list-unstyled mb-5">
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> High-performance laptops and desktop workstations</li>
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Networking equipment and server racks</li>
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Ergonomic office chairs and modular desks</li>
                    <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Printing, scanning, and copying stations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Dynamic Products Section -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row text-center mb-5 justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="display-5 mb-3">Our IT & Office Products</h2>
                <p class="text-muted">Browse our extensive inventory of technology and office furniture. Click any product for more details.</p>
            </div>

        <!-- Filter and Search Bar -->
        <div class="row mb-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="bg-white p-3 rounded shadow-sm d-flex flex-column flex-md-row gap-3">
                    <div class="flex-grow-1 position-relative">
                        <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        <input type="text" id="productSearch" class="form-control border-0 bg-light ps-5 py-2" placeholder="Search products by name...">
                    </div>
                    <div style="min-width: 200px;">
                        <select id="categoryFilter" class="form-select border-0 bg-light py-2">
                            <option value="all">All Categories</option>
                            <?php 
                            $cats = array_unique(array_column($products, 'category'));
                            sort($cats);
                            foreach($cats as $cat) {
                                echo '<option value="'.htmlspecialchars($cat).'">'.htmlspecialchars($cat).'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4" id="productGrid">
            <?php if (count($products) > 0): ?>
                <?php foreach($products as $product): ?>
                    <div class="col-lg-4 col-md-6 product-item" data-aos="fade-up" data-category="<?= htmlspecialchars($product['category']) ?>" data-name="<?= strtolower(htmlspecialchars($product['name'])) ?>">
                        <div class="bg-white rounded shadow-sm h-100 overflow-hidden d-flex flex-column position-relative">
                            <a href="product/<?= $product['slug'] ?>" class="text-decoration-none text-dark d-flex flex-column h-100">
                                <div style="height: 250px; overflow: hidden; background: #f8f9fa;" class="d-flex align-items-center justify-content-center">
                                    <img src="assets/images/<?= htmlspecialchars($product['image_filename']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                </div>
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <span class="badge bg-light text-primary mb-2 align-self-start border border-primary"><?= htmlspecialchars($product['category']) ?></span>
                                    <h5 class="mb-2"><?= htmlspecialchars($product['name']) ?></h5>
                                    <p class="text-muted small flex-grow-1 mb-4"><?= htmlspecialchars(substr($product['description'], 0, 80)) ?>...</p>
                                    <div class="mt-auto">
                                        <span class="text-primary fw-bold small">View Details <i class="fas fa-arrow-right ms-1"></i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No products available in this department yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('productSearch');
    const categoryFilter = document.getElementById('categoryFilter');
    const products = document.querySelectorAll('.product-item');

    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        products.forEach(product => {
            const name = product.getAttribute('data-name');
            const category = product.getAttribute('data-category');
            
            const matchesSearch = name.includes(searchTerm);
            const matchesCategory = selectedCategory === 'all' || category === selectedCategory;

            if (matchesSearch && matchesCategory) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    }

    if (searchInput) searchInput.addEventListener('input', filterProducts);
    if (categoryFilter) categoryFilter.addEventListener('change', filterProducts);
});
</script>

<?php include 'includes/footer.php'; ?>