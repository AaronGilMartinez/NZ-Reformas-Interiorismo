<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaBanoIslaGraciosaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina y baño Isla Graciosa');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/');
        $imagen->setFile('cocina-y-bano-isla-graciosa.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
//                . '<p>Para este proyecto se realizó tanto reforma de cocina como de baño.</p>');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-11-07'));

        for ($i = 1; $i <= 7; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/');
            $baño1->setFile('cocina-isla-graciosa-' . $i . '.jpg');
            $baño1->setTitle('Cocina Isla Graciosa ' . $i);
            $baño1->setAlt('Cocina Isla Graciosa ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 3; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/');
            $baño1->setFile('bano-isla-graciosa-' . $i . '.jpg');
            $baño1->setTitle('Baño Isla Graciosa ' . $i);
            $baño1->setAlt('Baño Isla Graciosa ' . $i);
            $gallery->addImage($baño1);
        }

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
