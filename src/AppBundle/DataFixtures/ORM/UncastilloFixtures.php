<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class UncastilloFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/escalera-derecha-antes');
        $image1->setTitle('Escalera derecha antes de la reforma');
        $image1->setAlt('Escalera derecha antes de la reforma');
        $image1->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/escalera-derecha-despues');
        $image2->setTitle('Escalera derecha después de la reforma');
        $image2->setAlt('Escalera derecha después de la reforma');
        $image2->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/escalera-izquierda-antes');
        $image3->setTitle('Escalera izquierda antes de la reforma');
        $image3->setAlt('Escalera izquierda antes de la reforma');
        $image3->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/escalera-izquierda-despues');
        $image4->setTitle('Escalera izquieda después de la reforma');
        $image4->setAlt('Escalera izquieda después de la reforma');
        $image4->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/rellano-izquierda-antes');
        $image5->setTitle('Rellano izquierda antes de la reforma');
        $image5->setAlt('Rellano izquierda antes de la reforma');
        $image5->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/rellano-izquierda-despues');
        $image6->setTitle('Rellano izquierda después de la reforma');
        $image6->setAlt('Rellano izquierda después de la reforma');
        $image6->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image6);
        
        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/rellano-derecha-antes');
        $image7->setTitle('Rellano derecha antes de la reforma');
        $image7->setAlt('Rellano derecha antes de la reforma');
        $image7->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/rellano-derecha-despues');
        $image8->setTitle('Rellano derecha después de la reforma');
        $image8->setAlt('Rellano derecha después de la reforma');
        $image8->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/ascensor-derecha');
        $image9->setTitle('Bajada ascensor derecha a cota 0');
        $image9->setAlt('Bajada ascensor derecha a cota 0');
        $image9->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/ascensor-izquierda');
        $image10->setTitle('Bajada ascensor izquierda a cota 0');
        $image10->setAlt('Bajada ascensor izquierda a cota 0');
        $image10->setGallery($this->getReference('bajada-ascensor-cota-0-uncastillo'));
        $manager->persist($image10);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
