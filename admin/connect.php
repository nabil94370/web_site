<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "martinez94_php_crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>