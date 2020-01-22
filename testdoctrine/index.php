<?php
require_once "bootstrap.php";

use Entity\Person;
use Entity\Club;
use Entity\Sport;
/*
 *
 * INSERT INTO

$person = new Person();
$person ->setFirstname("Pierre");
$person ->setLastname("Jehan");
$person ->setBirthdate(new DateTime("1989-06-29"));

$entityManager->persist($person); // Ajouter l'objet à l'entity manager
$entityManager->flush(); // Executer les requetes SQL

*/

$persons = $entityManager->getRepository(Person::class)->findAll();
$sports = $entityManager->getRepository(Sport::class)->findAll();
$clubs = $entityManager->getRepository(Club::class)->findAll();
/** @var Person $person */
foreach ($persons as $person) {
    echo $person->getFullname() ." (" . $person->getFormatedBirthdate("d/m/Y", "pas de date") . ")<br>";
    echo "<ul>";

    /** @var Club $club */
    foreach ($person->GetClub() as $club){
        echo "<li>" .$club->getName() . " (" .$club->getSport()->GetId(). ")</li>";
    }
    echo "</ul>";


            }
?>

<table>
    <thead>
        <tr>
            <th>Club</th>
            <th>Sport</th>
            <th>Nombre de personnes</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clubs as $club) : ?>
    <tr>
        <td><?php echo $club; ?></td>
        <td></td>
        <td></td>

    </tr>
    <?php endforeach; ?>
    </tbody>


</table>



<form action="save-club.php" method="post">
    <input type="text" name="name" placeholder="nom du club">
    <select name="sport_id">
        <?php foreach ($sports as $sport) : ?>
        <option value="<?= $sport->getId(); ?>">
            <?= $sport->getName(); ?>
        </option>
       <?php endforeach ?>
    </select>
    <input type="submit" value="Enregistrer">
</form>
