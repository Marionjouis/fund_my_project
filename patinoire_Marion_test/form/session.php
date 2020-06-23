<?php

session_start();

require "../conf/bdd.php";


/*if(isset($_POST["utilisateurConnected"]))
{
    $id = $_POST["utilisateurConnected"]["id"];
}

echo var_dump($_POST["utilisateurConnected"]); */
$id = array_key_first($_SESSION['utilisateurConnected']);

echo var_dump($id);

//$utilisateur_id = $this->id = new id();
//echo $utilisateur_id->getId();

if(!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['modif_email'])) {

        $mail = $_POST['email'];

        if (empty($mail)) {
            $valid = false;
        }
    }

    $modif_email = $dbh->prepare('UPDATE utilisateur SET mail = $mail WHERE id = $_SESSION');


    echo "Modification confirmée";
}


if(!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['modif_password'])) {

        $mdp = $_POST["password"];
        $confmdp = $_POST["conf_password"];

        if (empty($mdp)) {

            $valid = false;
            echo "Le mot de passe ne peut pas être vide";


        } elseif ($mdp != $confmdp) {

            $valid = false;
            echo "La confirmation du mot de passe ne correspond pas";
        }

// Si toutes les conditions sont remplies alors on fait le traitement
        if ($valid) {

            $mdp = password_hash($_POST["password"], PASSWORD_BCRYPT);

            if($valid)
            {
                $modif_password = $dbh->prepare('UPDATE utilisateur(pwd) SET $password WHERE id='.$_SESSION["id"]);

                echo "Modification confirmée";
            }
        }
    }
}


?>
