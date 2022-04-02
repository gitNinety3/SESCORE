<?php
	include '../php/edit_progress_table.php';
	/*
	require_once("../php/connection_jb.php");
	$id = $_GET['id'];
	$prog_result = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id = $id");
  if($row = mysqli_fetch_array($prog_result)) {
    $status = $row['status'];
    echo '<br>';
  }
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Status</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="../css/jb_progress.css">
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
	            <a href="../../index.php">Home</a>
	          </li>
	          <li>
	            <a href="../../jboard.php">Job Board</a>
	          </li>
	          <li>
	          <li>
	            <a href="#">Inventory
	              <i class="icon ion-md-arrow-dropdown"></i>
	            </a>
	            <ul class="sub-menu">
	              <li>
	                <a href="../../invcbin.php">Create Bin</a>
	              </li>
	              <li>
	                <a href="../../invissue.php">Issuing</a>
	              </li>
	              <li>
	                <a href="#">Warehouse Display
	                  <i class="icon ion-md-arrow-dropdown"></i>
	                </a>
									<ul class="sub-menu">
										<li>
											<a href="../../wdd/rawstock/invwdd_rawstock.php">Raw Stock</a>
										</li>
										<li>
											<a href="../../wdd/supplies/invwdd_supplies.php">Supplies</a>
										</li>
										<li>
											<a href="../../wdd/tools/invwdd_tools.php">Tools</a>
										</li>
									</ul>
	              </li>
	            </ul>
	          </li>
	            <a href="../../shipping.php">Shipping</a>
	          </li>
	          <li>
	            <a href="../../profile.php">Profile</a>
	          </li>
	          <li class="move-right btn">
	            <a href="../../php/logout.php">Logout</a>
	          </li>
	        </ul>
	      </nav>
	    </div>
	  </header>
	<!--End nav-->

	<section class="hero">
		<div class="text">
			<div id="box">
				<form method="post">
					<div id="title">
						<form action="../php/edit_jb_table.php"
									method="post">
							<!--edit current part-->
							 <h4 class="display-4 text-center">Work Order # <?php echo $row['workid']?></h4><hr><br>
							 <?php if (isset($_GET['error'])) { ?>
							 <div class="alert alert-danger" role="alert">
								<?php echo $_GET['error']; ?>
								</div>
							<?php } ?>
							<!--		PROGRESS BAR		-->
							<div class="container-prog">
					      <div class="progress-container">
									<div class="progress-display">
										<h2 class="display-5 text-center">Status: <?php echo $row['status']?></h2><br><br>
									</div>
									<div class="progress-btns">
										<?php
								      $previous = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id < $id ORDER BY status_id DESC");
								      if($row = mysqli_fetch_array($previous)) {
								        echo '<a href="show.php?id='.$row['status_id'].'"><button type="button">PREV</button<a>';
								      }
								      $next = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id > $id ORDER BY status_id ASC");
								      if($row = mysqli_fetch_array($next)) {
								        echo '<a href="show.php?id='.$row['status_id'].'"><button type="button">NEXT</button<a>';
								      } else {
								        $finished = mysqli_query($mysqli, "SELECT * FROM wo_status ORDER BY status_id DESC LIMIT 1");
								        if($row = mysqli_fetch_array($finished)) {
								          echo '<a href="ship.php?id='.$row['status_id'].'"><button type="button">Finished</button<a>';
								        }
								      }
								     ?>
										<button class="btn" id="prev" disabled>Prev</button>
							      <button type="submit" name="update"class="btn" id="next">Next</button><br>
									</div>
						    </div><br><br>
								<!--		VIEW		-->
								<a href="view_jboard.php" class="btn-view link bounce-in-on-hover">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
										<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
										<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
									</svg>
									View
								</a>
							</form>
					</div>
				</form>
			</div>
		</div>
	</section>
	<script src="../functions/script.js"></script>
	</body>
</html>
