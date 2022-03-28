<?php

if (isset($_POST['create'])) {
	include "connection_ts.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$date_in = validate($_POST['date_in']);
	$time_in = validate($_POST['time_in']);

	$user_data = 'date_in ='.$date_in. '&time_in ='.$time_in;

	if (empty($date_in)) {
		header("Location: ../create_timesheet.php?error = Date is required & $user_data");
	} else if (empty($time_in)) {
		header("Location: ../create_timesheet.php?error = Time In is required & $user_data");
	} else {
       $sql = "INSERT INTO timesheet_in (date_in, time_in)
			 				 VALUES('$date_in', '$time_in')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../profile.php?success = Successfully Created!");
       } else {
          header("Location: ../create_timesheet.php?error = Unknown Error Occurred & $user_data" . mysqli_connect_error());
       }
	}
}
