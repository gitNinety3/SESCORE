<?php

include "connection_jb.php";

$sql = "SELECT * FROM workorders ORDER BY id";
$result = mysqli_query($conn, $sql);
