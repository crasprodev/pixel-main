<?php
$servername = "localhost::3306";
$username = "pixelpri_a_user_manager";
$pass = "Profanus2022!?";
$db_name="database_pixelprints";
$conexao=mysqli_connect($servername,$username,$pass,$db_name );
if(!$conexao)
{
echo 'Ligação ao servidor impossivel';exit;
}
?>
