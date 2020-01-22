

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <?php

        $form = false;



        ?>

        <div class="col-md-12 col-lg-4">

            <?php

            if($form && $resultat) echo"ok";
            if($form && !$resultat) echo"nok";

            ?>

    <form action="form/connexion.php" method="post">

    <input name="nom" />

    <input name="prenom" />

        <input  type="password" name="mdp" />


        <input type="submit" />

</form>

</div>
    </div></section>