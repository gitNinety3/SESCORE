<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Timesheet</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="css/ts.css">
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
	            <a href="../index.php">Home</a>
	          </li>
	          <li>
	            <a href="../jboard.php">Job Board</a>
	          </li>
	          <li>
	          <li>
	            <a href="#">Inventory
	              <i class="icon ion-md-arrow-dropdown"></i>
	            </a>
	            <ul class="sub-menu">
	              <li>
	                <a href="../invcbin.php">Create Bin</a>
	              </li>
	              <li>
	                <a href="../invissue.php">Issuing</a>
	              </li>
	              <li>
	                <a href="#">Warehouse Display
	                  <i class="icon ion-md-arrow-dropdown"></i>
	                </a>
									<ul class="sub-menu">
										<li>
											<a href="../wdd/rawstock/invwdd_rawstock.php">Raw Stock</a>
										</li>
										<li>
											<a href="../wdd/supplies/invwdd_supplies.php">Supplies</a>
										</li>
										<li>
											<a href="../wdd/tools/invwdd_tools.php">Tools</a>
										</li>
									</ul>
	              </li>
	            </ul>
	          </li>
	            <a href="../shipping.php">Shipping</a>
	          </li>
	          <li>
	            <a href="../profile.php">Profile</a>
	          </li>
	          <li class="move-right btn">
	            <a href="../php/logout.php">Logout</a>
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
              <form action="../php/create_ts_table.php"
                  method="post">
                <!--  TITLE  -->
               <h4 class="display-4 text-center">Clock In</h4><hr><br>
               <?php if (isset($_GET['error'])) { ?>
               <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
                </div>
               <?php } ?>
               <!--   DATE   -->
               <div class="form-group">
                 <label for="date_in">Date</label>
                 <input type="date"
                       class="form-control"
                       id="date_in"
                       name="date_in"
                       value="<?php if(isset($_GET['date_in']))
                                       echo($_GET['date_in']); ?>"
                       placeholder="Enter Date">
               </div>
               <!--   TIME IN   -->
               <div class="form-group">
                 <label for="time_in">Time In</label>
                 <input type="time"
                       class="form-control"
                       min="07:00"
                       max="19:00"
                       id="time_in"
                       name="time_in"
                       value="<?php if(isset($_GET['time_in']))
                                       echo($_GET['time_in']); ?>"
                       placeholder="Enter Time In"
                       required>
               </div>
               <!--   SUBMIT    -->
               <div class="toggle-btns">
                 <button type="submit"
                        class="btn-primary link link-hover bounce-in-on-hover"
                        name="create">
                        <!--	ADD SIGN	-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        Clock In
                 </button>
                 <a href="clock_out.php"
                    class="btn-view link bounce-in-on-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                     <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                     <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                     <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                   </svg>
                   Clock Out
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
