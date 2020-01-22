<?php
 
mysql_connect('localhost', 'root', '');
mysql_select_db('bdd');
 
 
if(isset($_POST['inscription'])) {

    $nom = html_entities(trim($nom));
    $prenom = html_entities(trim($prenom));
    $email = html_entities(strtolower(trim($email)));
    $mdp = html_entities(trim($mdp));
    $confmdp = html_entities(trim($confmdp));
    $groupe = html_entities(trim($groupe));

    //Verification du nom
        if (empty($nom)) {
            $valid = false;
            $er_nom = ("Le nom d'utilisateur ne peut pas être vide");
    }

    //Verification du prenom
    if (empty($prenom)) {
        $valid = false;
        $er_prenom = ("Le nom d'utilisateur ne peut pas être vide");
    }

    }//Verification du email
    if (empty(email)) {
        $valid = false;
        $er_email = ("Le nom d'utilisateur ne peut pas être vide");

    }



    // On vérifit que le mail est dans le bon format
}elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){
$valid = false;
$er_mail = "Le mail n'est pas valide";

}else{
// On vérifit que le mail est disponible
$req_email = $DB->query("SELECT mail FROM utilisateur WHERE email = ?", array($email));

$req_email = $req_email->fetch();
 
if ($req_email['email'] <> ""){
$valid = false;
$er_email = "Ce email existe déjà";
 }
}

// Vérification du mot de passe
if(empty($mdp)) {
$valid = false;
$er_mdp = "Le mot de passe ne peut pas être vide";

}elseif($mdp != $confmdp){
$valid = false;
$er_mdp = "La confirmation du mot de passe ne correspond pas";
}

// Si toutes les conditions sont remplies alors on fait le traitement
if($valid){

$mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
$date_creation_compte = date('Y-m-d H:i:s');

// On insert nos données dans la table utilisateur
$DB->insert("INSERT INTO utilisateur (nom, prenom, mail, mdp, date_creation_compte) VALUES (?, ?, ?, ?, ?)", array($nom, $prenom, $email, $mdp, $date_creation_compte));

header('Location: index.php');
exit;
        }
    }
 }
?>


        ["nom"]) AND isset($_POST['prenom']) AND isset($_POST["email"]) AND isset($_POST['mot_de_passe']) and isset($_POST["groupe"]) )
    {  

                 
                     
        $result =mysql_query('insert utilisateurs set nom="'.$nom.'",  prenom="'.$prenom.'",mot_de_passe="'.$mdp.'", email="'.$email.'", groupe="'.$groupe.'"',)or die("Requete pas comprise");
            }
?>