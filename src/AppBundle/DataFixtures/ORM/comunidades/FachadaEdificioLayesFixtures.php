<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class ComunidadCambrilsPlayazulFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Rehabilitación de fachada edificio Layes');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/');
        $imagen->setFile('rehabilitacion-fachada-edificio-layes.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('comunidades'));
        $gallery->setUploaded(new \DateTime('2013-03-03'));

        for ($i = 1; $i <= 3; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/');
            $image->setFile('antes-rehabilitacion-' . $i . '.jpg');
            $image->setTitle('Fachada antes de la rehabilitacion ' . $i);
            $image->setAlt('Fachada antes de la rehabilitacion ' . $i);
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 6; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/');
            $image->setFile('durante-rehabilitacion-' . $i . '.jpg');
            $image->setTitle('Fachada durante de la rehabilitacion ' . $i);
            $image->setAlt('Fachada durante de la rehabilitacion ' . $i);
            $gallery->addImage($image);
        }

        for ($i = 1; $i <= 4; $i++) {
            $image = new Image();
            $image->setPath('bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/');
            $image->setFile('despues-rehabilitacion-' . $i . '.jpg');
            $image->setTitle('Fachada después de la rehabilitacion ' . $i);
            $image->setAlt('Fachada después de la rehabilitacion ' . $i);
            $gallery->addImage($image);
        }

        $manager->persist($gallery);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
