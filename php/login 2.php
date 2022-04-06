<?php

session_start();

	include("connections.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

			// READ FROM THE DATABASE
			$query = "SELECT * FROM employees WHERE user_name = '$user_name' LIMIT 1";
			$result = mysqli_query($con, $query);

			if($result) {
				if($result && mysqli_num_rows($result) > 0) {

					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password) {

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../index.php");
						die;
					}
				}
			}

			echo '<script type ="text/JavaScript">';
			echo 'alert("Invaild Username or Password")';
			echo '</script>';
		} else {
			echo "Wrong username or password!";
		}
	}
?>
