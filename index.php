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
    <title>SES CORE</title>
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
        <h1>SES CORE</h1>
        <h2>Hello, <?php echo $user_data['user_name'];?></h2>
    </div>
</section>
<script src="functions/scripts.js"></script>
</body>
</html>
