<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucle</title>
</head>
<body>

<?php //Faire une boucle while "Tant que"
$compteur = 3;

while($compteur >0) {
 echo $compteur . '<br />';
 $compteur --;

}
echo 'Bonne année';


// Creer une page a chaque chargement choisira un eleve de la classe 

$dcdev = array('Brice','Adrien','Mickaël','Philippe','Paul','Abda','Momo','Olivier','Lisa','Bastien','Gaëlle','Arnaud','Marion','Laura','Ewen','Riwan','Moragne','Renaud','Antoine');

$monNombre = rand(0,count($dcdev)-1);
echo $dcdev[$monNombre];

echo "<hr />";

// ou deuxieme solution

//shuffle($dcdev);
//echo $dcdev[0];


?>



</body>
</html>