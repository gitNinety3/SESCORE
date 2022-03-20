<?php include '../php/edit_rawstock_table.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/wdd.css">
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
                <a href="invrec.php">Receiving</a>
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
                    <a href="invwdd_tools.php">Tools
                      <i class="icon"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="invstrans.php">Stock Transfer</a>
              </li>
            </ul>
          </li>
            <a href="shipping.php">Shipping</a>
          </li>
          <li>
            <a href="profile.php">Profile</a>
          </li>
          <li class="move-right btn">
            <a href="logout.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
<!--End nav-->
	<section class="hero">
		<div class="text">
			<div class="container_wdd">
				<form action="../php/edit_rawstock_table.php"
							method="post">
					<!--edit current part-->
					 <h4 class="display-4 text-center">Edit</h4><hr><br>
					 <?php if (isset($_GET['error'])) { ?>
					 <div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
						</div>
					<?php } ?>
					<!--		TYPE		-->
					 <div class="form-group">
						 <label for="type">Type</label>
						 <input type="type"
									 class="form-control"
									 id="type"
									 name="type"
									 value="<?=$row['type'] ?>" >
					 </div>
					 <!--		LOCATION		-->
					 <div class="form-group">
						 <label for="location">Location</label>
						 <input type="location"
									 class="form-control"
									 id="location"
									 name="location"
									 value="<?=$row['location'] ?>" >
					 </div>
					 <!--		HEIGHT		-->
					 <div class="form-group">
						 <label for="height">Height</label>
						 <input type="height"
									 class="form-control"
									 id="height"
									 name="height"
									 value="<?=$row['height'] ?>" >
					 </div>
					 <!--		WIDTH		-->
					 <div class="form-group">
						 <label for="width">Width</label>
						 <input type="width"
									 class="form-control"
									 id="width"
									 name="width"
									 value="<?=$row['width'] ?>" >
					 </div>
					 <!--		LENGTH		-->
					 <div class="form-group">
						 <label for="length">length</label>
						 <input type="length"
									 class="form-control"
									 id="length"
									 name="length"
									 value="<?=$row['length'] ?>" >
					 </div>
					 <!--		SHAPE		-->
					 <div class="form-group">
						 <label for="shape">Shape</label>
						 <input type="shape"
									 class="form-control"
									 id="shape"
									 name="shape"
									 value="<?=$row['shape'] ?>" >
					 </div>
					 <input type="text"
									name="id"
									value="<?=$row['id']?>"
									hidden >
					 <!--		SUBMIT		-->
					 <button type="submit"
									 class="btn btn-primary"
									 name="update">Update</button>
						<!--		VIEW		-->
						<a href="view_supplies.php" class="link-primary">View</a>
					</form>
			</div>
		</div>
	</section>
	</body>
</html>
