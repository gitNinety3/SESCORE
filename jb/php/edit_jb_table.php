<?php

if (isset($_GET['id'])) {
	include "connection_jb.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM workorders WHERE id = $id";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_jb_table.php");
    }
} else if(isset($_POST['update'])) {
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
	$id = validate($_POST['id']);

	if (empty($workid)) {
		header("Location: ../jboard_folder/edit_jboard.php?id = $id & error = Error: 'workid' is missing");
	} else if (empty($partid)) {
		header("Location: ../jboard_folder/edit_jboard.php?id = $id & error = Error: 'partid' is missing");
	} else if (empty($quantity)) {
		header("Location: ../jboard_folder/edit_jboard.php?id = $id & error = Error: 'Quantity' is missing");
	} else {

       $sql = "UPDATE workorders SET workid = '$workid', partid = '$partid', quantity = '$quantity' WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../jboard_folder/view_jboard.php?success = Successfully Updated!");
       } else {
          header("Location: ../jboard_folder/edit_jboard.php?id = $id & error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_jb_table.php");
}
