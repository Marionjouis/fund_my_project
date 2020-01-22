<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $goodgirl = new \App\Entity\Project();
        $goodgirl->setName("Good Girl");
        $goodgirl->setImage("project1.jpg");
        $goodgirl->setExcerpt("Ce film parle de ...");
        $goodgirl->setDescription("Lorem ipsum");
        $goodgirl->setgoal(5500);
        $goodgirl->addCategory($this->getReference("category-film"));
        $manager->persist($goodgirl);
        $goodgirl->addContribution($this->getReference("contribution")); //implements contribution
        $goodgirl->setUser($this->getReference("marion"));
        $this->addReference("good-girl", $goodgirl);

        $lesyeuxdanslebus = new \App\Entity\Project();
        $lesyeuxdanslebus->setName("Les Yeux dans le bus");
        $lesyeuxdanslebus->setImage("project1.jpg");
        $lesyeuxdanslebus->setExcerpt("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $lesyeuxdanslebus->setDescription("Lorem ipsum");
        $lesyeuxdanslebus->setgoal(5500);
        $lesyeuxdanslebus->addCategory($this->getReference("category-film"));
        $lesyeuxdanslebus->addCategory($this->getReference("category-sport"));
        $manager->persist($lesyeuxdanslebus);
        $lesyeuxdanslebus->addContribution($this->getReference("amount")); //implements contribution
        $lesyeuxdanslebus->setUser($this->getReference("marion"));
        $this->addReference("les-yeux-dans-le-bus", $lesyeuxdanslebus);


        $dabado = new \App\Entity\Project();
        $dabado->setName("Dabado");
        $dabado->setImage("project3.jpg");
        $dabado->setExcerpt("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $dabado->setDescription("Lorem ipsum");
        $dabado->setgoal(5500);
        $dabado->addCategory($this->getReference("category-jeux"));
        $manager->persist($dabado);
        $dabado->addContribution($this->getReference("amount")); //implements contribution
        $dabado->setUser($this->getReference("marion"));
        $this->addReference("dabado", $dabado);

        $doosh = new \App\Entity\Project();
        $doosh->setName("DOOSH");
        $doosh->setImage("project4.jpg");
        $doosh->setExcerpt("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $doosh->setDescription("Lorem ipsum");
        $doosh->setgoal(5500);
        $doosh->addCategory($this->getReference("category-musique"));
        $doosh->addCategory($this->getReference("category-film"));
        $manager->persist($doosh);
        $doosh->addContribution($this->getReference("amount")); //implements contribution
        $doosh->setUser($this->getReference("marion"));
        $this->addReference("doosh", $doosh);


        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [
            CategoryFixtures::class
        ];
    }
}
