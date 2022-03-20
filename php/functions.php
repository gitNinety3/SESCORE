<?php

// CHECK LOGIN
function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM employees WHERE user_id = '$id' LIMIT 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	// REDIRECT TO THE LOGIN PAGE
	header("Location: login.html");
	die;

}

// USER ID NUMBER GENERATOR
function random_num($length)
{

	$text = "";
	if($length < 6)
	{
		$length = 6;
	}

	$len = rand(5,$length);

	for ($i=0; $i < $len; $i++) {
		$text .= rand(0,9);

	}

	return $text;
}
