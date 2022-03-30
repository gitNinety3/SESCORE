<?php
session_start();

	include("connections.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// SOMETHING WAS POSTED
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		if(!empty($first_name) && !empty($last_name) && !empty($user_name) && !is_numeric($user_name) && !empty($password))
		//if(!empty($user_name) && !is_numeric($user_name) && !empty($password))
		{

			// SAVE TO THE DATABASE
			$user_id = random_num(6);
			$query = "INSERT INTO employees (first_name, last_name, user_id, user_name, password) VALUES ('$first_name', '$last_name', '$user_id','$user_name','$password')";

			/*	CHECK IF THE USER WAS REGISTERED	*/
			$sucessfulpush = mysqli_query($con, $query);
			if ($sucessfulpush == TRUE) {
				header("Location: ../login.html");
				die;
				echo "The user was registered!";

			} else {
				echo "ERROR! Couldn't connect: " .mysqli_connect_error();
			}

		} else {
			echo "Please enter some valid information!";
		}
	}
?>
