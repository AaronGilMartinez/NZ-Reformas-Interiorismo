<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class JuanCarlosIFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
                
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-1');
        $image1->setTitle('Cambio de puertas y suelo 1');
        $image1->setAlt('Cambio de puertas y suelo 1');
        $image1->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-2');
        $image2->setTitle('Cambio de puertas y suelo 2');
        $image2->setAlt('Cambio de puertas y suelo 2');
        $image2->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-3');
        $image3->setTitle('Cambio de puertas y suelo 3');
        $image3->setAlt('Cambio de puertas y suelo 3');
        $image3->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-4');
        $image4->setTitle('Cambio de puertas y suelo 4');
        $image4->setAlt('Cambio de puertas y suelo 4');
        $image4->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-5');
        $image5->setTitle('Cambio de puertas y suelo 5');
        $image5->setAlt('Cambio de puertas y suelo 5');
        $image5->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/puertas-suelo-6');
        $image6->setTitle('Cambio de puertas y suelo 6');
        $image6->setAlt('Cambio de puertas y suelo 6');
        $image6->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image6);
        
        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/remate-1');
        $image7->setTitle('Remate en muebles 1');
        $image7->setAlt('Remate en muebles 1');
        $image7->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/remate-2');
        $image8->setTitle('Remate en muebles 2');
        $image8->setAlt('Remate en muebles 2');
        $image8->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/transicion-1');
        $image9->setTitle('Transición de suelos 1');
        $image9->setAlt('Transición de suelos 1');
        $image9->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image9);
        
        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/transicion-2');
        $image10->setTitle('Transición de suelos 2');
        $image10->setAlt('Transición de suelos 2');
        $image10->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image10);
        
        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/manillar');
        $image11->setTitle('Manillar de puertas');
        $image11->setAlt('Manillar de puertas');
        $image11->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image11);
        
        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/cocina');
        $image12->setTitle('Cambio de puertas en cocina');
        $image12->setAlt('Cambio de puertas en cocina');
        $image12->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image12);
        
        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/cocina-comedor');
        $image13->setTitle('Cambio de suelo del comedor');
        $image13->setAlt('Cambio de suelo del comedor');
        $image13->setGallery($this->getReference('reforma-suelo-puertas-juan-carlos-i'));
        $manager->persist($image13);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
