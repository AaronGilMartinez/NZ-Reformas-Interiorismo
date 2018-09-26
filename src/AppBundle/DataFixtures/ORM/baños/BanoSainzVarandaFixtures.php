<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class ReformaBanoSainzVarandaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Sainz de Varanda');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/');
        $imagen->setFile('bano-sainz-de-varanda.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2016-08-20'));


        for ($i = 1; $i <= 7; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/');
            $image->setFile('bano-sainz-de-varanda-' . $i . '.jpg');
            $image->setTitle('Baño Sainz de varanda ' . $i);
            $image->setTitle('Baño Sainz de varanda ' . $i);
            $image->setAlt('Baño Sainz de varanda ' . $i);
            $gallery->addImage($image);
        }

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
