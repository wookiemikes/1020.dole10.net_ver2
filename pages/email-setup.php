<?
session_start();
include "../db/server.php";
require "../PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body){
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;

  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->Username = 'dole10.1020email@gmail.com';
  $mail->Password = 'd0l34dm;n1020';

  //   $path = 'reseller.pdf';
  //   $mail->AddAttachment($path);

  $mail->IsHTML(true);
  $mail->From = "dole10.1020email@gmail.com";
  $mail->FromName = $from_name;
  $mail->Sender = $from;
  $mail->AddReplyTo($from, $from_name);
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AddAddress($to);
  if (!$mail->Send()) {
    $error = "Please try Later, Error Occured while Processing...";
    return $error;
  } else {
    $error = "Thanks You !! Your email is sent.";
    return $error;
  }
}

//

?>