<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoDatoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma intregral Dato');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/');
        $imagen->setFile('reforma-integral-dato.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2016-03-21'));

        for ($i = 1; $i <= 5; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/');
            $imagen->setFile('comedor-' . $i . '.jpg');
            $imagen->setTitle('Comedor ' . $i);
            $imagen->setAlt('Comedor ' . $i);
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 4; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/');
            $imagen->setFile('pasillo-' . $i . '.jpg');
            $imagen->setTitle('Pasillo ' . $i);
            $imagen->setAlt('Pasillo ' . $i);
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 5; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/');
            $imagen->setFile('bano-' . $i . '.jpg');
            $imagen->setTitle('Baño ' . $i);
            $imagen->setAlt('Baño ' . $i);
            $gallery->addImage($imagen);
        }
        
        for ($i = 1; $i <= 6; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/');
            $imagen->setFile('cocina-' . $i . '.jpg');
            $imagen->setTitle('Cocina ' . $i);
            $imagen->setAlt('Cocina ' . $i);
            $gallery->addImage($imagen);
        }
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
