<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaMiguelServetFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Miguel Servet');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $imagen->setFile('reforma-cocina-miguel-servet.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-04-25'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $image1->setFile('frente-puerta-corredera.jpg');
        $image1->setTitle('Puerta corredera de frente');
        $image1->setAlt('Puerta corredera de frente');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $image2->setFile('puerta-corredera.jpg');
        $image2->setTitle('Puerta corredera');
        $image2->setAlt('Puerta corredera');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $image3->setFile('frente-cocina.jpg');
        $image3->setTitle('Frente de la cocina');
        $image3->setAlt('Frente de la cocina');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $image4->setFile('encimera.jpg');
        $image4->setTitle('Encimera');
        $image4->setAlt('Encimera');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/');
        $image5->setFile('puerta.jpg');
        $image5->setTitle('Puerta');
        $image5->setAlt('Puerta');
        $gallery->addImage($image5);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
