<?php

include "connection_inv.php";

$sql = "SELECT * FROM taps ORDER BY id";
$result = mysqli_query($conn, $sql);

?>
