<?php
// Include PHPMailer classes
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if(isset($_POST['submitContact'])) {
    $title = "Thank you for your feedback!";
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate and sanitize input
    if (empty($email) && empty($subject) && empty($message)) {
        $output = "All fields are required.";
        
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $output = "Invalid email format.";
        
    }
   try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'longvu7702@gmail.com'; 
        $mail->Password = 'zpcx eifn edxu mghc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('longvu7702@gmail.com', $email);
        $mail->addAddress('longvu7702@gmail.com');

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        $output = 'Email was sent successfully!';
    } catch (Exception $e) {
        $output = "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}else {
    $title = "Web Form ";
    ob_start();
    include 'templates/mail.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';