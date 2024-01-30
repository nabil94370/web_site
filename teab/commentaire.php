<?php
// Soumettre un nouveau commentaire
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "commentaire";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === true) {
        echo "Commentaire ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du commentaire : " . $conn->error;
    }

    $conn->close();
}

// Afficher les commentaires existants
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "commentaire";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['name'] . "</strong> (" . $row['email'] . ")</p>";
        echo "<p>" . $row['comment'] . "</p>";
        echo "<p><small>Posté le " . $row['created_at'] . "</small></p>";
        echo "<hr>";
    }
} else {
    echo "Aucun commentaire trouvé.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comm.css">
    <title>Document</title>
</head>
<body>
<section class="get-in-touch">
   <h1 class="title">Get in touch</h1>
   <!-- Formulaire pour soumettre un nouveau commentaire -->
<form method="post" action="" class="contact-form row">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" class="input-text js-input" required><br>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" class="input-text js-input" required><br>

    <label for="comment">Commentaire :</label><br>
    <textarea name="comment" rows="4" id="message" class="input-text js-input" required></textarea><br>

    <input type="submit" name="submit" value="Poster le commentaire" class="submit-btn" type="submit">
</form>
</section>
<p class="note">Based on <a class="link" href="http://redcollar.digital/contacts/" target="blank">Red Collar Contact Form</a>.</p>
</body>
</html>
