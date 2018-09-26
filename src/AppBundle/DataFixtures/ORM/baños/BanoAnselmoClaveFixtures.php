<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoAnselmoClaveFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Anselmo Clavé');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/');
        $imagen->setFile('reforma-bano-anselmo-clave.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2015-04-10'));

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/');
            $imagen->setFile('bano-antes-' . $i . '.jpg');
            $imagen->setTitle('Baño antes de la reforma ' . $i);
            $imagen->setAlt('Baño antes de la reforma ' . $i);
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 4; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/');
            $imagen->setFile('bano-despues-' . $i . '.jpg');
            $imagen->setTitle('Baño después de la reforma ' . $i);
            $imagen->setAlt('Baño después de la reforma ' . $i);
            $gallery->addImage($imagen);
        }

        $manager->persist($gallery);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
