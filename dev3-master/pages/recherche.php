
<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">
        <form action = "index.php?page=recherche" method="post">
            <input name="q"/>
            <inout type="submit" />
            <button name="bricebutton" type="btn btn-primary" </button>
        </form> 
        
        <?php
            
            $query = "SELECT * FROM portfolios WHERE libelle LIKE :q";
            $statement = $dbh->prepare($query);
            $recherche = "%".$_POST["q"]."%";
            $statement->bindParam(':q', $recherche);
            $resultat = $statement->execute();
            $portfolios = $statement->fetchAll();
            foreach($portfolios as $portfolio)
            {
                ?>

                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/<?php echo $portfolio["image"]; ?>" alt="<?php echo $portfolio["libelle"]; ?>">
                    </div>
                </div>

                <?php





            }


            ?>



        </div>
        <!-- /.row -->

    </div>
</section>
