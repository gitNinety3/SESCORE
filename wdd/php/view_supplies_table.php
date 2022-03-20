<?php

include "connection_inv.php";

$sql = "SELECT * FROM supplies ORDER BY id";
$result = mysqli_query($conn, $sql);
