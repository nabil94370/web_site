<?php

$servername = "mysql-martinez94.alwaysdata.net";
$username = "307660_root";
$password = "S&-k2C@TfT4B8#s";
$dbname = "martinez94_milan_lr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>