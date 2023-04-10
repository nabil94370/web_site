<?php

$servername = "mysql-nabilabs.alwaysdata.net";
$username = "nabilabs_nabil";
$password = "BsjG7Rm#p8hE";
$dbname = "nabilabs_root";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>