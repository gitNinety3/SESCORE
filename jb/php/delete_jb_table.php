<?php

if(isset($_GET['id'])){
   include "connection_jb.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM workorders WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   	 header("Location: ../jboard_folder/view_jboard.php?success = Successfully Deleted!");
  } else {
    header("Location: ../jboard_folder/view_jboard.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
  }
} else {
	  header("Location: view_jb_table.php");
}
