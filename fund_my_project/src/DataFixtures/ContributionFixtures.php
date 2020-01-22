<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $contribution = new \App\Entity\Contribution();
        $contribution->setAmount("5500");
        $contribution->setUser($this->getReference("marion"));
        $contribution->setProject($this->getReference("good-girl"));
        $manager->persist($contribution);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            ProjectFixtures::class
        ];
    }
}
