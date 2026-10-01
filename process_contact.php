<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if(!empty($name) && !empty($email) && !empty($message)) {
        try {
            $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            echo json_encode(["status" => "success", "message" => "Your message has been sent successfully!"]);
            exit();
        } catch(PDOException $e) {
            echo json_encode(["status" => "error", "message" => "Database error occurred."]);
            exit();
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
        exit();
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
    exit();
}
?>
