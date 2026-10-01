<?php
include 'includes/header.php';

// Handle Delete Inquiry
if (isset($_POST['delete_inquiry'])) {
    try {
        $stmt = $conn->prepare("DELETE FROM contact_messages WHERE id = ?");
        $stmt->execute([$_POST['delete_id']]);
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Inquiry deleted.']);
            exit;
        }
        header("Location: inquiries.php?deleted=1");
        exit;
    } catch(PDOException $e) {
        if (isset($_POST['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Could not delete inquiry.']);
            exit;
        }
    }
}

// Fetch inquiries
$stmt = $conn->query("SELECT * FROM contact_messages ORDER BY created_at DESC");
$inquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Contact Inquiries</h2>
</div>

<?php if (isset($_GET['deleted'])) echo "<div class='alert alert-warning'>Inquiry deleted.</div>"; ?>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email / Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $i): ?>
                <tr>
                    <td style="white-space:nowrap;"><?= date('M j, Y H:i', strtotime($i['created_at'])) ?></td>
                    <td><?= htmlspecialchars($i['name']) ?></td>
                    <td><?= htmlspecialchars($i['email']) ?><br><small class="text-muted"><?= htmlspecialchars($i['phone']) ?></small></td>
                    <td><?= htmlspecialchars($i['subject']) ?></td>
                    <td><small><?= nl2br(htmlspecialchars($i['message'])) ?></small></td>
                    <td>
                        <a href="inquiries.php?delete=<?= $i['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this message?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(count($inquiries) == 0): ?>
                <tr><td colspan="6" class="text-center py-4">No inquiries found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
