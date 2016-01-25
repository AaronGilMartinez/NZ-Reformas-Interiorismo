<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class BañoMariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
                
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/bano-1');
        $image1->setTitle('Baño 1');
        $image1->setAlt('Baño 1');
        $image1->setGallery($this->getReference('reforma-bano-maria-lostal'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/bano-1-ropa');
        $image2->setTitle('Armario del baño 1');
        $image2->setAlt('Armario del baño 1');
        $image2->setGallery($this->getReference('reforma-bano-maria-lostal'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/bano-2');
        $image3->setTitle('Baño 2');
        $image3->setAlt('Baño 2');
        $image3->setGallery($this->getReference('reforma-bano-maria-lostal'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/bano-2-vater');
        $image4->setTitle('Váter del baño 2');
        $image4->setAlt('Váter del baño 2');
        $image4->setGallery($this->getReference('reforma-bano-maria-lostal'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/bano-2-ducha');
        $image5->setTitle('Ducha del baño 2');
        $image5->setAlt('Ducha del baño 2');
        $image5->setGallery($this->getReference('reforma-bano-maria-lostal'));
        $manager->persist($image5);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
