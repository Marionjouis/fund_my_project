

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <?php

        $form = false;


        if( !empty($_POST["nom"]) && !empty($_POST["prenom"]) )
        {
            $form = true;

            $sql = "INSERT INTO utilisateurs(nom, prenom, password) VALUES(:n, :p, :pwd)";
            $statement = $dbh->prepare($sql);
            $statement->bindParam(":n",$_POST["nom"]);
            $statement->bindParam(":p",$_POST["prenom"]);
            $statement->bindParam(":pwd",password_hash($_POST["mdp"],PASSWORD_BCRYPT));

            $resultat = $statement->execute();

        }

        ?>

        <div class="col-md-12 col-lg-4">

            <?php

            if($form && $resultat) echo"ok";
            if($form && !$resultat) echo"nok";

            ?>

    <form action="index.php?page=inscription" method="post">

    <input name="nom" />

    <input name="prenom" />

        <input  type="password" name="mdp" />


        <input type="submit" />

</form>

</div>
    </div></section>