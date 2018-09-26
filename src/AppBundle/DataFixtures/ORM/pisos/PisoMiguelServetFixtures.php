<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoMiguelServetFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
                
        $gallery = new Gallery();
        $gallery->setName('Reforma integral Miguel Servet');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
        $imagen->setFile('reforma-integral-miguel-servet.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2016-04-25'));
        
        for ($i = 1; $i <= 4; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
            $baño1->setFile('pasillo-' . $i . '.jpg');
            $baño1->setTitle('Pasillo ' . $i);
            $baño1->setAlt('Pasillo ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 2; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
            $baño1->setFile('salon-' . $i . '.jpg');
            $baño1->setTitle('Salón ' . $i);
            $baño1->setAlt('Salón ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 5; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
            $baño1->setFile('bano-' . $i . '.jpg');
            $baño1->setTitle('Baño ' . $i);
            $baño1->setAlt('Baño ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 8; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
            $baño1->setFile('terraza-' . $i . '.jpg');
            $baño1->setTitle('Terraza ' . $i);
            $baño1->setAlt('Terraza ' . $i);
            $gallery->addImage($baño1);
        }
        
        for ($i = 1; $i <= 5; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
            $baño1->setFile('cocina-' . $i . '.jpg');
            $baño1->setTitle('Cocina ' . $i);
            $baño1->setAlt('Cocina ' . $i);
            $gallery->addImage($baño1);
        }
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
