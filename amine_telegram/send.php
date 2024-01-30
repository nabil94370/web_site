<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le contenu de l'input avec le nom "textSend"
    $message = htmlspecialchars(strip_tags($_POST["textSend"]));
    echo "Message reçu : $message fin";
} else {
    // Gérer les requêtes qui ne sont pas de type POST si nécessaire
    $message = "Erreur : méthode non autorisée";
}

$botToken = "6956422792:AAGubDGXUn5xFz2g9qi0tPLYQtVVGWsYUEw";
$chatID = "1304710370";

$apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";


// Utilisez cURL pour envoyer la requête
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

// Vérifiez si la requête cURL a réussi
if ($response === false) {
    echo "Erreur cURL : " . curl_error($ch);
} else {
    // La requête cURL a réussi, continuez le traitement
    curl_close($ch);

    // Analysez la réponse JSON si nécessaire
    $responseArray = json_decode($response, true);

    // Vérifiez si le message a été envoyé avec succès
    if ($responseArray && isset($responseArray["ok"]) && $responseArray["ok"]) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
