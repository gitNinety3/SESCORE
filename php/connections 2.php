<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "ses_core";

$con = new mysqli("localhost", "root", "root", "ses_core");

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully! ";
?>
