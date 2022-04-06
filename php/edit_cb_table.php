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

	$sql = "SELECT * FROM bin_location WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_cb_table.php");
    }
} else if(isset($_POST['update'])) {
    include "connection_inv.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$departid = validate($_POST['departid']);
	$shelfid = validate($_POST['shelfid']);
	$id = validate($_POST['id']);

	if (empty($departid)) {
		header("Location: ../edit_bin.php?id=$id&error=Error: 'Department' is missing");
	} else if (empty($shelfid)) {
		header("Location: ../edit_bin.php?id=$id &error=Error: 'Shelf ID' is missing");
	} else {

       $sql = "UPDATE bin_location SET departid = '$departid', shelfid = '$shelfid' WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_bin.php?success=Successfully Updated!");
       } else {
          header("Location: ../edit_bin.php?id=$id&error=Unknown Error Occurred&$user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_cb_table.php");
}
?>
