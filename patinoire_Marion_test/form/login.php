<div id="content">
    <!-- tester si l'utilisateur est connecté -->
    <?php
    session_start();
    if($_SESSION['mail'] !== ""){
        $mail = $_SESSION['mail'];
        // afficher un message
        echo "Bonjour $mail, bienvenue sur votre espace.";
    }
    ?>

</div>

