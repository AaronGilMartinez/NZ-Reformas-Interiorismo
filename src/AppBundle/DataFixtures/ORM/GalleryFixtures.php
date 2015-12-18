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

        $gallery1 = new Gallery();
        $gallery1->setName('Bajada del ascensor a cota cero Uncastillo');
        $gallery1->setImage('bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-0-uncastillo/bajada-ascensor-cota-0-uncastillo');
        $gallery1->setDescription('');
        $gallery1->setProject($this->getReference('comunidades'));
        $manager->persist($gallery1);


        $gallery2 = new Gallery();
        $gallery2->setName('Rehabilitación de fachadas Cambril Playazul');
        $gallery2->setImage('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitación-fachada-cambrils-playazul/rehabilitación-fachada-cambrils-playazul');
        $gallery2->setDescription('');
        $gallery2->setProject($this->getReference('comunidades'));
        $manager->persist($gallery2);


        $gallery3 = new Gallery();
        $gallery3->setName('Reparación de patio Colegio Salesianos');
        $gallery3->setImage('bundles/app/images/proyectos/reformas-de-comunidades/reparación-patio-colegio-salesianos/reparación-patio-colegio-salesianos');
        $gallery3->setDescription('');
        $gallery3->setProject($this->getReference('comunidades'));
        $manager->persist($gallery3);


        $gallery4 = new Gallery();
        $gallery4->setName('Reforma integral Maria Lostal');
        $gallery4->setImage('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maría-lostal/reforma-integral-maría-lostal');
        $gallery4->setDescription('');
        $gallery4->setProject($this->getReference('pisos'));
        $manager->persist($gallery4);

        $gallery5 = new Gallery();
        $gallery5->setName('Reforma de baño Anselmo Clavé');
        $gallery5->setImage('bundles/app/images/proyectos/reformas-de-baños/reforma-baño-anselmo-clavé/reforma-baño-anselmo-clavé');
        $gallery5->setDescription('');
        $gallery5->setProject($this->getReference('baños'));
        $manager->persist($gallery5);


        $gallery6 = new Gallery();
        $gallery6->setName('Reforma de cocina Anselmo Clavé');
        $gallery6->setImage('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clavé/reforma-cocina-anselmo-clavé');
        $gallery6->setDescription('');
        $gallery6->setProject($this->getReference('cocinas'));
        $manager->persist($gallery6);

        $gallery7 = new Gallery();
        $gallery7->setName('Reforma integral Océano Atlántico');
        $gallery7->setImage('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/reforma-integral-océano-atlántico');
        $gallery7->setDescription('');
        $gallery7->setProject($this->getReference('pisos'));
        $manager->persist($gallery7);

        $gallery8 = new Gallery();
        $gallery8->setName('Reforma de suelo y puertas Juan Carlos I');
        $gallery8->setImage('bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/reforma-suelo-puertas-juan-carlos-i');
        $gallery8->setDescription('');
        $gallery8->setProject($this->getReference('pisos'));
        $manager->persist($gallery8);

        $manager->flush();

        $this->addReference("bajada-ascensor-cota-0-uncastillo", $gallery1);
        $this->addReference("rehabilitación-fachada-cambrils-playazul", $gallery2);
        $this->addReference("reparación-patio-colegio-salesianos", $gallery3);
        $this->addReference("reforma-integral-maría-lostal", $gallery4);
        $this->addReference("reforma-baño-anselmo-clavé", $gallery5);
        $this->addReference("reforma-cocina-anselmo-clavé", $gallery6);
        $this->addReference("reforma-integral-océano-atlántico", $gallery7);
        $this->addReference("reforma-suelo-puertas-juan-carlos-i", $gallery8);
    }

    public function getOrder() {
        return 2;
    }

}
