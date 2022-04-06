<?php

include "connection_inv.php";

$sql = "SELECT * FROM workorders ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>
