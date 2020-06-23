<?php


session_start();

require "../conf/bdd.php";

if (!empty($_POST["mail"]) && !empty($_POST["pwd"])) {
    $form = true;


    $sql = "SELECT * FROM utilisateur WHERE mail =:m";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(":m", $_POST["mail"]);
    $resultat = $statement->execute();

    if ($resultat) {
        $data = $statement->fetch();
    } else echo "erreur de serveur";

    if ($data !== false) {
        if (password_verify($_POST["pwd"], $data["pwd"])) {

            $_SESSION["utilisateurConnected"] = $data;
            $_SESSION["isConnected"] = true;

            header("Location: ../index.php?form=ok");


        }
        else {
            echo "erreur de mots de passe";
        }


    }
    else {
        echo "aucun utilisateur qui correspond";
    }
}
?>