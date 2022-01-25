<?php
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";
require "phpmailer/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = 'true';
$mail->SMTPSecure = 'tls';
$mail->Port = '587';
$mail->Username = 'dole10.1020email@gmail.com';
$mail->Password = 'd0l34dm;n1020';
$mail->Subject = 'Test Email Only';
$mail->setFrom('dole10.1020email@gmail.com');
$mail->Body = 'SAMPLE EMAIL';
$mail->addAddress('dole10.technical@gmail.com');
if ($mail->Send()) {
    echo "Email Sent!";
}else {
    echo "Error. Please Try Again";
}
$mail->smtpClose();

?>