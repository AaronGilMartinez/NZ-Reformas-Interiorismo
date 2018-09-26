<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaPortugalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Portugal');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/');
        $imagen->setFile('reforma-cocina-portugal.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-06-01'));

        for ($i = 1; $i <= 12; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/');
            $baño1->setFile('portugal-' . $i . '.jpg');
            $baño1->setTitle('Cocina Portugal ' . $i);
            $baño1->setAlt('Cocina Portugal ' . $i);
            $gallery->addImage($baño1);
        }
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
