
<?php
$servername = "localhost";
$database = "database_pixelprints";
$username = "User_pixelprints";
$password = "[hwhKjQh)X{0";


// Create connection using musqli_connect function
$conn = mysqli_connect($servername, $username, $password, $database);
// Connection Check
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

else{
   echo "Connected Successfully!";
   $conn->close();
}

?>
?>
