<?php
//phpinfo();die

require_once "vendor/autoload.php";

define ("MODE", "DEV");

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => MODE == "DEV" ? false : "cache/twig"
]);
$languages =["HTML", "CSS", "SQL","PHP"];
echo $twig->render('index.html.twig',
    ['name' => 'Fabien',
    'languages' => $languages
]);


