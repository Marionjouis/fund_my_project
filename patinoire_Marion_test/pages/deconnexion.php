<?php

// On démarre la session
session_start();

if(isset($_SESSION['isConnected'])) // Si tu es connecté on te déconnecte et on te redirige vers une page.
{

    // Supression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    // Supression des cookies de connexion automatique
    setcookie('mail', '');
    setcookie('pwd', '');

    header('Location: ../index.php?page=deconnexion');

}else{ // Dans le cas contraire on t'empêche d'accéder à cette page en te redirigeant vers la page que tu veux.

    header('Location: index.php?page=home.php');

}
?>
