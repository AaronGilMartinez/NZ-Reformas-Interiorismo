<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoMariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $gallery = new Gallery();
        $gallery->setName('Reforma integral María Lostal');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
        $imagen->setFile('reforma-integral-maria-lostal.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $manager->persist($gallery);
        $gallery->setUploaded(new \DateTime('2015-04-27'));

        for ($i = 1; $i <= 3; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
            $baño1->setFile('bano-' . $i . '.jpg');
            $baño1->setTitle('Reforma en baño ' . $i);
            $baño1->setAlt('Reforma en baño ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 4; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
            $baño1->setFile('cocina-' . $i . '.jpg');
            $baño1->setTitle('Reforma en cocina ' . $i);
            $baño1->setAlt('Reforma en cocina ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 2; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
            $baño1->setFile('despacho-' . $i . '.jpg');
            $baño1->setTitle('Reforma en despacho ' . $i);
            $baño1->setAlt('Reforma en despacho ' . $i);
             $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 2; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
            $baño1->setFile('dormitorio-' . $i . '.jpg');
            $baño1->setTitle('Reforma de dormitorio ' . $i);
            $baño1->setAlt('Reforma de dormitorio ' . $i);
             $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 5; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
            $baño1->setFile('salon-' . $i . '.jpg');
            $baño1->setTitle('Reforma de salón ' . $i);
            $baño1->setAlt('Reforma de salón ' . $i);
             $gallery->addImage($baño1);
        }

        $image17 = new Image();
        $image17->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/');
        $image17->setFile('vestidor.jpg');
        $image17->setTitle('Reforma de vestidor');
        $image17->setAlt('Reforma de vestidor');
        $manager->persist($baño1);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
