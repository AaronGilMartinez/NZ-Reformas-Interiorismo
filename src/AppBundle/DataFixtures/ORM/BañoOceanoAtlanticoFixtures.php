<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class BañoOceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-1-antes');
        $image1->setTitle('Baño 1 antes de la reforma');
        $image1->setAlt('Baño 1 antes de la reforma');
        $image1->setDescription('Antes');
        $image1->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-1-despues');
        $image2->setTitle('Baño 1 después de la reforma');
        $image2->setAlt('Baño 1 después de la reforma');
        $image2->setDescription('Después');
        $image2->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-1-puerta-antes');
        $image3->setTitle('Puerta del baño 1 antes de la reforma');
        $image3->setAlt('Puerta del baño 1 antes de la reforma');
        $image3->setDescription('Antes');
        $image3->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-1-puerta-despues');
        $image4->setTitle('Puerta del baño 1 después de la reforma');
        $image4->setAlt('Puerta del baño 1 después de la reforma');
        $image4->setDescription('Después');
        $image4->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-1-vater');
        $image5->setTitle('Váter del baño 1');
        $image5->setAlt('Váter del baño 1');
        $image5->setDescription('Después');
        $image5->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-2-ducha-antes');
        $image6->setTitle('Ducha del baño 2 antes de la reforma');
        $image6->setAlt('Ducha del baño 2 antes de la reforma');
        $image6->setDescription('Antes');
        $image6->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-2-ducha-despues');
        $image7->setTitle('Ducha de l baño 2 después de la reforma');
        $image7->setAlt('Ducha de l baño 2 después de la reforma');
        $image7->setDescription('Después');
        $image7->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-2-puerta');
        $image8->setTitle('Puerta del baño 2');
        $image8->setAlt('Puerta del baño 2');
        $image8->setDescription('Después');
        $image8->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/bano-2-suelo');
        $image9->setTitle('Suelo del baño 2');
        $image9->setAlt('Suelo del baño 2');
        $image9->setDescription('Después');
        $image9->setGallery($this->getReference('reforma-bano-oceano-atlantico'));
        $manager->persist($image9);


        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
