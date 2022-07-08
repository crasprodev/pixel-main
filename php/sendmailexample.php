<?php

function send_email($emailrecipiente,$titulo, $conteudo)
{
 $from ="botaccount@pixelprints.pt";
$Subject = $titulo;
  $titulo = $titulo;
  $conteudo = $conteudo;
  $header = "from no-reply-bot";
mail($from,$Subject,$conteudo ,$header)
}
?>
