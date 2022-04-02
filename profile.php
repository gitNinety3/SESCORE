<?php
session_start();

	include("php/connections.php");
	include("php/functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFILE</title>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link href="css/profile.css" rel="stylesheet">
</head>
<body>
	<!--Nav markup goes here-->
	  <header>
	    <div class="container">
	      <nav>
	        <div class="menu-icons">
	            <i class="icon ion-md-menu"></i>
	            <i class="icon ion-md-close"></i>
	        </div>
	        <a href="index.html" class"logo">
						<!--CHANGE THIS SHIT-->
	          <i class="icon"></i>
	        </a>
	        <ul class="nav-list">
	          <li>
	            <a href="index.php">Home</a>
	          </li>
	          <li>
	            <a href="jboard.php">Job Board</a>
	          </li>
	          <li>
	          <li>
	            <a href="#">Inventory
	              <i class="icon ion-md-arrow-dropdown"></i>
	            </a>
	            <ul class="sub-menu">
	              <li>
	                <a href="invcbin.php">Create Bin</a>
	              </li>
	              <li>
	                <a href="invissue.php">Issuing</a>
	              </li>
	              <li>
	                <a href="#">Warehouse Display
	                  <i class="icon ion-md-arrow-dropdown"></i>
	                </a>
									<ul class="sub-menu">
										<li>
											<a href="wdd/rawstock/invwdd_rawstock.php">Raw Stock</a>
										</li>
										<li>
											<a href="wdd/supplies/invwdd_supplies.php">Supplies</a>
										</li>
										<li>
											<a href="wdd/tools/invwdd_tools.php">Tools</a>
										</li>
									</ul>
	              </li>
	            </ul>
	          </li>
	            <a href="shipping.php">Shipping</a>
	          </li>
	          <li>
	            <a href="profile.php">Profile</a>
	          </li>
	          <li class="move-right btn">
	            <a href="php/logout.php">Logout</a>
	          </li>
	        </ul>
	      </nav>
	    </div>
	  </header>
	<!--End nav-->

<!--Hero-->
<section class="hero">
  <div class="text">
    <div id="box">
      <form method="post">
        <div id="title">
          <h2>Profile: <?php echo $user_data['user_name'];?></h2>
          <?php date_default_timezone_set('America/Los_Angeles');
              $time = time();
              if ($time >= strtotime("Second Sunday March 0")  && $time < strtotime("First Sunday November 0"))
              {
                echo "Today: " .date('m/d/y g:i A', $time);
              } else {
                  echo "Today: " .date('m/d/y g:i A', $time);
              } ?><hr><br>
					<a href="timesheet/create_timesheet.php" class="btn-primary link bounce-in-on-hover clock-in">
						<!--	CLOCK IN / OUT 	-->
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-plus-fill" viewBox="0 0 16 16">
						 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z"/>
					 </svg>
						Clock In / Out
					</a>
					<br>
          <button type="submit"
                 class="btn-primary link bounce-in-on-hover time-off"
                 name="time-off">
                 <!--	VIEW HOURS	-->
								 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
								  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
								  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
								</svg>
                View Hours
          </button>
          <button type="submit"
                 class="btn-primary link bounce-in-on-hover schedule"
                 name="schedule">
                 <!--	VIEW SCHEDULE	-->
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                 View Schedule
          </button>
				</div>
    </form>
  </div>
</section>
<script src="functions/scripts.js"></script>
</body>
</html>
