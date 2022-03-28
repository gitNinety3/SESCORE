<?php

if (isset($_POST['create'])) {
	include "connection_cb.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$departid = validate($_POST['departid']);
	$shelfid = validate($_POST['shelfid']);

	$user_data = 'departid ='.$departid. '&shelfid ='.$shelfid. '&quantity ='.$quantity;

	if (empty($departid)) {
		header("Location: ../cbin_folder/create_bin.php?error = Department is required & $user_data");
	} else if (empty($shelfid)) {
		header("Location: ../cbin_folder/create_bin.php?error = Shelf ID is required & $user_data");
	} else {
       $sql = "INSERT INTO bin_location(departid, shelfid) VALUES('$departid', '$shelfid')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../cbin_folder/view_bin.php?success = Successfully Created!");
       } else {
          header("Location: ../cbin_folder/create_bin.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
}
