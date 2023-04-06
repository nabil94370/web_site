<?php
if(isset($_POST['submit'])){
 if(isset($_POST['username']) and !empty($_POST['username'])){
  if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
    if(isset($_POST['password']) and !empty($_POST['password'])){


        $getdata = $pdo->prepare("SELECT email FROM admin WHERE email=? and password = ?");
        $getdata->execute(array($_POST['username'], $_POST['password']));

        $rows = $getdata->rowCount();

        if($rows==true){
            $_SESSION['admin']=$_POST['username'];
            header("Location:dashboard.php");

        }else{
            $erreur = "Username ou mot de passe inconnue";
        }

    }else{
        $erreur = "Veuillez sasir votre password";
    }

  }else{
    $erreur = "Veuillez saisir un email valide!";
  }
 }else{
    $erreur = "Veuillez saisir un UserName";
 }

}