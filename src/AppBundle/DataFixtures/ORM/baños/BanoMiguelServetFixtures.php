<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoMiguelServetFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Miguel Servet');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $imagen->setFile('reforma-bano-miguel-servet.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2016-04-25'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $image1->setFile('entrada.jpg');
        $image1->setTitle('Entrada');
        $image1->setAlt('Entrada');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $image2->setFile('bano.jpg');
        $image2->setTitle('Baño');
        $image2->setAlt('Baño');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $image3->setFile('ducha.jpg');
        $image3->setTitle('Ducha');
        $image3->setAlt('Ducha');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $image4->setFile('mampara-abierta.jpg');
        $image4->setTitle('Mampara abierta');
        $image4->setAlt('Mampara abierta');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/');
        $image5->setFile('mampara-cerrada.jpg');
        $image5->setTitle('Mampara cerrada');
        $image5->setAlt('Mampara cerrada');
        $gallery->addImage($image5);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
