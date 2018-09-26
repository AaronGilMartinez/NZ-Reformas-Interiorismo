<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoLuisOroGiralFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma integral Luis Oro Giral', STR_PAD_LEFT);
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/');
        $imagen->setFile('reforma-integral-luis-oro-giral.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2016-03-30'));

        for ($i = 1; $i <= 13; $i++) {
            $index = str_pad($i, 2, '0', STR_PAD_LEFT);
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/');
            $imagen->setFile($index . '-antes.jpg');
            $imagen->setTitle('Antes');
            $imagen->setAlt('Antes');
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 13; $i++) {
            $index = str_pad($i, 2, '0', STR_PAD_LEFT);
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/');
            $imagen->setFile($index . '-despues.jpg');
            $imagen->setTitle('Después');
            $imagen->setAlt('Después');
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }

        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/');
        $imagen->setFile('13_despues.jpg');
        $imagen->setTitle('Después');
        $imagen->setAlt('Después');
        $imagen->setDescription('Después');
        $gallery->addImage($imagen);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
