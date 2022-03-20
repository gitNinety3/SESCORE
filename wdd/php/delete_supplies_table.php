<?php

if(isset($_GET['id'])){
   include "connection_inv.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM supplies WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   	 header("Location: ../supplies/view_supplies.php?success = Successfully Deleted!");
  } else {
    header("Location: ../supplies/view_supplies.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
  }
} else {
	  header("Location: view_supplies_table.php");
}
