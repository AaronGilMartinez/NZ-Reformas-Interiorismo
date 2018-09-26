<?php

// src/AppBundle/DataFixtures/ORM/UserFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use BackendBundle\Entity\User;

class UserFixtures implements FixtureInterface, ContainerAwareInterface {

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {

        $user1 = new User();
        $user1->setUsername('Admin');
        $user1->addRole('ROLE_ADMIN');
        $user1->setEmail('admin@nzreformas.es');
        $user1->setSalt(md5(time()));
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user1);
        $user1->setPassword($encoder->encodePassword('Nava.Laya_2014', $user1->getSalt()));
        $manager->persist($user1);

        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }

}
