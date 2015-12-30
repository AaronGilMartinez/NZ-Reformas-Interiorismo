<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class CocinaAnselmoClaveFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-antes-1');
        $image1->setTitle('Cocina antes de la reforma 1');
        $image1->setAlt('Cocina antes de la reforma 1');
        $image1->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-antes-2');
        $image2->setTitle('Cocina antes de la reforma 2');
        $image2->setAlt('Cocina antes de la reforma 2');
        $image2->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-antes-3');
        $image3->setTitle('Cocina antes de la reforma 3');
        $image3->setAlt('Cocina antes de la reforma 3');
        $image3->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-antes-4');
        $image4->setTitle('Cocina antes de la reforma 4');
        $image4->setAlt('Cocina antes de la reforma 4');
        $image4->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-1');
        $image5->setTitle('Cocina después de la reforma 1');
        $image5->setAlt('Cocina después de la reforma 1');
        $image5->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-2');
        $image6->setTitle('Cocina después de la reforma 2');
        $image6->setAlt('Cocina después de la reforma 2');
        $image6->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-3');
        $image7->setTitle('Cocina después de la reforma 3');
        $image7->setAlt('Cocina después de la reforma 3');
        $image7->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image7);
        
        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-4');
        $image8->setTitle('Cocina después de la reforma 4');
        $image8->setAlt('Cocina después de la reforma 4');
        $image8->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image8);
        
        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-5');
        $image9->setTitle('Cocina después de la reforma 5');
        $image9->setAlt('Cocina después de la reforma 5');
        $image9->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image9);
        
        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-6');
        $image10->setTitle('Cocina después de la reforma 6');
        $image10->setAlt('Cocina después de la reforma 6');
        $image10->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image10);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-7');
        $image11->setTitle('Cocina después de la reforma 7');
        $image11->setAlt('Cocina después de la reforma 7');
        $image11->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-8');
        $image12->setTitle('Cocina después de la reforma 8');
        $image12->setAlt('Cocina después de la reforma 8');
        $image12->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image12);
        
        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/cocina-despues-9');
        $image13->setTitle('Cocina después de la reforma 9');
        $image13->setAlt('Cocina después de la reforma 9');
        $image13->setGallery($this->getReference('reforma-cocina-anselmo-clave'));
        $manager->persist($image13);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
