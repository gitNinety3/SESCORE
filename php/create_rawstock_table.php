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
	$height = validate($_POST['height']);
	$width = validate($_POST['width']);
	$length = validate($_POST['length']);
	$shape = validate($_POST['shape']);
	$uuid = validate($_POST['uuid']);

	$user_data = 'type='.$type. '&location='.$location. '&height='.$height. '&width='.$width. '&length='.$length. '&shape='.$shape;

	if (empty($type)) {
		header("Location: ../invwdd_rawstock.php?error=Type is required&$user_data");
	} else if (empty($location)) {
		header("Location: ../invwdd_rawstock.php?error=Location is required&$user_data");
	} else if (empty($height)) {
		header("Location: ../invwdd_rawstock.php?error=Height is required&$user_data");
	} else if (empty($width)) {
		header("Location: ../invwdd_rawstock.php?error=Width is required&$user_data");
	} else if (empty($length)) {
		header("Location: ../invwdd_rawstock.php?error=Length is required&$user_data");
	} else if (empty($shape)) {
		header("Location: ../invwdd_rawstock.php?error=Shape is required&$user_data");
	} else {
       $sql = "INSERT INTO rawmaterial(type, location, height, width, length, shape, uuid) VALUES('$type', '$location', '$height', '$width', '$length', '$shape', (UUID_SHORT()))";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_rawstock.php?success=Successfully Created!");
       } else {
          header("Location: ../invwdd_rawstock.php?error=Unknown Error Occurred&$user_data" . mysqli_connect_error());
       }
	}
}
?>
