<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validation des données
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Si des champs sont manquants, on affiche un message d'erreur et on arrête le script
        echo "Tous les champs sont obligatoires.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si l'adresse e-mail n'est pas valide, on affiche un message d'erreur et on arrête le script
        echo "L'adresse e-mail n'est pas valide.";
        exit;
    }

    // Préparation de l'e-mail
    $to = "nabilabbes@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de formulaire de contact";
    $message = "Nom : $name\n\nEmail : $email\n\nSujet : $subject\n\nMessage : \n$message";
    $headers = "From: $email\r\nReply-To: $email";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Si l'e-mail est envoyé avec succès, on affiche un message de confirmation
        echo "Votre message a bien été envoyé.";
    } else {
        // Sinon, on affiche un message d'erreur
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.";
    }
} else {
    // Si la méthode de requête HTTP n'est pas POST, on redirige l'utilisateur vers le formulaire de contact
    header("Location: contact.php");
}
