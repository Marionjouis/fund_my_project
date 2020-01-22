<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>
<body>

<h1>Test</h1>

//Creer un tableau
<?php
 $classes= array();
 $classes[0] ='Pierre';
 $classes[1] = 'Eric';
 $classes[2] = 'Antoine';

 unset($classes[1]); // Pour supprimer Eric : unset($classes[1]);

// pour afficher la réponse : var_dump($classes);

// ou  pour supprimer Eric on peut faire une boucle: foreach

echo"<ul>";
foreach ($classes as $classe)
    {
        ?><li><?php echo $classe; ?></li><?php
    }

?></ul><?php

var_dump($classes);

?>

</body>
</html>


