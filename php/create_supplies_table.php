<?php

if (isset($_POST['create'])) {
	include "connection_inv.php";
	function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$type = validate($_POST['type']);
	$location = validate($_POST['location']);
	$quantity = validate($_POST['quantity']);

	$user_data = 'type='.$type. '&location='.$location. '&quantity='.$quantity;

	if (empty($type)) {
		header("Location: ../invwdd_supplies.php?error=Type is required&$user_data");
	} else if (empty($location)) {
		header("Location: ../invwdd_supplies.php?error=Location is required&$user_data");
	} else if (empty($quantity)) {
		header("Location: ../invwdd_supplies.php?error=Quantity is required&$user_data");
	} else {
       $sql = "INSERT INTO supplies(type, location, quantity) VALUES('$type', '$location', '$quantity')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_supplies.php?success=Successfully Created!");
       } else {
          header("Location: ../invwdd_supplies.php?error=Unknown Error Occurred&$user_data" . mysqli_connect_error());
       }
	}
}
?>
