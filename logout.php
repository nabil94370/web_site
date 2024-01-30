<?php
// logout.php
// Code pour la page de déconnexion
session_start();
// Détruisez la session pour déconnecter l'utilisateur
session_destroy();
// Redirigez l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
header("Location: index.php");
exit();
?>