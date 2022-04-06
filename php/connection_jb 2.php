<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "ses_core";

$conn = new mysqli("localhost", "root", "root", "ses_core");

if (!$conn) {
	echo "Connection failed!" . mysqli_connect_error();
} else {
	//echo "Connection Successful!";
}
?>
