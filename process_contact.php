<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'config.php';

// Include PHPMailer files
require_once 'includes/PHPMailer/Exception.php';
require_once 'includes/PHPMailer/PHPMailer.php';
require_once 'includes/PHPMailer/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if(!empty($name) && !empty($email) && !empty($message)) {
        try {
            // Save to DB
            $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            
            // Send Emails via SMTP
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = $smtp_host;
                $mail->SMTPAuth   = true;
                $mail->Username   = $smtp_user;
                $mail->Password   = $smtp_pass;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                // 1. Email to Admin
                $mail->setFrom($smtp_user, 'Gestev K. Limited');
                $mail->addAddress('info@gestevklimited.co.ke');
                $mail->addReplyTo($email, $name);
                
                $mail->isHTML(true);
                $mail->Subject = "New Contact Form Submission - $name";
                $mail->Body    = "<h3>New Message Received</h3>
                                  <p><strong>Name:</strong> $name</p>
                                  <p><strong>Email:</strong> $email</p>
                                  <p><strong>Phone:</strong> $phone</p>
                                  <p><strong>Message:</strong><br/>" . nl2br($message) . "</p>";
                $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
                
                $mail->send();

                // 2. Auto-responder to User
                $mail->clearAddresses();
                $mail->clearReplyTos();
                $mail->addAddress($email, $name);
                
                $mail->isHTML(true);
                $mail->Subject = "Thank you for contacting Gestev K. Limited";
                $mail->Body    = "<h3>Hello $name,</h3>
                                  <p>Thank you for reaching out to us. We have successfully received your message.</p>
                                  <p>Our team will review your inquiry and get back to you shortly.</p>
                                  <br/>
                                  <p>Best Regards,<br/><strong>Gestev K. Limited Team</strong></p>
                                  <p><small>Fortis Suites 3rd Floor Room 310, Hospital Road, Upper Hill, Nairobi</small></p>";
                $mail->AltBody = "Hello $name,\n\nThank you for reaching out to us. We have successfully received your message.\n\nOur team will review your inquiry and get back to you shortly.\n\nBest Regards,\nGestev K. Limited Team";
                
                $mail->send();
                
            } catch (Exception $e) {
                // If mail fails, we still saved to DB, so we can log error but return success to user, 
                // OR we return error depending on preference. Usually better to let them know it failed.
                error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                // Fallthrough to success message so the user doesn't panic if just the SMTP fails, but ideally:
                // echo json_encode(["status" => "error", "message" => "Message saved, but email notification failed."]);
                // exit();
            }

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
