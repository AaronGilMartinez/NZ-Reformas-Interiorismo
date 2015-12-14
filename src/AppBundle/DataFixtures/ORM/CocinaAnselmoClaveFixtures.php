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
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-antes-1');
        $image1->setTitle('Otra escalera derecha después de la reforma');
        $image1->setAlt('Otra escalera derecha después de la reforma');
        $image1->setDescription('Con estas rampas facilitan el acceso al ascensor con pocos cambios');
        $image1->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-antes-2');
        $image2->setTitle('Escalera izquierda antes de la reforma');
        $image2->setAlt('Escalera izquierda antes de la reforma');
        $image2->setDescription('Solo se reemplazó el primer tramo de escalera, que daba al rellano del ascensor');
        $image2->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-antes-3');
        $image3->setTitle('Escalera izquierda después de la reforma');
        $image3->setAlt('Escalera izquierda después de la reforma');
        $image3->setDescription('La reforma se realizó en dos portales del mismo bloque aplicando la misma solución');
        $image3->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-antes-4');
        $image4->setTitle('Otra escalera izquierda antes de la reforma');
        $image4->setAlt('Otra escalera izquierda antes de la reforma');
        $image4->setDescription('Cada portal esta formado por dos escaleras');
        $image4->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-despues-1');
        $image5->setTitle('Otra escalera izquierda después de la reforma');
        $image5->setAlt('Otra escalera izquierda después de la reforma');
        $image5->setDescription('Ascensor accesible para todo el mundo');
        $image5->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-despues-2');
        $image6->setTitle('Bajada ascensor a cota 0');
        $image6->setAlt('Bajada ascensor a cota 0');
        $image6->setDescription('Rellano del ascensor al cual da la rampa');
        $image6->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-despues-3');
        $image7->setTitle('Bajada de otro ascensor a cota 0');
        $image7->setAlt('Bajada de otro ascensor a cota 0');
        $image7->setDescription('Otro de los rellanos con ascensor');
        $image7->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image7);
        
        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-despues-4');
        $image8->setTitle('Bajada de otro ascensor a cota 0');
        $image8->setAlt('Bajada de otro ascensor a cota 0');
        $image8->setDescription('Otro de los rellanos con ascensor');
        $image8->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image8);
        
        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/cocina-despues-5');
        $image9->setTitle('Bajada de otro ascensor a cota 0');
        $image9->setAlt('Bajada de otro ascensor a cota 0');
        $image9->setDescription('Otro de los rellanos con ascensor');
        $image9->setGallery($this->getReference('cocina-anselmo-clave'));
        $manager->persist($image9);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
