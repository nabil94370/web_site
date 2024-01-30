<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "stage_2024";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}