<?php include 'php/edit_jb_table.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="css/jb.css">
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
											<a href="invwdd_rawstock.php">Raw Stock</a>
										</li>
										<li>
											<a href="invwdd_supplies.php">Supplies</a>
										</li>
										<li>
											<a href="invwdd_tools.php">Tools</a>
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

	<section class="hero">
		<div class="text">
			<div id="box">
				<div id="box">
					<div class="container">
						<form action="php/edit_jb_table.php"
									method="post">
							<!--edit current part-->
							 <h4 class="display-4 text-center">Edit</h4><hr><br>
							 <?php if (isset($_GET['error'])) { ?>
							 <div class="alert alert-danger" role="alert">
								<?php echo $_GET['error']; ?>
								</div>
							<?php } ?>
							<!--		WORK ORDER		-->
							 <div class="form-group">
								 <label for="workid">Work Order</label>
								 <input type="workid"
											 class="form-control"
											 id="workid"
											 name="workid"
											 value="<?=$row['workid'] ?>" >
							 </div>
							 <!--		PART NUMBER		-->
							 <div class="form-group">
								 <label for="partid">Part Number</label>
								 <input type="partid"
											 class="form-control"
											 id="partid"
											 name="partid"
											 value="<?=$row['partid'] ?>" >
							 </div>
							 <!--		QUANTITY		-->
							 <div class="form-group">
								 <label for="quantity">Quantity</label>
								 <input type="quantity"
											 class="form-control"
											 id="sizquantitye"
											 name="quantity"
											 value="<?=$row['quantity'] ?>" >
							 </div>
							 <input type="text"
											name="id"
											value="<?=$row['id']?>"
											hidden >
							 <!--		SUBMIT		-->
							 <!--		SUBMIT		-->
							 <button type="submit"
											 class="btn-sub btn-primary link bounce-in-on-hover"
											 name="update">
								<!--	ADD SIGN	-->
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
									<path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
									<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
								</svg>
								Update
								</button>
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
				</div>
			</div>
		</div>
	</section>
	</body>
</html>
