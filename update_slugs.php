<?php
require 'config.php';

try {
    // Add slug column
    $conn->exec("ALTER TABLE products ADD COLUMN slug VARCHAR(255) DEFAULT NULL");
} catch (PDOException $e) {
    echo "Column might exist or error: " . $e->getMessage() . "\n";
}

// Function to generate slug
function createSlug($str) {
    $str = strtolower(trim($str));
    $str = preg_replace('/[^a-z0-9-]/', '-', $str);
    $str = preg_replace('/-+/', "-", $str);
    return trim($str, '-');
}

// Update all existing products to have a slug
$stmt = $conn->query("SELECT id, name FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$updateStmt = $conn->prepare("UPDATE products SET slug = ? WHERE id = ?");

foreach ($products as $p) {
    $slug = createSlug($p['name']);
    $updateStmt->execute([$slug, $p['id']]);
}

echo "Database updated!";
?>
