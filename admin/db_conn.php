<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "martinez94_milan_lr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>