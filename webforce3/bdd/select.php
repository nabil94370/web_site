<?php

require_once "connexion.php";


$bdd = connectBdd("root", "root","test", "");


$query = $bdd->prepare("SELECT * FROM jeux_video WHERE console = :console");
$query->bindValue(":console","PC");
$query->execute();


var_dump($query->fetch());



?>