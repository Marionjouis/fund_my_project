<?php

use Entity\Club;
use Entity\Sport;

require_once "bootstrap.php";

// Recuperer les données du formulaire (clubs et sports)
//*var_dump($_POST);
$name = $_POST["name"];
$sport_id =$_POST["sport_id"];

$sport = $entityManager->getRepository(Sport ::class)->find($sport_id);

// Enregistrer en base de données
$club = new Club();
$club->setName($name);
$club->setSport($sport);

$entityManager->persist($club); // Ca permet de créer un nouveau club
$entityManager->flush(); // Executer les requêtes

// Rediriger en Page d'accueil
header("Location: index.php");

