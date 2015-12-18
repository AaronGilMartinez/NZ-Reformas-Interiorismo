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
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-antes-reforma-1');
        $image1->setTitle('Fachada antes de la reforma 1');
        $image1->setAlt('Fachada antes de la reforma 1');
        $image1->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-antes-reforma-2');
        $image2->setTitle('Fachada antes de la reforma 2');
        $image2->setAlt('Fachada antes de la reforma 2');
        $image2->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-después-reforma-1');
        $image3->setTitle('Fachada después de la reforma 1');
        $image3->setAlt('Fachada después de la reforma 1');
        $image3->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-después-reforma-2');
        $image4->setTitle('Fachada después de la reforma 2');
        $image4->setAlt('Fachada después de la reforma 2');
        $image4->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-después-reforma-3');
        $image5->setTitle('Fachada después de la reforma 3');
        $image5->setAlt('Fachada después de la reforma 3');
        $image5->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/fachada-después-reforma-4');
        $image6->setTitle('Fachada después de la reforma 4');
        $image6->setAlt('Fachada después de la reforma 4');
        $image6->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-1');
        $image7->setTitle('Patio antes reparaciones 1');
        $image7->setAlt('Patio antes reparaciones 1');
        $image7->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-10');
        $image8->setTitle('Patio antes reparaciones 10');
        $image8->setAlt('Patio antes reparaciones 10');
        $image8->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-11');
        $image9->setTitle('Patio antes reparaciones 11');
        $image9->setAlt('Patio antes reparaciones 11');
        $image9->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-12');
        $image10->setTitle('Patio antes reparaciones 12');
        $image10->setAlt('Patio antes reparaciones 12');
        $image10->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image10);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-2');
        $image11->setTitle('Patio antes reparaciones 2');
        $image11->setAlt('Patio antes reparaciones 2');
        $image11->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-3');
        $image12->setTitle('Patio antes reparaciones 3');
        $image12->setAlt('Patio antes reparaciones 3');
        $image12->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-4');
        $image13->setTitle('Patio antes reparaciones 4');
        $image13->setAlt('Patio antes reparaciones 4');
        $image13->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-5');
        $image14->setTitle('Patio antes reparaciones 5');
        $image14->setAlt('Patio antes reparaciones 5');
        $image14->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-6');
        $image15->setTitle('Patio antes reparaciones 6');
        $image15->setAlt('Patio antes reparaciones 6');
        $image15->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image15);

        $image16 = new Image();
        $image16->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-7');
        $image16->setTitle('Patio antes reparaciones 7');
        $image16->setAlt('Patio antes reparaciones 7');
        $image16->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image16);

        $image17 = new Image();
        $image17->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-8');
        $image17->setTitle('Patio antes reparaciones 8');
        $image17->setAlt('Patio antes reparaciones 8');
        $image17->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image17);

        $image18 = new Image();
        $image18->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-antes-reparaciones-9');
        $image18->setTitle('Patio antes reparaciones 9');
        $image18->setAlt('Patio antes reparaciones 9');
        $image18->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image18);

        $image19 = new Image();
        $image19->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-después-reparaciones-1');
        $image19->setTitle('Patio después reparaciones 1');
        $image19->setAlt('Patio después reparaciones 1');
        $image19->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image19);

        $image20 = new Image();
        $image20->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/patio-después-reparaciones-2');
        $image20->setTitle('Patio después reparaciones 2');
        $image20->setAlt('Patio después reparaciones 2');
        $image20->setGallery($this->getReference('reparación-patio-colegio-salesianos'));
        $manager->persist($image20);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
