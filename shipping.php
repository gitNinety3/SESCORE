<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHIPPING</title>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link href="css/style.css" rel="stylesheet">
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

<!--Hero-->
<section class="hero">
  <div class="text">
    <div id="box">
      <div id="title">
        <div class="container">
          <form action="php/create_wo_table.php"
              method="post">
            <!--  TITLE  -->
           <h4 class="display-4 text-center">Create Shipment</h4><hr><br>
           <?php if (isset($_GET['error'])) { ?>
           <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
            </div>
           <?php } ?>
           <!--   SUBMIT    -->
           <div class="toggle-btns">
             <a href="create_shipment.php" class="link-primary link bounce-in-on-hover">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                 <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
               </svg>
               New Shipment
             </a>
             <!--   VIEW   view_shipment.php-->
              <a href="view_shipment.php" class="btn-view link-primary bounce-in-on-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
                View Prev Shipments
              </a>
           </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="functions/scripts.js"></script>
</body>
</html>
