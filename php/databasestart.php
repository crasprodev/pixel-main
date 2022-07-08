<?php
$servername = "localhost";
$username = "User_pixelprints";
$pass = "[hwhKjQh)X{0";
$db_name="database_pixelprints";
$conexao=mysqli_connect($servername,$username,$pass,$db_name );
if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
exit;
}
?>
