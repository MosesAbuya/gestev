<?php
require_once 'config.php';
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $conn->prepare("INSERT IGNORE INTO subscribers (email) VALUES (?)");
            $stmt->execute([$email]);
            echo json_encode(["status" => "success", "message" => "Thank you for subscribing!"]);
            exit;
        } catch(PDOException $e) {
            echo json_encode(["status" => "error", "message" => "Database error occurred."]);
            exit;
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Please enter a valid email address."]);
        exit;
    }
}
echo json_encode(["status" => "error", "message" => "Invalid request."]);
?>
