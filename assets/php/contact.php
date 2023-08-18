<?php
// PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';

// Data received from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Message preparation
$mail = new PHPMailer;
$mail->setFrom($email, $name);
$mail->addAddress('info@gmail.com'); // The email address to which the message will be sent
$mail->Subject = $subject;
$mail->Body = $message;

// If the mail was sent successfully
if ($mail->send()) {
    echo 'Message sent successfully!';
} else {
    echo 'Error sending message:' . $mail->ErrorInfo;
}
?>
