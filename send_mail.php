<?php
require("PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();             // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "crimereportingjk@gmail.com";  // SMTP username
$mail->Password = "mehak@123"; // SMTP password
$mail->Port       =  587;
$mail->SMTPSecure = 'tls';

$mail->From = "crimereportingjk@gmail.com";
$mail->FromName = "CrimeReportingJkAdmin";

$mail->AddAddress("akhilsharmarss@gmail.com ");                  // name is optional

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
