<?php $conexao=mysqli_connect('localhost','root','Profanus2022!?','Pixelpri_a_user_manager');
if(!$conexao)
{
echo 'Ligação ao servidor impossivel';exit;
}
mysqli_select_db($conexao, 'database_pixelprints');
?>