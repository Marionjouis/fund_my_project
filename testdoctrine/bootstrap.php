<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup; // use permet de en pas ecrire dans le code tout le namespace
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/Entity");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'port' => 8889,
    'user' => 'root',
    'password' => 'root',
    'dbname'   => 'dcdev3_sport',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$config->setProxyDir(__DIR__ . "/Entity/Proxy"); // Définir l'emplacement des classes Proxy
$entityManager = EntityManager::create($dbParams, $config);