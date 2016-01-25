<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class SalesianosFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-antes-reforma-1');
        $image1->setTitle('Fachada antes de la reforma 1');
        $image1->setAlt('Fachada antes de la reforma 1');
        $image1->setDescription('Antes');
        $image1->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image1);
        
        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-1');
        $image2->setTitle('Patio antes reparaciones 1');
        $image2->setAlt('Patio antes reparaciones 1');
        $image2->setDescription('Antes');
        $image2->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-10');
        $image3->setTitle('Patio antes reparaciones 10');
        $image3->setAlt('Patio antes reparaciones 10');
        $image3->setDescription('Antes');
        $image3->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-11');
        $image4->setTitle('Patio antes reparaciones 11');
        $image4->setAlt('Patio antes reparaciones 11');
        $image4->setDescription('Antes');
        $image4->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-12');
        $image5->setTitle('Patio antes reparaciones 12');
        $image5->setAlt('Patio antes reparaciones 12');
        $image5->setDescription('Antes');
        $image5->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-2');
        $image6->setTitle('Patio antes reparaciones 2');
        $image6->setAlt('Patio antes reparaciones 2');
        $image6->setDescription('Antes');
        $image6->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-3');
        $image7->setTitle('Patio antes reparaciones 3');
        $image7->setAlt('Patio antes reparaciones 3');
        $image7->setDescription('Antes');
        $image7->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-4');
        $image8->setTitle('Patio antes reparaciones 4');
        $image8->setAlt('Patio antes reparaciones 4');
        $image8->setDescription('Antes');
        $image8->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-5');
        $image9->setTitle('Patio antes reparaciones 5');
        $image9->setAlt('Patio antes reparaciones 5');
        $image9->setDescription('Antes');
        $image9->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-6');
        $image10->setTitle('Patio antes reparaciones 6');
        $image10->setAlt('Patio antes reparaciones 6');
        $image10->setDescription('Antes');
        $image10->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image10);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-7');
        $image11->setTitle('Patio antes reparaciones 7');
        $image11->setAlt('Patio antes reparaciones 7');
        $image11->setDescription('Antes');
        $image11->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-8');
        $image12->setTitle('Patio antes reparaciones 8');
        $image12->setAlt('Patio antes reparaciones 8');
        $image12->setDescription('Antes');
        $image12->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-antes-reparaciones-9');
        $image13->setTitle('Patio antes reparaciones 9');
        $image13->setAlt('Patio antes reparaciones 9');
        $image13->setDescription('Antes');
        $image13->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-antes-reforma-2');
        $image14->setTitle('Fachada antes de la reforma 2');
        $image14->setAlt('Fachada antes de la reforma 2');
        $image14->setDescription('Antes');
        $image14->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-despues-reforma-1');
        $image15->setTitle('Fachada después de la reforma 1');
        $image15->setAlt('Fachada después de la reforma 1');
        $image15->setDescription('Después');
        $image15->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image15);

        $image16 = new Image();
        $image16->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-despues-reforma-2');
        $image16->setTitle('Fachada después de la reforma 2');
        $image16->setAlt('Fachada después de la reforma 2');
        $image16->setDescription('Después');
        $image16->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image16);

        $image17 = new Image();
        $image17->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-despues-reforma-3');
        $image17->setTitle('Fachada después de la reforma 3');
        $image17->setAlt('Fachada después de la reforma 3');
        $image17->setDescription('Después');
        $image17->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image17);

        $image18 = new Image();
        $image18->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/fachada-despues-reforma-4');
        $image18->setTitle('Fachada después de la reforma 4');
        $image18->setAlt('Fachada después de la reforma 4');
        $image18->setDescription('Después');
        $image18->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image18);

        $image19 = new Image();
        $image19->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-despues-reparaciones-1');
        $image19->setTitle('Patio después reparaciones 1');
        $image19->setAlt('Patio después reparaciones 1');
        $image19->setDescription('Después');
        $image19->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image19);

        $image20 = new Image();
        $image20->setSrc('bundles/app/images/proyectos/rehabilitacion-de-edificios/reparacion-patio-colegio-salesianos/patio-despues-reparaciones-2');
        $image20->setTitle('Patio después reparaciones 2');
        $image20->setAlt('Patio después reparaciones 2');
        $image20->setDescription('Después');
        $image20->setGallery($this->getReference('reparacion-patio-colegio-salesianos'));
        $manager->persist($image20);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
