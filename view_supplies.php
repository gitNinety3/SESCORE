<?php
include "php/view_supplies_table.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Supplies</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="css/wdd.css">
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
						<h4 class="display-4 text-center">View Supplies</h4><br>
						<?php if (isset($_GET['success'])) { ?>
					    <div class="alert alert-success" role="alert">
						  <?php echo $_GET['success']; ?>
					    </div>
					    <?php } ?>
						<?php if (mysqli_num_rows($result)) { ?>
						<div class="outer-wrapper">
							<div class="table-wrapper">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Type</th>
											<th scope="col">Location</th>
											<th scope="col">Qty</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											 $i = 0;
											 while($rows = mysqli_fetch_assoc($result)){
											 $i++;
										 ?>
										<tr>
											<th scope="row"><?=$i?></th>
											<td><?=$rows['type']?></td>
											<td><?php echo $rows['location']; ?></td>
											<td><?php echo $rows['quantity']; ?></td>
											<td><a href="edit_supplies.php?id=<?=$rows['id']?>"
														 class="btn-edit  bounce-in-on-hover">
														 <!--	EDIT PEN -->
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
															<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
														</svg>
															Edit
													</a>
													<a href="php/delete_supplies_table.php?id=<?=$rows['id']?>"
														 class="btn-delete btn-danger bounce-in-on-hover">
														<!--	TRASH CAN	-->
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
															<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
														</svg>
														Delete
													</a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<?php } ?>
							</div>
						</div>
						<div class="py-5 text-center">
							<a href="invwdd_supplies.php" class="link bounce-in-on-hover">
								<!--	ADD SIGN	-->
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
									 <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
								</svg>
								Create New Part
							</a>
						</div>
					</div>
					</div>
				</div>
		</div>
	</section>
</body>
</html>
