<?php

// src/BlogBundle/DataFixtures/ORM/GalleryFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Gallery;

class GalleryFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        /* Reformas de comunidades */
        
        $gallery1 = new Gallery();
        $gallery1->setName('Bajada del ascensor a cota cero Uncastillo');
        $gallery1->setTitle('Accesibilidad');
        $gallery1->setImage('bundles/app/images/proyectos/reformas-de-comunidades/bajada-del-ascensor-a-cota-cero/bajada-del-ascensor-a-cota-cero');
        $gallery1->setDescription('bajada-del-ascensor-a-cota-cero, sectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery1->setProject($this->getReference('comunidades'));

        $gallery2 = new Gallery();
        $gallery2->setName('Rehabilitación de fachadas Cambril Playazul');
        $gallery2->setTitle('Reparaciones');
        $gallery2->setImage('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-de-fachadas/rehabilitacion-de-fachadas');
        $gallery2->setDescription('Rehabilitación de fachadas, consectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery2->setProject($this->getReference('comunidades'));

        $gallery3 = new Gallery();
        $gallery3->setName('Reparación de patios Salesianos');
        $gallery3->setTitle('Reparaciones');
        $gallery3->setImage('bundles/app/images/proyectos/reformas-de-comunidades/reparacion-de-patios/reparacion-de-patios');
        $gallery3->setDescription('Reparación de patios, consectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery3->setProject($this->getReference('comunidades'));
        
        /* Reformas de pisos */
        
        $gallery4 = new Gallery();
        $gallery4->setName('Reforma integral Maria Lostal');
        $gallery4->setTitle('Reforma de piso integral');
        $gallery4->setImage('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral/reforma-integral');
        $gallery4->setDescription('Reforma integral, consectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery4->setProject($this->getReference('pisos'));
        
        /* Reformas de baños */
        
        $gallery5 = new Gallery();
        $gallery5->setName('Reforma de baño Anselmo Clavé');
        $gallery5->setTitle('Reforma de baño');
        $gallery5->setImage('bundles/app/images/proyectos/reformas-de-baños/reforma-de-baño/reforma-de-baño');
        $gallery5->setDescription('Reforma de baño, consectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery5->setProject($this->getReference('baños'));
        
        /* Reformas de cocinas */
        
        $gallery6 = new Gallery();
        $gallery6->setName('Reforma de cocina Anselmo Clavé');
        $gallery6->setTitle('Reforma de cocina');
        $gallery6->setImage('bundles/app/images/proyectos/reformas-de-cocinas/reforma-de-cocina/reforma-de-cocina');
        $gallery6->setDescription('Reforma de cocina, consectetur adipiscing elit. Fusce '
                . 'ut mollis magna. Vivamus et ante leo. Cras lacus justo, interdum accumsan mi sed,'
                . ' tempus facilisis mauris. Praesent sit amet sapien aliquam, dictum ante at, '
                . 'lobortis justo.');
        $gallery6->setProject($this->getReference('cocinas'));
        
        $manager->persist($gallery1);
        $manager->persist($gallery2);
        $manager->persist($gallery3);
        $manager->persist($gallery4);
        $manager->persist($gallery5);
        $manager->persist($gallery6);

        $manager->flush();

        $this->addReference("uncastillo", $gallery1);
        $this->addReference("playazul", $gallery2);
        $this->addReference("salesianos", $gallery3);
        $this->addReference("reforma-integral-maria-lostal", $gallery4);
        $this->addReference("baño-anselmo-clave", $gallery5);
        $this->addReference("cocina-anselmo-clave", $gallery6);
    }

    public function getOrder() {
        return 2;
    }

}
