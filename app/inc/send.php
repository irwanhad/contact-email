<?php
session_start();
if ( isset($_POST['guvenlikKodu']) && $_POST['guvenlikKodu'] ){
 $guvenlikKontrol = false;
 if ( $_POST['guvenlikKodu'] == $_SESSION['guvenlikKodu'] ){
 $guvenlikKontrol = true;
 }

 if ( $guvenlikKontrol ){

$message=$_POST['message'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$company=$_POST['company'];
$subject=$_POST['subject'];
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
$content = "<h2>You have a message from $domain contact form.</h2>  <p><b>Name:</b> $name</p> <p><b>E-Mail:</b> $email</p> <p><b>Phone:</b> $phone</p> <p><b>Company:</b> $company</p> <p><b>Subject: $subject</b> </p> <p><b>Message:</b> $message</p>";
$mail->MsgHTML($content);
if(!$mail->Send())
{
   echo "<center>Error! Its wrong!</center>";
   echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<center><p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
   exit;
}
echo "<center>Thank you! Your message has reached us! <p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
 } else {
 echo "<center>Please check Security Code! <p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
 }
}
?>
