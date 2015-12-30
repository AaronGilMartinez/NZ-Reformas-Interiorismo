<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class MariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/bano-1');
        $image1->setTitle('Reforma en baño 1');
        $image1->setAlt('Reforma en baño 1');
        $image1->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/bano-2');
        $image2->setTitle('Reforma en baño 2');
        $image2->setAlt('Reforma en baño 2');
        $image2->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/bano-3');
        $image3->setTitle('Reforma en baño 3');
        $image3->setAlt('Reforma en baño 3');
        $image3->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-1');
        $image4->setTitle('Reforma en cocina 1');
        $image4->setAlt('Reforma en cocina 1');
        $image4->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-2');
        $image5->setTitle('Reforma en cocina 2');
        $image5->setAlt('Reforma en cocina 2');
        $image5->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-3');
        $image6->setTitle('Reforma en cocina 3');
        $image6->setAlt('Reforma en cocina 3');
        $image6->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-4');
        $image7->setTitle('Reforma en cocina 4');
        $image7->setAlt('Reforma en cocina 4');
        $image7->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/despacho-1');
        $image8->setTitle('Reforma de despacho 1');
        $image8->setAlt('Reforma de despacho 1');
        $image8->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/despacho-2');
        $image9->setTitle('Reforma de despacho 2');
        $image9->setAlt('Reforma de despacho 2');
        $image9->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/dormitorio-1');
        $image10->setTitle('Reforma de dormitorio 1');
        $image10->setAlt('Reforma de dormitorio 1');
        $image10->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image10);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/dormitorio-2');
        $image11->setTitle('Reforma de dormitorio 2');
        $image11->setAlt('Reforma de dormitorio 2');
        $image11->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-1');
        $image12->setTitle('Reforma de salón 1');
        $image12->setAlt('Reforma de salón 1');
        $image12->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-2');
        $image13->setTitle('Reforma de salón 2');
        $image13->setAlt('Reforma de salón 2');
        $image13->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-3');
        $image14->setTitle('Reforma de salón 3');
        $image14->setAlt('Reforma de salón 3');
        $image14->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-4');
        $image15->setTitle('Reforma de salón 4');
        $image15->setAlt('Reforma de salón 4');
        $image15->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image15);

        $image16 = new Image();
        $image16->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-5');
        $image16->setTitle('Reforma de salón 5');
        $image16->setAlt('Reforma de salón 5');
        $image16->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image16);

        $image17 = new Image();
        $image17->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/vestidor');
        $image17->setTitle('Reforma de vestidor');
        $image17->setAlt('Reforma de vestidor');
        $image17->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image17);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
