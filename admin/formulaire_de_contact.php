<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$to = "nabilabbes94370@gmail.com";
	$headers = "From: $email";
	$body = "Nom: $name\n\nEmail: $email\n\nSujet: $subject\n\nMessage:\n$message";

	if (mail($to, $subject, $body, $headers)) {
		echo "Votre message a été envoyé avec succès!";
	} else {
		echo "Une erreur est survenue. Veuillez réessayer plus tard.";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de contact</title>
</head>
<body>
	<h2>Contactez-nous</h2>
	<form action="process-form.php" method="post">
		<label for="name">Nom :</label>
		<input type="text" id="name" name="name" required><br>

		<label for="email">Email :</label>
		<input type="email" id="email" name="email" required><br>

		<label for="subject">Sujet :</label>
		<input type="text" id="subject" name="subject" required><br>

		<label for="message">Message :</label>
		<textarea id="message" name="message" rows="5" cols="30" required></textarea><br>

		<input type="submit" value="Envoyer">
	</form>
</body>
</html>