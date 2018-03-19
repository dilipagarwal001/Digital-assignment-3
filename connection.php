<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username);
mysqli_select_db($con,"digitalassignment");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>