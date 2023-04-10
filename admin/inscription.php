<?php
require_once ('db_conn.php');
$message = '';

if (!empty($_POST)) {
$nom_utilisateur = $_POST['uname'];
$Mot_de_passe = $_POST['password'];

$CreateSql = "INSERT INTO `users` (user_name,passwords) VALUES ('$nom_utilisateur', '$Mot_de_passe')";
$res = mysqli_query($conn, $CreateSql) or die(mysqli_error($conn));
    if ($res) {
        $message = "Insertion réussie avec succès";
    } else {
        $message = "Erreur d'insertion à la base";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION </title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
     <form action="" method="post" class="all_form">
     	<h2>INSCRIPTION</h2>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Mot De Passe"><br>

     	<input type="submit" name="submit" value="Inscription">
     </form>
     <?php if (isset($message)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
            </div><?php } ?>
            <?php if (isset($erreur)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erreur; ?>
            </div><?php } ?>


</body>
</html>