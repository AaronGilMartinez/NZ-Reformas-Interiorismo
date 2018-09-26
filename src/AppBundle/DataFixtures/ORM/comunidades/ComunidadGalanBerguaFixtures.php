<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class ComunidadGalanBerguaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de patio Galán Bergua');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $imagen->setFile('reforma-patio-galan-bergua.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('comunidades'));
        $manager->persist($gallery);
        $gallery->setUploaded(new \DateTime('2015-03-03'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image1->setFile('frente-portal.jpg');
        $image1->setTitle('Portal del patio');
        $image1->setAlt('Portal del patio');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image2->setFile('escalera-a.jpg');
        $image2->setTitle('Escalera izquierda');
        $image2->setAlt('Escalera izquierda');
        $gallery->addImage($image2);
        
        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image3->setFile('escalera-b.jpg');
        $image3->setTitle('Escalera derecha');
        $image3->setAlt('Escalera derecha');
        $gallery->addImage($image3);
        
        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image4->setFile('rampa-entrada.jpg');
        $image4->setTitle('Rampa del portal');
        $image4->setAlt('Rampa del portal');
        $gallery->addImage($image4);
        
        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image5->setFile('rampa-1.jpg');
        $image5->setTitle('Rampa del patio 1');
        $image5->setAlt('Rampa del patio 1');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image6->setFile('rampa-2.jpg');
        $image6->setTitle('Rampa del patio 2');
        $image6->setAlt('Rampa del patio 2');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/');
        $image7->setFile('rampa-3.jpg');
        $image7->setTitle('Rampa del patio 3');
        $image7->setAlt('Rampa del patio 3');
        $gallery->addImage($image7);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
