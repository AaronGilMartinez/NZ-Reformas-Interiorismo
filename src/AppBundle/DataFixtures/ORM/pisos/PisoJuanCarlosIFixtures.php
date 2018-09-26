<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoJuanCarlosIFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de suelo y puertas Juan Carlos I');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
        $imagen->setFile('reforma-suelo-puertas-juan-carlos-i.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2014-08-03'));

        for ($i = 1; $i <= 6; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
            $image->setFile('puertas-suelo-' . $i . '.jpg');
            $image->setTitle('Cambio de puertas y suelo ' . $i);
            $image->setAlt('Cambio de puertas y suelo ' . $i);
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 2; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
            $image->setFile('remate-' . $i . '.jpg');
            $image->setTitle('Remate en muebles ' . $i);
            $image->setAlt('Remate en muebles ' . $i);
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 2; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
            $image->setFile('transicion-' . $i . '.jpg');
            $image->setTitle('Transición de suelos ' . $i);
            $image->setAlt('Transición de suelos ' . $i);
            $gallery->addImage($image);
        }

        $image11 = new Image();
        $image11->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
        $image11->setFile('manillar.jpg');
        $image11->setTitle('Manillar de puertas');
        $image11->setAlt('Manillar de puertas');
        $gallery->addImage($image11);

        $image12 = new Image();
        $image12->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
        $image12->setFile('cocina.jpg');
        $image12->setTitle('Cambio de puertas en cocina');
        $image12->setAlt('Cambio de puertas en cocina');
        $gallery->addImage($image12);

        $image13 = new Image();
        $image13->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/');
        $image13->setFile('cocina-comedor.jpg');
        $image13->setTitle('Cambio de suelo del comedor');
        $image13->setAlt('Cambio de suelo del comedor');
        $gallery->addImage($image13);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
