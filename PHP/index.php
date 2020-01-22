<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <h1> Test </h1>

    // $nom = "a"; // DECLARER UNE VARIABLE 
    // function nomFonction($nomParametre, $p2) { // DEFINIR UNE FONCTION AVEC DES PARAMETRES

    // echo "a"; // PERMET D'AFFICHER DU HTML
    
    //  nomFonction(); // PERMET D'EXECUTER LA FONCTION APPELLEE EN LIGNE 12
    <?php
    function calculette($nombreA, $nombreB, $operateur, $affiche) {
        $resultat = false;
        if ($operateur === "+") {
            $resultat = $nombreA + $nombreB;
        } else if ($operateur === "/" && $nombreB !== 0) {
            $resultat = $nombreA / $nombreB;
        } else
        {
            $resultat = "opérateur incorrect";
        }
        if($affiche) echo $resultat; else return $resultat;
    }
    function addition($a, $b) {
        $resultat = $a + $b;
        return $resultat;
    }
    function division($nb3,$nb4)
    {
        if($nb4 === 0) return "erreur";
        return $nb3/$nb4;
    }
    function multiplication($nb1,$nb2){
        echo $nb1*$nb2;
    }
    function soustraction($nb5,$nb6){
        return $nb5-$nb6;
    }
    echo addition(34,65);
    echo division(687,86);
    echo division(687,0);
    echo division(45,86);
    multiplication(54,54);
    echo soustraction(44,66);


?>

</head>
<body>




</body>
</html>