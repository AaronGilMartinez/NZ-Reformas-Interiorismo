<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaAnselmoClaveFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Anselmo Clavé');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/');
        $imagen->setFile('reforma-cocina-anselmo-clave.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2015-04-11'));
        
        for ($i = 1; $i <= 4; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/');
            $baño1->setFile('cocina-antes-' . $i . '.jpg');
            $baño1->setTitle('Cocina antes de la reforma ' . $i);
            $baño1->setAlt('Cocina antes de la reforma ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 8; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/');
            $baño1->setFile('cocina-despues-' . $i . '.jpg');
            $baño1->setTitle('Cocina después de la reforma ' . $i);
            $baño1->setAlt('Cocina después de la reforma ' . $i);
            $gallery->addImage($baño1);
        }
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
