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

	$sql = "SELECT * FROM rawmaterial WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_rawstock_table.php");
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
	$height = validate($_POST['height']);
	$width = validate($_POST['width']);
	$length = validate($_POST['length']);
	$shape = validate($_POST['shape']);
	$id = validate($_POST['id']);

	if (empty($type)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'Type' is missing");
	} else if (empty($location)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'Location' is missing");
	} else if (empty($height)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'Height' is missing");
	} else if (empty($width)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'Width' is missing");
	} else if (empty($length)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'length' is missing");
	} else if (empty($shape)) {
		header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Error: 'Shape' is missing");
	} else {

       $sql = "UPDATE rawmaterial SET type = '$type', location = '$location', height = '$height', width = '$width', length = '$length', shape = '$shape' WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../rawstock/view_rawstock.php?success = Successfully Updated!");
       } else {
          header("Location: ../rawstock/edit_rawstock.php?id = $id & error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_rawstock_table.php");
}
