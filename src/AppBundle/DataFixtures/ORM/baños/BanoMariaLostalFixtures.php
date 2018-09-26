<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoMariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño María Lostal');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $imagen->setFile('reforma-bano-maria-lostal.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2015-04-27'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $image1->setFile('bano-1.jpg');
        $image1->setTitle('Baño 1');
        $image1->setAlt('Baño 1');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $image2->setFile('bano-1-ropa.jpg');
        $image2->setTitle('Armario del bano 1');
        $image2->setAlt('Armario del bano 1');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $image3->setFile('bano-2.jpg');
        $image3->setTitle('Baño 2');
        $image3->setAlt('Baño 2');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $image4->setFile('bano-2-vater.jpg');
        $image4->setTitle('Váter del bano 2');
        $image4->setAlt('Váter del bano 2');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/');
        $image5->setFile('bano-2-ducha.jpg');
        $image5->setTitle('Ducha del bano 2');
        $image5->setAlt('Ducha del bano 2');
        $gallery->addImage($image5);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
