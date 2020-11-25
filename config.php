<?php
$servername = "localhost";
$username = "root";
$password = "saaudiqbal";
$database="fiverr_chase_bk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>