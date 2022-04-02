<?php include '../php/edit_cb_table.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="../css/cb.css">
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
						<form action="../php/edit_cb_table.php"
									method="post">
							<!--edit current part-->
							 <h4 class="display-4 text-center">Edit</h4><hr><br>
							 <?php if (isset($_GET['error'])) { ?>
							 <div class="alert alert-danger" role="alert">
								<?php echo $_GET['error']; ?>
								</div>
							<?php } ?>
							<!--		DEPARTMENT		-->
							 <div class="form-group">
								 <label for="departid">Department</label>
								 <input type="departid"
											 class="form-control"
											 id="departid"
											 name="departid"
											 value="<?=$row['departid'] ?>" >
							 </div>
							 <!--		SHELF ID		-->
							 <div class="form-group">
								 <label for="shelfid">Shelf ID</label>
								 <input type="shelfid"
											 class="form-control"
											 id="shelfid"
											 name="shelfid"
											 value="<?=$row['shelfid'] ?>" >
							 </div>
							 <input type="text"
											name="id"
											value="<?=$row['id']?>"
											hidden>
							 <!--		SUBMIT		-->
							 <button type="submit"
											 class="btn-view btn-primary"
											 name="update">Update</button>
								<!--		VIEW		-->
								<a href="view_bin.php" class="btn-view link-primary">View</a>
							</form>
					</div>
				</form>
			</div>
		</div>
	</section>
	</body>
</html>
