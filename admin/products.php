<?php
include 'includes/header.php';

// Handle Add Product
if (isset($_POST['add_product'])) {
    function createSlug($str) {
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return trim($str, '-');
    }
    
    $slug = createSlug($_POST['name']);
    
    try {
        $stmt = $conn->prepare("INSERT INTO products (name, slug, department, category, description, image_filename) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $_POST['name'],
            $slug,
            $_POST['department'],
            $_POST['category'],
            $_POST['description'],
            $_POST['image_filename']
        ]);
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Product added successfully!']);
            exit;
        }
        header("Location: products.php?success=1");
        exit;
    } catch(PDOException $e) {
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
            exit;
        }
    }
}

// Handle Delete Product
if (isset($_POST['delete_product'])) {
    try {
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$_POST['delete_id']]);
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Product deleted.']);
            exit;
        }
        header("Location: products.php?deleted=1");
        exit;
    } catch(PDOException $e) {
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Could not delete product.']);
            exit;
        }
    }
}

// Fetch all products
$stmt = $conn->query("SELECT * FROM products ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Manage Products</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="fas fa-plus"></i> Add Product</button>
</div>

<?php if (isset($_GET['success'])) echo "<div class='alert alert-success'>Product added successfully!</div>"; ?>
<?php if (isset($_GET['deleted'])) echo "<div class='alert alert-warning'>Product deleted.</div>"; ?>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><img src="../assets/images/<?= htmlspecialchars($p['image_filename']) ?>" style="height:40px; width:40px; object-fit:cover; border-radius:4px;"></td>
                    <td><?= htmlspecialchars($p['name']) ?></td>
                    <td><span class="badge bg-secondary"><?= $p['department'] ?></span></td>
                    <td><?= htmlspecialchars($p['category']) ?></td>
                    <td>
                        <a href="products.php?delete=<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Department</label>
                        <select name="department" class="form-select" required>
                            <option value="it-office">IT & Office Supplies</option>
                            <option value="ortho">Orthopaedics & Mobility</option>
                            <option value="patient-care">Patient Care & Clinical</option>
                            <option value="medical-equipment">Medical Equipment</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Category (e.g., Laptops, Braces)</label>
                        <input type="text" name="category" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Image Filename</label>
                        <input type="text" name="image_filename" class="form-control" placeholder="e.g. image.jpg" required>
                    </div>
                    <div class="col-12">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="add_product" class="btn btn-success">Save Product</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
