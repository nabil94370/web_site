<?php
require_once ('db_conn.php');
$message = '';
$erreur = '';

if (!empty($_POST)) {
    $nom_utilisateur = $_POST['uname'];
    $Mot_de_passe = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà
    $checkSql = "SELECT user_name FROM users WHERE user_name='$nom_utilisateur'";
    $checkResult = mysqli_query($conn, $checkSql);
    $count = mysqli_num_rows($checkResult);
    
    if ($count == 0) { // Si le nom d'utilisateur n'existe pas, vérifier si le mot de passe existe déjà
        $checkSql = "SELECT passwords FROM users WHERE passwords='$Mot_de_passe'";
        $checkResult = mysqli_query($conn, $checkSql);
        $count = mysqli_num_rows($checkResult);

        if ($count == 0) { // Si le mot de passe n'existe pas, insérer l'utilisateur dans la base de données
            $CreateSql = "INSERT INTO `users` (user_name,passwords) VALUES ('$nom_utilisateur', '$Mot_de_passe')";
            $res = mysqli_query($conn, $CreateSql) or die(mysqli_error($conn));
            if ($res) {
                $message = "<span style='color:green;font-weight:bold; margin-left: 10px;'>Création utilisateur $nom_utilisateur OK</span>";
            } else {
                $erreur = "<span style='color:red;font-weight:bold;'>Erreur d'inscription</span>";
            }
        } else { // Si le mot de passe existe déjà, afficher un message d'erreur
            $erreur = "<span style='color:red;font-weight:bold; margin-left: 10px;'>erreur : le mot de passe existent déjà</span>";
        }
    } else { // Si le nom d'utilisateur existe déjà, afficher un message d'erreur
        $erreur = "<span style='color:red;font-weight:bold; margin-left: 10px;'> erreur: l'utilisateur $nom_utilisateur existe déjà</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>INSCRIPTION </title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="css2.css">
</head>
<body>
     <form action="" method="post" class="all_form">
        <h2>INSCRIPTION</h2>
        <label>Nom d'utilisateur</label>
        <input type="text" name="uname" placeholder="Nom d'utilisateur"><br>
        
        <label>Mot de passe</label>
        <input type="password" name="password" placeholder="Mot De Passe"><br>

        <input type="submit" name="submit" value="Inscription">
        <?php if (isset($message)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
            </div>
        <?php } ?>
        <?php if (isset($erreur)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erreur; ?>
            </div>
        <?php } ?>
        <a href="index.php" id="porte_oi">
            <button class="btn btn-success m-3" type="button" >
                login
            </button>
        </a>
     </form>
</body>
</html>
