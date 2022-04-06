<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "ses_core";

$pass = new mysqli("localhost", "root", "root", "ses_core");

$query_locations = "SELECT * FROM workorders";
$result_locations = mysqli_query($pass, $query_locations);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bin Locations</title>
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
              <form action="php/create_sm_table.php"
                  method="post">
                <!--  TITLE  -->
               <h4 class="display-4 text-center">Create Shipment</h4><hr><br>
               <?php if (isset($_GET['error'])) { ?>
               <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
                </div>
               <?php } ?>
               <!--     WORK ORDER  -->
               <div class="form-group">
                 <select id="workid"
                         name="workid"
                         value="<?php if(isset($_GET['workid']))
                                         echo($_GET['workid']); ?>">
                   <?php
                   while($row1 = mysqli_fetch_array($result_locations)):;?>
                   <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                 <?php endwhile; ?>
                 </select>
               </div>
               <!--     LENGTH    -->
               <div class="form-group">
                 <label for="boxlength">Length:</label>
                 <input type="boxlength"
                       class="form-control"
                       id="boxlength"
                       name="boxlength"
                       value="<?php if(isset($_GET['boxlength']))
                                       echo($_GET['boxlength']); ?>"
                       placeholder="Enter Length">
               </div>
               <!--     WIDTH    -->
               <div class="form-group">
                 <label for="boxwidth">Width:</label>
                 <input type="boxwidth"
                       class="form-control"
                       id="boxwidth"
                       name="boxwidth"
                       value="<?php if(isset($_GET['boxwidth']))
                                       echo($_GET['boxwidth']); ?>"
                       placeholder="Enter Width">
               </div>
               <!--     HEIGHT    -->
               <div class="form-group">
                 <label for="boxheight">Height:</label>
                 <input type="boxheight"
                       class="form-control"
                       id="boxheight"
                       name="boxheight"
                       value="<?php if(isset($_GET['boxheight']))
                                       echo($_GET['boxheight']); ?>"
                       placeholder="Enter Height">
               </div>
               <!--     WEIGHT    -->
               <div class="form-group">
                 <label for="boxweight">Weight:</label>
                 <input type="boxweight"
                       class="form-control"
                       id="boxweight"
                       name="boxweight"
                       value="<?php if(isset($_GET['boxweight']))
                                       echo($_GET['boxweight']); ?>"
                       placeholder="Enter Weight">
               </div>
               <!--     TRACK #    -->
               <div class="form-group">
                 <label for="tracknum">Track #:</label>
                 <input type="tracknum"
                       class="form-control"
                       id="tracknum"
                       name="tracknum"
                       value="<?php if(isset($_GET['tracknum']))
                                       echo($_GET['tracknum']); ?>"
                       placeholder="Enter Track #">
               </div>
               <!--   SUBMIT    -->
               <div class="toggle-btns">
                 <button type="submit"
                        class="btn-primary link bounce-in-on-hover"
                        name="create">
                        <!--	ADD SIGN	-->
        								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        								  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        								</svg>
                        Create New Shipment
                 </button>
                 <!--   VIEW    -->
                  <a href="view_shipment.php" class="btn-view link-primary link bounce-in-on-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    View
                  </a>
                 </button>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
