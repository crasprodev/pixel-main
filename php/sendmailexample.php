<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
function send_email($emailrecipiente,$titulo, $conteudo,$cc)
{
$mail = new PHPMailer();
$mail->IsSMTP();

//$mail->SMTPDebug = 3;

$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "mail.pixelprints.pt";
$mail->Mailer = "smtp";
 $mail->Port = 465; 
 $mail->IsHTML(true);             

$mail->Username   = "botpixelprints@pixelprints.pt";

//$mail->Debugoutput = 'html';
$mail->Password   = "^xLN{!Q,{u2G";
$mail->IsHTML(true);
$mail->SetLanguage("pt", 'class/phpMailer/language/');
$mail->AddAddress($emailrecipiente, "recipient-name");
$mail->SetFrom("botpixelprints@pixelprints.pt", "no-replybot");
$mail->AddReplyTo($emailrecipiente, "no-reply");
foreach($cc as $person)
{
  $mail->AddCC($person, "cc-recipient-name");
}
$mail->Subject = $titulo;
$content = $conteudo;
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  return 0;
  var_dump($mail);
} else {
  return 1;
}}
?>