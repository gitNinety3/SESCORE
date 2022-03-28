<?php

include "connection_cb.php";

$sql = "SELECT * FROM bin_location ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
