<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Work Orders</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="../css/jb.css">
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
              <form action="../php/create_jb_table.php"
                  method="post">
                <!--  TITLE  -->
               <h4 class="display-4 text-center">Create Work Order</h4><hr><br>
               <?php if (isset($_GET['error'])) { ?>
               <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
                </div>
               <?php } ?>
               <!--   WORK ORDER   -->
               <div class="form-group">
                 <label for="workid">Work Order</label>
                 <input type="workid"
                       class="form-control"
                       id="workid"
                       name="workid"
                       value="<?php if(isset($_GET['workid']))
                                       echo($_GET['workid']); ?>"
                       placeholder="Enter work order">
               </div>
               <!--     PART NUMBER    -->
               <div class="form-group">
                 <label for="partid">Part Number</label>
                 <input type="partid"
                       class="form-control"
                       id="partid"
                       name="partid"
                       value="<?php if(isset($_GET['partid']))
                                       echo($_GET['partid']); ?>"
                       placeholder="Enter part number">
               </div>
               <!--   QUANTITY   -->
               <div class="form-group">
                 <label for="quantity">Quantity</label>
                 <input type="quantity"
                       class="form-control"
                       id="quantity"
                       name="quantity"
                       value="<?php if(isset($_GET['quantity']))
                                       echo($_GET['quantity']); ?>"
                       placeholder="Enter quantity">
               </div>
               <!--   SUBMIT    -->
               <div class="toggle-btns">
                 <button type="submit"
                        class="btn-primary link link-hover bounce-in-on-hover"
                        name="create">
                        <!--	ADD SIGN	-->
        								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        								  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        								</svg>
                        Create New Part
                 </button>
                 <!--   VIEW    -->
                  <a href="view_jboard.php"
                     class="btn-view link bounce-in-on-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    View
                  </a>
               </div>
              </form>
            </div>
          </form>
        </div>
      </div>
    </section>
</body>
</html>
