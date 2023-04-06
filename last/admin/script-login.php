<?php
session_start();
if(isset($_POST['submit'])) {
 if(isset($_POST['username']) and !empty($_POST['usernmae'])){
    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
        if(isset($_POST['password']) and !empty($_POST['password'])){


            require "server.php";

            $password = sha1($_POST['password']);

            $getdata = $pdo->prepare("SELECT email FROM admin WHERE email=? and password = ?");
            $getdata->execute(array($_POST['username'], $password));

            $rows = $getdata->rowCount();

            if($rows==true){
                $_SESSION['admin']=$_POST['username'];
                header("Location:inc/Dashboard.php");
            }else{
                $erreur ="Username ou mot de passe inconnue";
            }



        }else{
            $erreur = "Veuillez saisir votre password";

        }


    }else{
        $erreur = "Veuillez saisir un email valide";
    }


 }else{
    $erreur = "Veuillez saisir un username";
 }








}