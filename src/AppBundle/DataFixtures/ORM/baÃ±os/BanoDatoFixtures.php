<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoDatoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Dato');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $imagen->setFile('reforma-bano-dato.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2016-03-21'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image1->setFile('frontal-lavabo.jpg');
        $image1->setTitle('Frontal del lavabo');
        $image1->setAlt('Frontal del lavabo');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image2->setFile('lavabo.jpg');
        $image2->setTitle('Lavabo');
        $image2->setAlt('Lavabo');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image3->setFile('radiador-toallero.jpg');
        $image3->setTitle('Radiador toallero');
        $image3->setAlt('Radiador toallero');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image4->setFile('mampara.jpg');
        $image4->setTitle('Mampara');
        $image4->setAlt('Mampara');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image5->setFile('ducha.jpg');
        $image5->setTitle('Ducha');
        $image5->setAlt('Ducha');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/');
        $image6->setFile('inodoro.jpg');
        $image6->setTitle('Inodoro');
        $image6->setAlt('Inodoro');
        $gallery->addImage($image6);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
