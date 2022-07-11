<?php
$servername = "localhost";
$database = "pixelpri_database_pixelprints";
$username = "pixelpri_User_pixelprints";
$password = "Z3#0SIi;Uyw8";


// Create connection using musqli_connect function
$conexao = mysqli_connect($servername, $username, $password, $database);
// Connection Check
if(!$conexao)
{
echo 'Ligação ao servidor impossivel';exit;
}

?>