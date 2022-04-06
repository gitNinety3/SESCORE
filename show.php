<?php
  require_once("../php/connections.php");
  $id = $_GET['id'];
  $prog_result = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id = $id");
  if($row = mysqli_fetch_array($prog_result)) {
    $status = $row['status'];
    echo '<br>';
  }
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1><?php echo $status; ?></h1>
      <?php
      $previous = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id < $id ORDER BY status_id DESC");
      if($row = mysqli_fetch_array($previous)) {
        echo '<a href="show.php?id='.$row['status_id'].'"><button type="button">PREV</button<a>';
      }
      $next = mysqli_query($mysqli, "SELECT * FROM wo_status WHERE status_id > $id ORDER BY status_id ASC");
      if($row = mysqli_fetch_array($next)) {
        echo '<a href="show.php?id='.$row['status_id'].'"><button type="button">NEXT</button<a>';
      } else {
        $finished = mysqli_query($mysqli, "SELECT * FROM wo_status ORDER BY status_id DESC LIMIT 1");
        if($row = mysqli_fetch_array($finished)) {
          echo '<a href="ship.php?id='.$row['status_id'].'"><button type="button">Finished</button<a>';
        }
      }
      ?>
  </body>
</html>
