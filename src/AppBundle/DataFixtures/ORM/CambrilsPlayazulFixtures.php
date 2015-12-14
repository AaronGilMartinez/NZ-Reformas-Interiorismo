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
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-1');
        $image1->setTitle('Fachada despues de rehabilitación');
        $image1->setAlt('Fachada despues de rehabilitación');
        $image1->setDescription('Escalera antes de la reforma');
        $image1->setGallery($this->getReference('playazul'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-2');
        $image2->setTitle('Fachada despues de rehabilitación');
        $image2->setAlt('Fachada despues de rehabilitación');
        $image2->setDescription('Se retiró parte de la escalera y se instaló una rampa');
        $image2->setGallery($this->getReference('playazul'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-3');
        $image3->setTitle('Fachada después de rehabilitación');
        $image3->setAlt('Fachada después de rehabilitación');
        $image3->setDescription('Otro portal con escalera antes de la reforma');
        $image3->setGallery($this->getReference('playazul'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-4');
        $image4->setTitle('Fachada después de rehabilitación');
        $image4->setAlt('Fachada después de rehabilitación');
        $image4->setDescription('Con estas rampas facilitan el acceso al ascensor con pocos cambios');
        $image4->setGallery($this->getReference('playazul'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-5');
        $image5->setTitle('Fachada después de rehabilitación');
        $image5->setAlt('Fachada después de rehabilitación');
        $image5->setDescription('Solo se reemplazó el primer tramo de escalera, que daba al rellano del ascensor');
        $image5->setGallery($this->getReference('playazul'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-antes-reforma-6');
        $image6->setTitle('Fachada después de rehabilitación');
        $image6->setAlt('Fachada después de rehabilitación');
        $image6->setDescription('La reforma se realizó en dos portales del mismo bloque aplicando la misma solución');
        $image6->setGallery($this->getReference('playazul'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-despues-reforma-1');
        $image7->setTitle('Fachada después de rehabilitación');
        $image7->setAlt('Fachada después de rehabilitación');
        $image7->setDescription('Cada portal esta formado por dos escaleras');
        $image7->setGallery($this->getReference('playazul'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-despues-reforma-2');
        $image8->setTitle('Fachada después de rehabilitación');
        $image8->setAlt('Fachada después de rehabilitación');
        $image8->setDescription('Ascensor accesible para todo el mundo');
        $image8->setGallery($this->getReference('playazul'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-despues-reforma-3');
        $image9->setTitle('Fachada después de rehabilitación');
        $image9->setAlt('Fachada después de rehabilitación');
        $image9->setDescription('Rellano del ascensor al cual da la rampa');
        $image9->setGallery($this->getReference('playazul'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/fachada-despues-reforma-4');
        $image10->setTitle('Fachada después de rehabilitación');
        $image10->setAlt('Fachada después de rehabilitación');
        $image10->setDescription('Otro de los rellanos con ascensor');
        $image10->setGallery($this->getReference('playazul'));
        $manager->persist($image10);
        
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
