<?php

if (isset($_POST['create'])) {
	include "connection_jb.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$workid = validate($_POST['workid']);
	$partid = validate($_POST['partid']);
	$quantity = validate($_POST['quantity']);
	$status = validate($_POST['status']);

	$user_data = 'workid ='.$workid. '&partid ='.$partid. '&quantity ='.$quantity;

	if (empty($workid)) {
		header("Location: ../jboard_folder/create_jboard.php?error = Work Order is required & $user_data");
	} else if (empty($partid)) {
		header("Location: ../jboard_folder/create_jboard.php?error = Part Number is required & $user_data");
	} else if (empty($quantity)) {
		header("Location: ../jboard_folder/create_jboard.php?error = Quantity is required & $user_data");
	} else {
       $sql = "INSERT INTO workorders(workid, partid, quantity, status) VALUES('$workid', '$partid', '$quantity', 'Pending')";
			 //$sql = "INSERT INTO wo_status(status_state) VALUES ('Pending')"
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../jboard_folder/view_jboard.php?success = Successfully Created!");
       } else {
          header("Location: ../jboard_folder/create_jboard.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
}
