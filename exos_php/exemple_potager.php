<?php


class Potager{
 private $nom;
 private $categories;
 private $couleurs;
 
 public function init($data)
 {
     $this->setNom = ($data["nom"]);
     $this->setCategories =($data["categories"]);
     $this->setCouleurs =($data["couleurs"]);

 }

public function __construct($nom, $categories, $couleurs)
{
    $this->nom =$nom;
    $this->categories =$categories;
    $this->couleurs =$couleurs;

}
public function GetInformation()
{

    $text = $this->nom." fait partie de la categorie des ". $this->categories. " il a une couleur ". $this->couleurs." et il pousse dans la ";

    return $text;
}
}

class Legumes extends Potager{

    private $lieu;

    public function __construct($lieu)
    {
        $this->lieu = $lieu;
    }

    public function GetInformation()
    {
    $text = $this->lieu." .";
    return $text;
    }

}

$poireaux = new Potager("Poireau","legumes","verte");
echo $poireaux->GetInformation();
echo "<br>";
$pommedeterre = new Potager("Pomme de terre", "legumes", "jaune");
echo $pommedeterre-> GetInformation();
echo "<br>";
$courgette = new Potager("Courgette", "legumes", "vert");
echo $courgette-> GetInformation();
$terre = new Legumes ("terre");
echo $terre->GetInformation();

?>