<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "ses_core";

$conn = new mysqli("localhost", "root", "root", "ses_core");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully! ";
?>
