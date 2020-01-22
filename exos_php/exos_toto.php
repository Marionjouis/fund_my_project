<?php
class Humain
{
    private $nom;
    private $age;
    private $mariage = false;
    private $partenaire;
    private $genre;
    public function __construct($nom,$genre,$age)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;
    }
    public function info():string 
    {
        $text = $this->nom." a ".$this->age." ans";
        $text .= "est marié";
            if($this->genre === "femme") $text .= "e";
            $text .= " avec ". $this->partenaire->getNom();
        }
        return $text;
    }
    public function marieAvec($partenaire)
    {
        $this->mariage = true;
        $this->partenaire = $partenaire;
    }
    public function getNom()
    {
        return $this->nom;
    }
}
class Homme extends Humain
{
    private $anneeV;
    public function __construct($nom,$age)
    {
      parent::__construct($nom, "homme",$age);
    }
    public function vasectomie($annee)
    {
        $this->anneeV = $annee;
    }
}
class Femme extends Humain
{
    private $nbA;
    public function __construct($nom,$age)
    {
        parent::__construct($nom, "femme",$age);
    }
    public function accouchement($nb)
    {
        $this->nbA = $nb;
    }
    public function info():string
    {
        $text = 
        parent::info();
        if($this->nbA > 0) $text .= " a accouché ".$this->nbA." fois";
        return $text;
    }
}
$toto = new Homme("toto",22);
$tata = new Femme("tata",23);
$titi = new Homme("titi",21);
$toto->vasectomie(1999);
$tata->accouchement(2);
$toto->marieAvec($tata);
echo $tata->getNom();
$tata->marieAvec($toto);
$tata->info();
//tata a 23 ans et est mariée avec toto qui a 22 ans, elle a vécue 2 accouchements
$toto->info();
//toto a 22 ans et est marié avec tata qui a 23 ans, il a subi une vasectomie
$titi->info();
//titi a 21 ans et n'est pas marié


?>

