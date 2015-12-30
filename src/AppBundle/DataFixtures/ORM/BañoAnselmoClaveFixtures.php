<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class BañoAnselmoClaveFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
                
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-antes-1');
        $image1->setTitle('Baño antes de la reforma 1');
        $image1->setAlt('Baño antes de la reforma 1');
        $image1->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-antes-2');
        $image2->setTitle('Baño antes de la reforma 2');
        $image2->setAlt('Baño antes de la reforma 2');
        $image2->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-despues-1');
        $image3->setTitle('Baño despues de la reforma 1');
        $image3->setAlt('Baño despues de la reforma 1');
        $image3->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-despues-2');
        $image4->setTitle('Baño despues de la reforma 2');
        $image4->setAlt('Baño despues de la reforma 2');
        $image4->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-despues-3');
        $image5->setTitle('Baño despues de la reforma 3');
        $image5->setAlt('Baño despues de la reforma 3');
        $image5->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/bano-despues-4');
        $image6->setTitle('Baño despues de la reforma 4');
        $image6->setAlt('Baño despues de la reforma 4');
        $image6->setGallery($this->getReference('reforma-bano-anselmo-clave'));
        $manager->persist($image6);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
