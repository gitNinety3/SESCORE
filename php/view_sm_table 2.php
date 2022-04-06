<?php

include "connection_inv.php";

$sql = "SELECT * FROM shipping ORDER BY id";
$result = mysqli_query($conn, $sql);

?>
