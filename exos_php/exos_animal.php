<?php
class Animal
{
    private $nom;
    private $dureeVie;
    public function __construct($name,$vie)
    {
        $this->nom = $name;
        $this->dureeVie = $vie;
    }
    public function getInformation():string
    {
        return $this->nom." a une durée de vie de ".$this->dureeVie." mois";
    }
}
class Poisson extends Animal
{
    private $nbNageoires;
    public function setNbNageoires($nbNageoires)
    {
        $this->nbNageoires = $nbNageoires;
    }
    public function getInformation():string
    {
        return parent::getInformation()." et possède ".$this->nbNageoires." nageoires";
    }
    public function nage(){
    }
}
class Oiseau extends Animal
{
    private $nbAiles;
    public function setNbAiles($nbAiles)
    {
        $this->nbAiles = $nbAiles;
    }
    public function getInformation():string
    {
        return parent::getInformation()." et possède ".$this->nbAiles." ailes";
    }
    public function vole(){
    }
}

$Merlan = new Poisson(Merlan, 14);
$Merlan->setNbNageoires(2);
echo $Merlan ->getInformation();
//Merlan a une durée de vie de 14 mois et possède 2 nageoires


$Perroquet = new Oiseau(Perroquet, 220);
$Perroquet->setNbAiles(2);
echo $Perroquet ->getInformation();
//Perroquet a une durée de vie de 220 mois et possède 2 ailes
?>
