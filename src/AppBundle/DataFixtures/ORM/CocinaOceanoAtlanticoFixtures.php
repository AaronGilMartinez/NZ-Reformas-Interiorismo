<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class CocinaOceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/cocina');
        $image1->setTitle('Cocina');
        $image1->setAlt('Cocina');
        $image1->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/campana');
        $image2->setTitle('Campana extractora');
        $image2->setAlt('Campana extractora');
        $image2->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/encimera-muebles');
        $image3->setTitle('Encimera y muebles');
        $image3->setAlt('Encimera y muebles');
        $image3->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/encimera');
        $image4->setTitle('Encimera');
        $image4->setAlt('Encimera');
        $image4->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/esquinero');
        $image5->setTitle('Esquinero');
        $image5->setAlt('Esquinero');
        $image5->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/esquinero-extraible');
        $image6->setTitle('Esquinero extraible');
        $image6->setAlt('Esquinero extraible');
        $image6->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/estanteria');
        $image7->setTitle('Estantería');
        $image7->setAlt('Estantería');
        $image7->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/grifo');
        $image8->setTitle('Grifo');
        $image8->setAlt('Grifo');
        $image8->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/grifo-2');
        $image9->setTitle('Grifo 2');
        $image9->setAlt('Grifo 2');
        $image9->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image9);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/mesa');
        $image11->setTitle('Mesa');
        $image11->setAlt('Mesa');
        $image11->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/mobiliario-electrodomesticos');
        $image12->setTitle('Mobiliario y electrodomésticos');
        $image12->setAlt('Mobiliario y electrodomésticos');
        $image12->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/mucha-luz');
        $image13->setTitle('La cocina tiene mucha luz');
        $image13->setAlt('La cocina tiene mucha luz');
        $image13->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/muebles-cerrados');
        $image14->setTitle('Mobiliario cerrado');
        $image14->setAlt('Mobiliario cerrado');
        $image14->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/muebles-abiertos');
        $image15->setTitle('Mobiliario abierto');
        $image15->setAlt('Mobiliario abierto');
        $image15->setGallery($this->getReference('reforma-cocina-oceano-atlantico'));
        $manager->persist($image15);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
