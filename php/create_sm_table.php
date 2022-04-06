<?php

if (isset($_POST['create'])) {
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

	$user_data ='workid='.$workid.'&boxlength='.$boxlength.'&boxwidth='.$boxwidth.'&boxheight='.$boxheight.'&boxweight='.$boxweight.'&tracknum='.$tracknum;

	if (empty($workid)) {
		header("Location: ../create_shipment.php?error=Work Order is required&$user_data");
	} else if (empty($boxlength)) {
		header("Location: ../create_shipment.php?error=Length is required&$user_data");
	} else if (empty($boxwidth)) {
		header("Location: ../create_shipment.php?error=Width is required&$user_data");
	} else if (empty($boxheight)) {
		header("Location: ../create_shipment.php?error=Height is required&$user_data");
	} else if (empty($boxweight)) {
		header("Location: ../create_shipment.php?error=Weight is required&$user_data");
	} else if (empty($tracknum)) {
		header("Location: ../create_shipment.php?error=Track # is required&$user_data");
	} else {
       $sql = "INSERT INTO shipping(workid, boxlength, boxwidth, boxheight, boxweight, tracknum)
               VALUES('$workid', '$boxlength', '$boxwidth', '$boxheight', '$boxweight', '$tracknum')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_shipment.php?success=Successfully Created!");
       } else {
          header("Location: ../create_shipment.php?error=Unknown Error Occurred&$user_data" . mysqli_connect_error());
       }
	}
}
?>
