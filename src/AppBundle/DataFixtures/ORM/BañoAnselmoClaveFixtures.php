<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class BañoAnselmoClaveFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
                
        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-antes-1');
        $image1->setTitle('Otra escalera izquierda después de la reforma');
        $image1->setAlt('Otra escalera izquierda después de la reforma');
        $image1->setDescription('Ascensor accesible para todo el mundo');
        $image1->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-antes-2');
        $image2->setTitle('Bajada ascensor a cota 0');
        $image2->setAlt('Bajada ascensor a cota 0');
        $image2->setDescription('Rellano del ascensor al cual da la rampa');
        $image2->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-despues-1');
        $image3->setTitle('Bajada de otro ascensor a cota 0');
        $image3->setAlt('Bajada de otro ascensor a cota 0');
        $image3->setDescription('Otro de los rellanos con ascensor');
        $image3->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-despues-2');
        $image4->setTitle('Fachada despues de rehabilitación');
        $image4->setAlt('Fachada despues de rehabilitación');
        $image4->setDescription('Escalera antes de la reforma');
        $image4->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-despues-3');
        $image5->setTitle('Fachada despues de rehabilitación');
        $image5->setAlt('Fachada despues de rehabilitación');
        $image5->setDescription('Se retiró parte de la escalera y se instaló una rampa');
        $image5->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/baño-despues-4');
        $image6->setTitle('Fachada después de rehabilitación');
        $image6->setAlt('Fachada después de rehabilitación');
        $image6->setDescription('Otro portal con escalera antes de la reforma');
        $image6->setGallery($this->getReference('baño-anselmo-clave'));
        $manager->persist($image6);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
