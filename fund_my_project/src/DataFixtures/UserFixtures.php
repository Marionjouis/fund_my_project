<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserFixtures extends Fixture
{
    private $encoder;
    /**
     * UserFixtures constructor.
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {

        $admin = new User();
        $admin->setFirstname("Pierre");
        $admin->setLastname("De Vitton");
        $admin->setEmail("pierre@admin.fr");
        $admin->setPassword($this->encoder->encodePassword($admin, "rootadmin"));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference("pierre", $admin);

        $marion = new User();
        $marion->setFirstname("Marion");
        $marion->setLastname("Jouis");
        $marion->setEmail("marion.jouis@gmail.com");
        $marion->setPassword($this->encoder->encodePassword($marion, "root"));
        $marion->setRoles(["ROLE_USER"]);
        $manager->persist($marion);
        $this->addReference("marion", $marion);



        $manager->flush();
    }
}
