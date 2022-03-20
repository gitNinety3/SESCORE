<?php include '../php/edit_tap_table.php'; ?>
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
				<form action="../php/edit_tap_table.php"
							method="post">
					<!--edit current part-->
					 <h4 class="display-4 text-center">Edit</h4><hr><br>
					 <?php if (isset($_GET['error'])) { ?>
					 <div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
						</div>
					<?php } ?>
					<!--		MEASUREMENT		-->
					 <div class="form-group">
						 <label for="measurement">Measurement</label>
						 <input type="measurement"
									 class="form-control"
									 id="measurement"
									 name="measurement"
									 value="<?=$row['measurement'] ?>" >
					 </div>
					 <!--		SIZE		-->
					 <div class="form-group">
						 <label for="size">Size</label>
						 <input type="size"
									 class="form-control"
									 id="size"
									 name="size"
									 value="<?=$row['size'] ?>" >
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
					 <button type="submit"
									 class="btn btn-primary"
									 name="update">Update</button>
						<!--		VIEW		-->
						<a href="view_taps.php" class="link-primary">View</a>
					</form>
			</div>
		</div>
	</section>
	</body>
</html>
