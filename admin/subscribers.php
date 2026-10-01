<?php
include 'includes/header.php';

// Handle Delete Subscriber
if (isset($_POST['delete_subscriber'])) {
    try {
        $stmt = $conn->prepare("DELETE FROM subscribers WHERE id = ?");
        $stmt->execute([$_POST['delete_id']]);
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Subscriber deleted.']);
            exit;
        }
        header("Location: subscribers.php?deleted=1");
        exit;
    } catch(PDOException $e) {
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Could not delete subscriber.']);
            exit;
        }
    }
}

// Fetch subscribers
$stmt = $conn->query("SELECT * FROM subscribers ORDER BY created_at DESC");
$subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Newsletter Subscribers</h2>
</div>

<?php if (isset($_GET['deleted'])) echo "<div class='alert alert-warning'>Subscriber deleted.</div>"; ?>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Subscribed On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscribers as $s): ?>
                <tr>
                    <td><?= $s['id'] ?></td>
                    <td><?= htmlspecialchars($s['email']) ?></td>
                    <td><?= date('M j, Y H:i', strtotime($s['created_at'])) ?></td>
                    <td>
                        <a href="subscribers.php?delete=<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Remove subscriber?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(count($subscribers) == 0): ?>
                <tr><td colspan="4" class="text-center py-4">No subscribers found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
