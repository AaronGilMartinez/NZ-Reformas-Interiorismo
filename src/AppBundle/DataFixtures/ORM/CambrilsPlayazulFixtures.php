<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class CambrilsPlayazulFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
               
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-1');
        $image1->setTitle('Fachada antes de la reforma 1');
        $image1->setAlt('Fachada antes de la reforma 1');
        $image1->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-2');
        $image2->setTitle('Fachada antes de la reforma 2');
        $image2->setAlt('Fachada antes de la reforma 2');
        $image2->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-3');
        $image3->setTitle('Fachada antes de la reforma 3');
        $image3->setAlt('Fachada antes de la reforma 3');
        $image3->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-4');
        $image4->setTitle('Fachada antes de la reforma 4');
        $image4->setAlt('Fachada antes de la reforma 4');
        $image4->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-5');
        $image5->setTitle('Fachada antes de la reforma 5');
        $image5->setAlt('Fachada antes de la reforma 5');
        $image5->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-antes-reforma-6');
        $image6->setTitle('Fachada antes de la reforma 6');
        $image6->setAlt('Fachada antes de la reforma 6');
        $image6->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-después-reforma-1');
        $image7->setTitle('Fachada después de la reforma 1');
        $image7->setAlt('Fachada después de la reforma 1');
        $image7->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-después-reforma-2');
        $image8->setTitle('Fachada después de la reforma 2');
        $image8->setAlt('Fachada después de la reforma 2');
        $image8->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-después-reforma-3');
        $image9->setTitle('Fachada después de la reforma 3');
        $image9->setAlt('Fachada después de la reforma 3');
        $image9->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/fachada-después-reforma-4');
        $image10->setTitle('Fachada después de la reforma 4');
        $image10->setAlt('Fachada después de la reforma 4');
        $image10->setGallery($this->getReference('rehabilitación-fachada-cambrils-playazul'));
        $manager->persist($image10);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
