<?php
$servername = "localhost:3306";
$username = "pixelpri_a_user_manager";
$pass = "Profanus2022!?";
$db_name="database_pixelprints";
$conexao=mysqli_connect($servername,$username,$pass,$db_name );
if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
?>
