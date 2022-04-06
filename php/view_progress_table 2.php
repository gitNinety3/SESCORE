<?php

include "connection_inv.php";

$sql = "SELECT * FROM workorders WHERE id ORDER BY id";
$result = mysqli_query($conn, $sql);

?>
