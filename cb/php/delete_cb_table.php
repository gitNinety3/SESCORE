<?php

if(isset($_GET['id'])){
   include "connection_cb.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM bin_locations WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   	 header("Location: ../cbin_folder/view_bin.php?success = Successfully Deleted!");
  } else {
    header("Location: ../cbin_folder/view_bin.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
  }
} else {
	  header("Location: view_cb_table.php");
}
