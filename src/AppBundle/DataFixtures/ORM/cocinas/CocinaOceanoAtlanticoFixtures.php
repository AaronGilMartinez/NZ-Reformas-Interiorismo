<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaOceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Oceáno Atlántico');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $imagen->setFile('reforma-cocina-oceano-atlantico.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2015-10-23'));
        
        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image1->setFile('cocina.jpg');
        $image1->setTitle('Cocina');
        $image1->setAlt('Cocina');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image2->setFile('campana.jpg');
        $image2->setTitle('Campana extractora');
        $image2->setAlt('Campana extractora');
        $gallery->addImage($image2);
        
        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image3->setFile('encimera-muebles.jpg');
        $image3->setTitle('Encimera y muebles');
        $image3->setAlt('Encimera y muebles');
        $gallery->addImage($image3);
        
        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image4->setFile('encimera.jpg');
        $image4->setTitle('Encimera');
        $image4->setAlt('Encimera');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image5->setFile('esquinero.jpg');
        $image5->setTitle('Esquinero');
        $image5->setAlt('Esquinero');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image6->setFile('esquinero-extraible.jpg');
        $image6->setTitle('Esquinero extraible');
        $image6->setAlt('Esquinero extraible');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image7->setFile('estanteria.jpg');
        $image7->setTitle('Estantería');
        $image7->setAlt('Estantería');
        $gallery->addImage($image7);

        $image8 = new Image();
        $image8->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image8->setFile('grifo.jpg');
        $image8->setTitle('Grifo');
        $image8->setAlt('Grifo');
        $gallery->addImage($image8);

        $image9 = new Image();
        $image9->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image9->setFile('grifo-2.jpg');
        $image9->setTitle('Grifo 2');
        $image9->setAlt('Grifo 2');
        $gallery->addImage($image9);

        $image11 = new Image();
        $image11->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image11->setFile('mesa.jpg');
        $image11->setTitle('Mesa');
        $image11->setAlt('Mesa');
        $gallery->addImage($image11);

        $image12 = new Image();
        $image12->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image12->setFile('mobiliario-electrodomesticos.jpg');
        $image12->setTitle('Mobiliario y electrodomésticos');
        $image12->setAlt('Mobiliario y electrodomésticos');
        $gallery->addImage($image12);

        $image13 = new Image();
        $image13->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image13->setFile('mucha-luz.jpg');
        $image13->setTitle('La cocina tiene mucha luz');
        $image13->setAlt('La cocina tiene mucha luz');
        $gallery->addImage($image13);

        $image14 = new Image();
        $image14->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image14->setFile('muebles-cerrados.jpg');
        $image14->setTitle('Mobiliario cerrado');
        $image14->setAlt('Mobiliario cerrado');
        $gallery->addImage($image14);

        $image15 = new Image();
        $image15->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/');
        $image15->setFile('muebles-abiertos.jpg');
        $image15->setTitle('Mobiliario abierto');
        $image15->setAlt('Mobiliario abierto');
        $gallery->addImage($image15);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
