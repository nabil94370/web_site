<?php
// Connexion à la base de données
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "stage_2024_djellal";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Vérifier la longueur du mot de passe
    if (strlen($password) < 5) {
        $error_message = "Le mot de passe doit faire au moins 5 caractères.";
    } elseif ($password != $confirm_password) {
        $error_message = "Les mots de passe ne correspondent pas.";
    } else {
        // Hacher le mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Préparer et exécuter la requête SQL
        $stmt = $conn->prepare("INSERT INTO users (Pseudo, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $success_message = "Inscription réussie!";
        } else {
            echo "Erreur lors de l'inscription : " . $stmt->error;
        }

        // Fermer la connexion
        $stmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
    *,
    *:before,
    *:after{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #080710;
    }
    .background{
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 50%;
    }
    .background .shape{
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }
    .shape:first-child{
        background: linear-gradient(
            #1845ad,
            #23a2f6
        );
        left: -80px;
        top: -80px;
    }
    .shape:last-child{
        background: linear-gradient(
            to right,
            #ff512f,
            #f09819
        );
        right: -30px;
        bottom: -80px;
    }
    form{
        height: 620px; /* Ajusté pour inclure la hauteur du message d'erreur */
        width: 400px;
        background-color: rgba(255,255,255,0.13);
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        padding: 50px 35px;
    }
    form *{
        font-family: 'Poppins',sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }
    form h3{
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label{
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }
    input{
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }
    ::placeholder{
        color: #e5e5e5;
    }
    button{
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    .social{
    margin-top: 30px;
    display: flex;
    }
    .social div{
    background: red;
    width: 150px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgba(255,255,255,0.27);
    color: #eaf0fb;
    text-align: center;
    }
    .social div:hover{
    background-color: rgba(255,255,255,0.47);
    }
    .social .fb{
    margin-left: 25px;
    }
    .social i{
    margin-right: 4px;
    }
    #success-message {
        color: #00ff00; /* Couleur verte */
        font-size: 16px;
        text-align: center;
        margin-top: 10px;
    }
    #error-message {
        color: #ff0000; /* Couleur rouge */
        font-size: 16px;
        text-align: center;
        margin-top: 10px;
    }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
            <h3>Register Here</h3>

            <!-- Affichez le message d'erreur s'il existe -->
            <?php if (!empty($error_message)): ?>
                <div id="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <!-- Affichez le message de succès s'il existe -->
            <?php if (!empty($success_message)): ?>
                <div id="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>

            <label for="username">Pseudo</label>
            <input type="text" placeholder="Pseudo" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="text" placeholder="Email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
            </div>
    </form>
</body>
</html>
