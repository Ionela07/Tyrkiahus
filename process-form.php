<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/Exception.php';
require 'path/to/PHPMailer/PHPMailer.php';
require 'path/to/PHPMailer/SMTP.php';

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
// Get other form fields

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Set up SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-email-password';

// Set sender and recipient
$mail->setFrom('your-email@example.com', 'Your Name');
$mail->addAddress('your-email@example.com', 'Your Name');

// Set email content
$mail->Subject = 'Form Submission';
$mail->Body = "First Name: $firstName\n"
            . "Last Name: $lastName\n";
// Include other form fields in the email body

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>
