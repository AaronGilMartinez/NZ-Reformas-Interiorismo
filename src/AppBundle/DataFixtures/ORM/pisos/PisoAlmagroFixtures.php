<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoAlmagroFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma integral Almagro');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
        $imagen->setFile('reforma-integral-almagro.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2016-03-23'));

        for ($i = 1; $i <= 3; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
            $image->setFile('bano-' . $i . '-antes.jpg');
            $image->setTitle('Baño antes ' . $i);
            $image->setAlt('Baño antes ' . $i);
            $image->setDescription('Antes');
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 3; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
            $image->setFile('bano-' . $i . '-despues.jpg');
            $image->setTitle('Baño después ' . $i);
            $image->setAlt('Baño después ' . $i);
            $image->setDescription('Después');
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 2; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
            $image->setFile('cocina-' . $i . '-antes.jpg');
            $image->setTitle('Cocina antes ' . $i);
            $image->setAlt('Cocina antes ' . $i);
            $image->setDescription('Antes');
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 2; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
            $image->setFile('cocina-' . $i . '-despues.jpg');
            $image->setTitle('Cocina después ' . $i);
            $image->setAlt('Cocina después ' . $i);
            $image->setDescription('Después');
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 9; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/');
            $image->setFile('espacio-' . $i . '.jpg');
            $image->setTitle('Espacio ' . $i);
            $image->setAlt('Espacio ' . $i);
            $gallery->addImage($image);
        }

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
