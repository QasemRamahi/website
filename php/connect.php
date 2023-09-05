<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gaming";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo"not connected";
}

elseif($conn) {
    echo" connected";
}
?>
