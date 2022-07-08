<?php

function send_email($emailrecipiente,$titulo, $conteudo)
{
 $From ="botaccount@pixelprints.pt";
$Subject = $titulo;
  $titulo = $titulo;
  $conteudo = $conteudo;
  $header = "From: ".$From";
mail($emailrecipiente,$Subject,$conteudo ,$header)
}
?>
