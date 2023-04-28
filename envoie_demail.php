<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Récupérer les données du formulaire
	$nom = $_POST["nom"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$sujet = $_POST["subject"];

	// Destinataire de l'e-mail
	$destinataire = "sos.infos@gmail.com";

	// Sujet de l'e-mail
	

	// Contenu de l'e-mail
	$contenu .= "Sujet:\n$sujet\n";
	$contenu = "Nom: $nom\n";
	$contenu .= "Adresse e-mail: $email\n";
	$contenu .= "Message:\n$message\n";

	// En-têtes de l'e-mail
	$headers = "From: $nom <$email>\r\n";
	$headers .= "Reply-To: $email\r\n";
	$headers .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "Content-Transfer-Encoding: 8bit\r\n";

	// Envoyer l'e-mail
	if (mail($destinataire, $sujet, $contenu, $headers)) {
		header('Location: index.html');
	} else {
		echo "Une erreur est survenue lors de l'envoi du message.";
	}
}



?>
