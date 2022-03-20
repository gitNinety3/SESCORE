<?php

include "connection_inv.php";

$sql = "SELECT * FROM rawmaterial ORDER BY id";
$result = mysqli_query($conn, $sql);
