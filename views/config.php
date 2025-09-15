<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonanza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>