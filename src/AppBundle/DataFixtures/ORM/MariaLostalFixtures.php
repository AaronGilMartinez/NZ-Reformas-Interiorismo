<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class MariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/baño-1');
        $image1->setTitle('Escalera derecha antes de la reforma');
        $image1->setAlt('Escalera derecha antes de la reforma');
        $image1->setDescription('Escalera antes de la reforma');
        $image1->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/baño-2');
        $image2->setTitle('Escalera derecha después de la reforma');
        $image2->setAlt('Escalera derecha después de la reforma');
        $image2->setDescription('Se retiró parte de la escalera y se instaló una rampa');
        $image2->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/baño-3');
        $image3->setTitle('Otra escalera derecha antes de la reforma');
        $image3->setAlt('Otra escalera derecha antes de la reforma');
        $image3->setDescription('Otro portal con escalera antes de la reforma');
        $image3->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-1');
        $image4->setTitle('Otra escalera derecha después de la reforma');
        $image4->setAlt('Otra escalera derecha después de la reforma');
        $image4->setDescription('Con estas rampas facilitan el acceso al ascensor con pocos cambios');
        $image4->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-2');
        $image5->setTitle('Escalera izquierda antes de la reforma');
        $image5->setAlt('Escalera izquierda antes de la reforma');
        $image5->setDescription('Solo se reemplazó el primer tramo de escalera, que daba al rellano del ascensor');
        $image5->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-3');
        $image6->setTitle('Escalera izquierda después de la reforma');
        $image6->setAlt('Escalera izquierda después de la reforma');
        $image6->setDescription('La reforma se realizó en dos portales del mismo bloque aplicando la misma solución');
        $image6->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image6);
        
        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/cocina-4');
        $image7->setTitle('Otra escalera izquierda antes de la reforma');
        $image7->setAlt('Otra escalera izquierda antes de la reforma');
        $image7->setDescription('Cada portal esta formado por dos escaleras');
        $image7->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/despacho-1');
        $image8->setTitle('Otra escalera izquierda después de la reforma');
        $image8->setAlt('Otra escalera izquierda después de la reforma');
        $image8->setDescription('Ascensor accesible para todo el mundo');
        $image8->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/despacho-2');
        $image9->setTitle('Bajada ascensor a cota 0');
        $image9->setAlt('Bajada ascensor a cota 0');
        $image9->setDescription('Rellano del ascensor al cual da la rampa');
        $image9->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/dormitorio-1');
        $image10->setTitle('Bajada de otro ascensor a cota 0');
        $image10->setAlt('Bajada de otro ascensor a cota 0');
        $image10->setDescription('Otro de los rellanos con ascensor');
        $image10->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image10);
        
        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/dormitorio-2');
        $image11->setTitle('Fachada despues de rehabilitación');
        $image11->setAlt('Fachada despues de rehabilitación');
        $image11->setDescription('Escalera antes de la reforma');
        $image11->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-1');
        $image12->setTitle('Fachada despues de rehabilitación');
        $image12->setAlt('Fachada despues de rehabilitación');
        $image12->setDescription('Se retiró parte de la escalera y se instaló una rampa');
        $image12->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-2');
        $image13->setTitle('Fachada después de rehabilitación');
        $image13->setAlt('Fachada después de rehabilitación');
        $image13->setDescription('Otro portal con escalera antes de la reforma');
        $image13->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-3');
        $image14->setTitle('Fachada después de rehabilitación');
        $image14->setAlt('Fachada después de rehabilitación');
        $image14->setDescription('Con estas rampas facilitan el acceso al ascensor con pocos cambios');
        $image14->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-4');
        $image15->setTitle('Fachada después de rehabilitación');
        $image15->setAlt('Fachada después de rehabilitación');
        $image15->setDescription('Solo se reemplazó el primer tramo de escalera, que daba al rellano del ascensor');
        $image15->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image15);

        $image16 = new Image();
        $image16->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/salon-5');
        $image16->setTitle('Fachada después de rehabilitación');
        $image16->setAlt('Fachada después de rehabilitación');
        $image16->setDescription('La reforma se realizó en dos portales del mismo bloque aplicando la misma solución');
        $image16->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image16);

        $image17 = new Image();
        $image17->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/vestidor');
        $image17->setTitle('Fachada después de rehabilitación');
        $image17->setAlt('Fachada después de rehabilitación');
        $image17->setDescription('Cada portal esta formado por dos escaleras');
        $image17->setGallery($this->getReference('reforma-integral-maria-lostal'));
        $manager->persist($image17);
        
        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}
