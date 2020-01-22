<?php include('../parts/header.php'); ?>

<?php

//session_start();

include('conf/bdd.php'); // Fichier PHP contenant la connexion à votre BDD


// Si la variable "$_Post" contient des infos, on les envoie
if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    // On se place sur le bon formulaire grâce au "name" de la balise "input"
    if (isset($_POST['inscription'])){
        $nom = htmlentities(trim($nom)); // On récupère le nom  $_POST["
        $prenom = htmlentities(trim($prenom)); // on récupère le prénom
        $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
        $mdp = trim($mdp); // On récupère le mot de passe 
        $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe

//  Vérification du nom
        if(empty($nom))
        {
            $valid = false;
            $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
        }

//  Vérification du prénom
        if(empty($prenom))
        {
            $valid = false;
            $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
        }

// Vérification du mail
        if(empty($mail)){
            $valid = false;
            $er_mail = "Le mail ne peut pas être vide";

// On vérifit que le mail est dans le bon format
        }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
            $valid = false;
            $er_mail = "Le mail n'est pas valide";

        }//else{
        // On vérifit que le mail est disponible
//$req_mail = $dbh->query("SELECT mail FROM utilisateur WHERE mail = ?", array($mail));

//$req_mail = $req_mail->fetch();

//if ($req_mail['mail'] <> ""){
        // $valid = false;
//$er_mail = "Ce mail existe déjà";
    }
}

// Vérification du mot de passe
if(empty($mdp))
{
    $valid = false;
    $er_mdp = "Le mot de passe ne peut pas être vide";

}elseif($mdp != $confmdp){
    $valid = false;
    $er_mdp = "La confirmation du mot de passe ne correspond pas";
}

// Si toutes les conditions sont remplies alors on fait le traitement
if($valid){

    $mdp = password_hash($_POST["mdp"],PASSWORD_BCRYPT);

// On insert nos données dans la table utilisateur


    $req = $dbh->prepare('INSERT INTO utilisateur(nom, prenom, mail, pwd) VALUES(:nom, :prenom, :mail, :pwd)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'pwd' => $mdp
    ));

    echo 'Inscription confirmée !';
    //}
    //}
}
?>

<label for="inscription">S'inscrire<br>
<form action="inscription.php" method="post">
    <?php
    // S'il y a une erreur sur le nom alors on affiche
    if (isset($er_nom)){
        ?>

                <div><?= $er_nom ?></div>

            <?php
    }
    ?>
<div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php if(isset($nom)){ echo $nom; }?>" required> ">
  </div>


  <div class="form-group">
      <?php
      if (isset($er_prenom)){
          ?>

                  <div><?= $er_prenom ?></div>

              <?php
      }
      ?>
    <label for="exampleFormControlInput1">Prenom</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>
         ">
  </div>
  <div class="form-group">
              <?php
      if (isset($er_mail)){
          ?>
                 
          <div><?= $er_mail ?></div>

              <?php
      }
      ?>
    <label for="exampleFormControlInput1">Adresse Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com" value="<?php if(isset($mail)){ echo $mail; }?>" required>">
            <?php
      if (isset($er_mdp)){
          ?>

                     <div><?= $er_mdp ?></div>

          <?php
      }
      ?>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="mot_de_passe" value="<?php if(isset($mdp)){ echo $mdp; }?>" required">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="mot_de_passe" name="confmdp" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Groupe</label>
    <select class="form-control" id="exampleFormControlSelect1">
    <option value="1">1000vaches</option>
    <option value="2">3 Rivières</option>
    <option value="3">Aff</option>
    <option value="4">Avenir Bio Nord</option>
    <option value="5">Avenir Bio Sud</option>
    <option value="6">Châteaugiron</option>
    <option value="7">Des Rocs</option>
    <option value="8">Dol</option>
    <option value="9">Ernée</option>
    <option value="10">Escale</option>
    <option value="11">Etrelles</option>
    <option value="12">Gévezé</option>
    <option value="13">Hyaigne</option>
    <option value="14">La Guerche</option>
    <option value="15">Landivy</option>
    <option value="16">Le Garun</option>
    <option value="17">Le Meu</option>
    <option value="18">Louvigné</option>
    <option value="19">Martigné</option>
    <option value="20">Riverains du Couesnon</option>
    <option value="21">Saint Etienne</option>
    <option value="22">Serein</option>
    <option value="23">Tinténiac</option>
    <option value="24">Vallons</option>
    <option value="25">Vitré</option>
    </select>
  </div>

  <button type="submit" class="btn btn-info" name="inscription">Valider</button>
 
</form>


