<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
function send_email($emailrecipiente,$titulo, $conteudo)
{
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPAuth   = TRUE;
$mail->Host       = "smtp.gmail.com";
$mail->SMTPAuth   = "true";                 
$mail->SMTPSecure = "ssl";                 
$mail->Port       = 465;
$mail->Username   = "botpixelprints@pixelprints.pt";
$mail->SMTPDebug  = 2; 
$mail->Password   = "h$.DNj{@]~5f";
$mail->IsHTML(true);
$mail->SetLanguage("pt", 'class/phpMailer/language/');
$mail->AddAddress($emailrecipiente, "recipient-name");
$mail->SetFrom("botpixelprints@pixelprints.pt", "no-replybot");
$mail->AddReplyTo($emailrecipiente, "no-reply");
$mail->AddCC($emailrecipiente, "cc-recipient-name");
$mail->Subject = $titulo;
$content = $conteudo;
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  return;
  var_dump($mail);
} else {
  return;
}}
?>