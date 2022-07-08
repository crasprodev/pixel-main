
<?php
$servername = "localhost";
$database = "pixelpri_database_pixelprints";
$username = "pixelpri_User_pixelprints";
$password = "[hwhKjQh)X{0";


// Create connection using musqli_connect function
$conexao = mysqli_connect($servername, $username, $password, $database);
// Connection Check
if (!$conexao) {
    die("Connection failed: " . $conn->connect_error);
}

else{
   echo "Connected Successfully!";
   $conn->close();
}

?>
?>
