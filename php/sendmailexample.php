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
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "localhost";
$mail->Mailer = "smtp";
 $mail->Port = 465; 
 $mail->IsHTML(true);             

$mail->Username   = "botpixelprints@pixelprints.pt";

$mail->Debugoutput = 'html';
$mail->SMTPDebug  = 2; 
$mail->Password   = "h$.DNj{@]~5f";
$mail->IsHTML(true);
$mail->SetLanguage("pt", 'class/phpMailer/language/');
$mail->AddAddress($emailrecipiente, "recipient-name");
$mail->SetFrom("botj6883@gmail.com", "no-replybot");
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