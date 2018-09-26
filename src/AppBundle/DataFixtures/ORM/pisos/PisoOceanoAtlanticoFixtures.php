<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoOceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma integral Océano Atlántico');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $imagen->setFile('reforma-integral-oceano-atlantico.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2015-10-23'));

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('entrada-' . $i . '-antes.jpg');
            $imagen->setTitle('Entrada antes de la reforma ' . $i);
            $imagen->setAlt('Entrada antes de la reforma  ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('entrada-' . $i . '-despues.jpg');
            $imagen->setTitle('Entrada después de la reforma ' . $i);
            $imagen->setAlt('Entrada después de la reforma  ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image5->setFile('pasillo-antes.jpg');
        $image5->setTitle('Pasillo antes de la reforma');
        $image5->setAlt('Pasillo antes de la reforma');
        $image5->setDescription('Antes');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image6->setFile('pasillo-despues.jpg');
        $image6->setTitle('Pasillo después de la reforma');
        $image6->setAlt('Pasillo después de la reforma');
        $image6->setDescription('Después');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image7->setFile('salon-antes.jpg');
        $image7->setTitle('Salón antes de la reforma');
        $image7->setAlt('Salón antes de la reforma');
        $image7->setDescription('Antes');
        $gallery->addImage($image7);

        $image8 = new Image();
        $image8->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image8->setFile('salon-despues.jpg');
        $image8->setTitle('Salón después de la reforma');
        $image8->setAlt('Salón después de la reforma');
        $image8->setDescription('Después');
        $gallery->addImage($image8);

        $image9 = new Image();
        $image9->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image9->setFile('armario-antes.jpg');
        $image9->setTitle('Armario antes de la reforma');
        $image9->setAlt('Armario antes de la reforma');
        $image9->setDescription('Antes');
        $gallery->addImage($image9);

        $image10 = new Image();
        $image10->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image10->setFile('armario-despues.jpg');
        $image10->setTitle('Armario después de la reforma');
        $image10->setAlt('Armario después de la reforma');
        $image10->setDescription('Después');
        $gallery->addImage($image10);

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('entrada-' . $i . '-antes.jpg');
            $imagen->setTitle('Entrada antes de la reforma ' . $i);
            $imagen->setAlt('Entrada antes de la reforma  ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('entrada-' . $i . '-despues.jpg');
            $imagen->setTitle('Entrada después de la reforma ' . $i);
            $imagen->setAlt('Entrada después de la reforma ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }
        
        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('habitacion-' . $i . '-antes.jpg');
            $imagen->setTitle('Habitación antes de la reforma ' . $i);
            $imagen->setAlt('Habitación antes de la reforma  ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('habitacion-' . $i . '-despues.jpg');
            $imagen->setTitle('Habitación después de la reforma ' . $i);
            $imagen->setAlt('Habitación después de la reforma ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }


        for ($i = 1; $i <= 3; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('cocina-' . $i . '-antes.jpg');
            $imagen->setTitle('Cocina antes de la reforma ' . $i);
            $imagen->setAlt('Cocina antes de la reforma  ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 7; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('cocina-' . $i . '-despues.jpg');
            $imagen->setTitle('Cocina después de la reforma ' . $i);
            $imagen->setAlt('Cocina después de la reforma ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('dormitorio-' . $i . '-antes.jpg');
            $imagen->setTitle('Dormitorio antes de la reforma ' . $i);
            $imagen->setAlt('Dormitorio antes de la reforma  ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('dormitorio-' . $i . '-despues.jpg');
            $imagen->setTitle('Dormitorio después de la reforma ' . $i);
            $imagen->setAlt('Dormitorio después de la reforma ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('bano-' . $i . 'p-antes.jpg');
            $imagen->setTitle('Baño antes de la reforma, desde pasillo ' . $i);
            $imagen->setAlt('Baño antes de la reforma, desde pasillo ' . $i);
            $imagen->setDescription('Antes');
            $gallery->addImage($imagen);
        }

        for ($i = 1; $i <= 2; $i++) {
            $imagen = new Image();
            $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
            $imagen->setFile('bano-' . $i . 'p-despues.jpg');
            $imagen->setTitle('Baño después de la reforma, desde pasillo ' . $i);
            $imagen->setAlt('Baño después de la reforma, desde pasillo ' . $i);
            $imagen->setDescription('Después');
            $gallery->addImage($imagen);
        }

        $image27 = new Image();
        $image27->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image27->setFile('bano-2i-antes.jpg');
        $image27->setTitle('Baño antes de la reforma, desde izquierda 2');
        $image27->setAlt('Baño antes de la reforma, desde izquierda 2');
        $image27->setDescription('Antes');
        $gallery->addImage($image27);

        $image28 = new Image();
        $image28->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image28->setFile('bano-2i-despues.jpg');
        $image28->setTitle('Baño después de la reforma, desde izquierda 2');
        $image28->setAlt('Baño después de la reforma, desde izquierda 2');
        $image28->setDescription('Después');
        $gallery->addImage($image28);
        
        $image31 = new Image();
        $image31->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/');
        $image31->setFile('bano-2d-despues.jpg');
        $image31->setTitle('Baño después de la reforma, desde derecha 2');
        $image31->setAlt('Baño después de la reforma, desde derecha 2');
        $image31->setDescription('Después');
        $gallery->addImage($image31);
                
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
