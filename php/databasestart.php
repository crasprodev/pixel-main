
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
echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{
   echo "Connected Successfully!";
   $conexao->close();
}

?>
?>
