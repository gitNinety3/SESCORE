<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ses_core";

//$conn  = mysqli_connect($sname, $uname, $password, $db_name);
$conn = new mysqli("localhost", "root", "root", "ses_core");

if (!$conn) {
	echo "Connection failed!" . mysqli_connect_error();
} else {
	//echo "Connection Successful!";
}
