<?php

if (isset($_GET['id'])) {
	include "connection_inv.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM supplies WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_supplies_table.php");
    }
} else if(isset($_POST['update'])) {
    include "connection_inv.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$type = validate($_POST['type']);
	$location = validate($_POST['location']);
	$quantity = validate($_POST['quantity']);
	$id = validate($_POST['id']);

	if (empty($type)) {
		header("Location: ../supplies/edit_supplies.php?id = $id & error = Error: 'Type' is missing");
	} else if (empty($location)) {
		header("Location: ../supplies/edit_supplies.php?id = $id & error = Error: 'Location' is missing");
	} else if (empty($quantity)) {
		header("Location: ../supplies/edit_supplies.php?id = $id & error = Error: 'Quantity' is missing");
	} else {

       $sql = "UPDATE supplies SET type = '$type', location = '$location', quantity = '$quantity' WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../supplies/view_supplies.php?success = Successfully Updated!");
       } else {
          header("Location: ../supplies/edit_supplies.php?id = $id & error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_supplies_table.php");
}
