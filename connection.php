<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "rcworld";  // <-- apna database name

// Connection
$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} 
// else {
//     echo "Connection established";
// }
?>
