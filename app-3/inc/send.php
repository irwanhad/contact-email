<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$company=$_POST['company'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$domain=$_SERVER['HTTP_HOST'];

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port     = 587;
$mail->Host     = "mail.cyaninstrument.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "contact@cyaninstrument.com";  // SMTP username
$mail->Password = "haseum267655"; // SMTP password
$mail->From     = "contact@cyaninstrument.com"; // it must be a match with SMTP username
$mail->FromName = "Cyan Instrument"; // from name
$mail->AddAddress("xirwanx@gmail.com","Cyan Instrument"); // SMTP username , Name Surname
$mail->Subject  =  $_POST['subject'];
$content = "<h2>You have a message from $domain contact form.</h2>  <p><b>Name:</b> $name</p> <p><b>E-Mail:</b> $email</p> <p><b>Phone:</b> $phone</p> <p><b>Company:</b> $company</p> <p><b>Subject:</b> $subject</p> <p><b>Message:</b> $message</p>";
$mail->MsgHTML($content);

if (!$mail->Send()) {
  header("Location: ../email-error.php");
  exit;
}

header("Location: ../email-send.php");

// if(!$mail->Send())
// {
// echo "Message could not be sent. <p>";
// echo "Mailer Error: " . $mail->ErrorInfo;
// exit;
// }
//
// echo "Message has been sent";
?>
