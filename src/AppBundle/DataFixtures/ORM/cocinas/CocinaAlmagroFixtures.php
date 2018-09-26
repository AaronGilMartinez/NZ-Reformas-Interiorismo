<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaAlmagroFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Almagro');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/');
        $imagen->setFile('reforma-cocina-almagro.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-03-23'));

        for ($i = 1; $i <= 2; $i++) {
            $cocina = new Image();
            $cocina->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/');
            $cocina->setFile('cocina-' . $i . '-antes.jpg');
            $cocina->setTitle('Cocina ' . $i . ' antes');
            $cocina->setAlt('Cocina ' . $i . ' antes');
            $gallery->addImage($cocina);
        }

        for ($i = 2; $i <= 3; $i++) {
            $cocina = new Image();
            $cocina->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/');
            $cocina->setFile('cocina-' . $i . '-despues.jpg');
            $cocina->setTitle('Cocina ' . $i . ' despues');
            $cocina->setAlt('Cocina ' . $i . ' despues');
            $gallery->addImage($cocina);
        }

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
