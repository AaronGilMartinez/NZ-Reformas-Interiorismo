<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class ComunidadUncastilloFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $gallery = new Gallery();
        $gallery->setName('Bajada del ascensor a cota cero Uncastillo');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $imagen->setFile('bajada-ascensor-cota-cero-uncastillo.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('comunidades'));
        $gallery->setUploaded(new \DateTime('2014-03-03'));
        
        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image1->setFile('escalera-derecha-antes.jpg');
        $image1->setTitle('Escalera derecha antes de la reforma');
        $image1->setAlt('Escalera derecha antes de la reforma');
        $image1->setDescription('Antes');
        $gallery->AddImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image2->setFile('escalera-derecha-despues.jpg');
        $image2->setTitle('Escalera derecha después de la reforma');
        $image2->setAlt('Escalera derecha después de la reforma');
        $image2->setDescription('Después');
        $gallery->AddImage($image2);
        

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image3->setFile('escalera-izquierda-antes.jpg');
        $image3->setTitle('Escalera izquierda antes de la reforma');
        $image3->setAlt('Escalera izquierda antes de la reforma');
        $image3->setDescription('Antes');
        $gallery->AddImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image4->setFile('escalera-izquierda-despues.jpg');
        $image4->setTitle('Escalera izquieda después de la reforma');
        $image4->setAlt('Escalera izquieda después de la reforma');
        $image4->setDescription('Después');
        $gallery->AddImage($image4);
        
        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image5->setFile('rellano-izquierda-antes.jpg');
        $image5->setTitle('Rellano izquierda antes de la reforma');
        $image5->setAlt('Rellano izquierda antes de la reforma');
        $image5->setDescription('Antes');
        $gallery->AddImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image6->setFile('rellano-izquierda-despues.jpg');
        $image6->setTitle('Rellano izquierda después de la reforma');
        $image6->setAlt('Rellano izquierda después de la reforma');
        $image6->setDescription('Después');
        $gallery->AddImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image7->setFile('rellano-derecha-antes.jpg');
        $image7->setTitle('Rellano derecha antes de la reforma');
        $image7->setAlt('Rellano derecha antes de la reforma');
        $image7->setDescription('Antes');
        $gallery->AddImage($image7);

        $image8 = new Image();
        $image8->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image8->setFile('rellano-derecha-despues.jpg');
        $image8->setTitle('Rellano derecha después de la reforma');
        $image8->setAlt('Rellano derecha después de la reforma');
        $image8->setDescription('Después');
        $gallery->AddImage($image8);

        $image9 = new Image();
        $image9->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image9->setFile('ascensor-derecha.jpg');
        $image9->setTitle('Bajada ascensor derecha a cota 0');
        $image9->setAlt('Bajada ascensor derecha a cota 0');
        $gallery->AddImage($image9);

        $image10 = new Image();
        $image10->setPath('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/');
        $image10->setFile('ascensor-izquierda.jpg');
        $image10->setTitle('Bajada ascensor izquierda a cota 0');
        $image10->setAlt('Bajada ascensor izquierda a cota 0');
        $gallery->AddImage($image10);

        $manager->persist($gallery);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
