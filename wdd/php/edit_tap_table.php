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

	$sql = "SELECT * FROM taps WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_tap_table.php");
    }
} else if(isset($_POST['update'])) {
    include "connection_inv.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$measurement = validate($_POST['measurement']);
	$size = validate($_POST['size']);
	$quantity = validate($_POST['quantity']);
	$id = validate($_POST['id']);

	if (empty($measurement)) {
		header("Location: ../tools/edit_taps.php?id = $id & error = Error: 'Measurement' is missing");
	} else if (empty($size)) {
		header("Location: ../tools/edit_taps.php?id = $id & error = Error: 'Size' is missing");
	} else if (empty($quantity)) {
		header("Location: ../tools/edit_taps.php?id = $id & error = Error: 'Quantity' is missing");
	} else {

       $sql = "UPDATE taps SET measurement = '$measurement', size = '$size', quantity = '$quantity' WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../tools/view_taps.php?success = Successfully Updated!");
       } else {
          header("Location: ../tools/edit_taps.php?id = $id & error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_tap_table.php");
}
