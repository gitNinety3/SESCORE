<?php include 'php/edit_sm_table.php'; ?>
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
				<div id="title">
					<div class="container">
						<form action="php/edit_sm_table.php"
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
								 <label for="workid">Work Order:</label>
								 <input type="workid"
											 class="form-control"
											 id="workid"
											 name="workid"
											 value="<?=$row['workid'] ?>" >
							 </div>
							 <!--		LENGTH		-->
							 <div class="form-group">
								 <label for="boxlength">Length:</label>
								 <input type="boxlength"
											 class="form-control"
											 id="boxlength"
											 name="boxlength"
											 value="<?=$row['boxlength'] ?>" >
							 </div>
               <!--		WIDTH		-->
               <div class="form-group">
                 <label for="boxwidth">Width:</label>
                 <input type="boxwidth"
                       class="form-control"
                       id="boxwidth"
                       name="boxwidth"
                       value="<?=$row['boxwidth'] ?>" >
               </div>
               <!--		HEIGHT		-->
               <div class="form-group">
                 <label for="boxheight">Height:</label>
                 <input type="boxheight"
                       class="form-control"
                       id="boxheight"
                       name="boxheight"
                       value="<?=$row['boxheight'] ?>" >
               </div>
               <!--		WEIGHT		-->
               <div class="form-group">
                 <label for="boxweight">Weight:</label>
                 <input type="boxweight"
                       class="form-control"
                       id="boxweight"
                       name="boxweight"
                       value="<?=$row['boxweight'] ?>" >
               </div>
               <!--		TRACK #		-->
               <div class="form-group">
                 <label for="tracknum">Track #:</label>
                 <input type="tracknum"
                       class="form-control"
                       id="tracknum"
                       name="tracknum"
                       value="<?=$row['tracknum'] ?>" >
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
								<a href="view_shipment.php" class="btn-view link-primary">View</a>
							</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>
