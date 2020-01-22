<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $sport = new \App\Entity\Category();
        $sport->setname("sport");
        $this->addReference("category-sport", $sport);
        $manager->persist($sport);

        $musique = new \App\Entity\Category();
        $musique->setname("musique");
        $this->addReference("category-musique", $musique);
        $manager->persist($musique);

        $jeux = new \App\Entity\Category();
        $jeux->setname("jeux");
        $this->addReference("category-jeux", $jeux);
        $manager->persist($jeux);

        $film = new \App\Entity\Category();
        $film->setname("film");
        $this->addReference("category-film", $film);
        $manager->persist($film);

        $manager->flush();

    }
}
