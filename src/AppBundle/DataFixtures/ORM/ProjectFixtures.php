<?php

// src/AppBundle/DataFixtures/ORM/ProjectFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;

class ProjectFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $project1 = new Project();
        $project1->setName('Reformas de comunidades');
        $project1->setImage('bundles/app/images/proyectos/reformas-de-comunidades/reformas-de-comunidades');
        $project1->setDescription('Descripción Reformas de comunidades, sasd asd aaaaaaaaa ddddddda'
                . 'aaddd ddddddda as fgsaa asss dddddda aas a dsa aa aaaaaaaaaaa aaaa.');
        $manager->persist($project1);
        
        $project2 = new Project();
        $project2->setName('Reformas de pisos');
        $project2->setImage('bundles/app/images/proyectos/reformas-de-pisos/reformas-de-pisos');
        $project2->setDescription('Descripción Reformas de pisos, sasd asd aaaaaaaaa ddddddda'
                . 'aaddd ddddddda as fgsaa asss dddddda aas a dsa aa aaaaaaaaaaa aaaa.');
        $manager->persist($project2);
        
        $project3 = new Project();
        $project3->setName('Reformas de baños');
        $project3->setImage('bundles/app/images/proyectos/reformas-de-baños/reformas-de-baños');
        $project3->setDescription('Descripción Reformas de baños, sasd asd aaaaaaaaa ddddddda'
                . 'aaddd ddddddda as fgsaa asss dddddda aas a dsa aa aaaaaaaaaaa aaaa.');
        $manager->persist($project3);
        
        $project4 = new Project();
        $project4->setName('Reformas de cocinas');
        $project4->setImage('bundles/app/images/proyectos/reformas-de-cocinas/reformas-de-cocinas');
        $project4->setDescription('Descripción Reformas de cocinas, sasd asd aaaaaaaaa ddddddda'
                . 'aaddd ddddddda as fgsaa asss dddddda aas a dsa aa aaaaaaaaaaa aaaa.');
        $manager->persist($project4);

        $manager->flush();

        $this->addReference('comunidades', $project1);
        $this->addReference('pisos', $project2);
        $this->addReference('baños', $project3);
        $this->addReference('cocinas', $project4);
    }

    public function getOrder() {
        return 1;
    }

}
