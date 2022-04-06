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

	$sql = "SELECT * FROM shipping WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    } else {
    	header("Location: view_sm_table.php");
    }
} else if(isset($_POST['update'])) {
    include "connection_inv.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$workid = validate($_POST['workid']);
	$boxlength = validate($_POST['boxlength']);
  $boxwidth = validate($_POST['boxwidth']);
  $boxheight = validate($_POST['boxheight']);
  $boxweight = validate($_POST['boxweight']);
  $tracknum = validate($_POST['tracknum']);
	$id = validate($_POST['id']);

	if (empty($workid)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Work Order' is missing");
	} else if (empty($boxlength)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Length' is missing");
	} else if (empty($boxwidth)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Width' is missing");
	} else if (empty($boxheight)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Height' is missing");
	} else if (empty($boxweight)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Weight' is missing");
	} else if (empty($tracknum)) {
		header("Location: ../edit_shipment.php?id=$id&error=Error: 'Length' is missing");
	} else {

       $sql = "UPDATE shipping
               SET workid = '$workid', boxlength = '$boxlength', boxwidth = '$boxwidth', boxheight = '$boxheight', boxweight = '$boxweight', tracknum = '$tracknum'
               WHERE id = $id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_shipment.php?success=Successfully Updated!");
       } else {
          header("Location: ../edit_shipment.php?id=$id&error=Unknown Error Occurred&$user_data" . mysqli_connect_error());
       }
	}
} else {
	header("Location: view_sm_table.php");
}
?>
