<?php

if (isset($_POST['create'])) {
	include "connection_inv.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$measurement = validate($_POST['measurement']);
	$location = validate($_POST['location']);
	$size = validate($_POST['size']);
	$quantity = validate($_POST['quantity']);

	$user_data ='measurement='.$measurement.'&location='.$location.'&size='.$size.'&quantity='.$quantity;

	if (empty($measurement)) {
		header("Location: ../invwdd_tools.php?error=Measurement is required & $user_data");
	} else if (empty($location)) {
		header("Location: ../invwdd_tools.php?error=Location is required & $user_data");
	} else if (empty($size)) {
		header("Location: ../invwdd_tools.php?error=Size is required & $user_data");
	} else if (empty($quantity)) {
		header("Location: ../invwdd_tools.php?error=Quantity is required & $user_data");
	} else {
       $sql = "INSERT INTO taps(measurement, location, size, quantity) VALUES('$measurement', '$location', '$size', '$quantity')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_taps.php?success=Successfully Created!");
       } else {
          header("Location: ../invwdd_tools.php?error=Unknown Error Occurred&$user_data" . mysqli_connect_error() );
       }
	}
}
?>
