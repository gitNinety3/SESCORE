<?php

include "connection_cb.php";

$sql = "SELECT * FROM bin_location ORDER BY id";
$result = mysqli_query($conn, $sql);
