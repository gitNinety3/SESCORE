<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbfname = "first_name";
$dblname = "last_name";
$dbname = "ses_core";

// Create connection
//$con = new mysqli("localhost", "root", "root", "first_name", "last_name", "ses_core");
$con = new mysqli("localhost", "root", "root", "ses_core");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully! ";
?>
