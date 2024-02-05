<?php

$servername = "mysql-sokuu94.alwaysdata.net";
$username = "sokuu94_nabil";
$password = "Jesaispas94";
$dbname = "sokuu94_php_crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>