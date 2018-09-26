<?php

// src/BlogBundle/DataFixtures/ORM/GalleryFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class RuisenoresFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma integral en paseo Ruiseñores');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/');
        $imagen->setFile('reforma-integral-ruiseñores.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('Reforma integral de piso dónde prácticamentese ha renovado todo.'
                . ' Cambio de distribución con renovación de instalaciones e iluminación, sustitución'
                . ' de ventanas por nuevas de aluminio motorizadas y aislamiento termico en el '
                . 'perímetro. También se han renovado al completo los dos baños y la cocina. Además '
                . 'se han alisado y pintado paredes y techo, cambiado de puertas, y colocado un '
                . 'suelo de madera de roble de gran formato. Por último en toda la casa se han '
                . 'colocado armarios empotrados a medida. ');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2017-03-17'));

        for ($i = 1; $i <= 2; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/');
            $baño1->setFile('baño-1_' . $i . '.jpg');
            $baño1->setTitle('Reforma baño 1 en ruiseñores - ' . $i);
            $baño1->setAlt('Reforma baño 1 en ruiseñores - ' . $i);
            $gallery->addImage($baño1);
        }

        for ($j = 1; $j <= 2; $j++) {
            $baño2 = new Image();
            $baño2->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/');
            $baño2->setFile('baño-2_' . $j . '.jpg');
            $baño2->setTitle('Reforma baño 2 en ruiseñores - ' . $j);
            $baño2->setAlt('Reforma baño 2 en ruiseñores - ' . $j);
            $gallery->addImage($baño2);
        }

        for ($k = 1; $k <= 9; $k++) {
            $cocina = new Image();
            $cocina->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/');
            $cocina->setFile('cocina_' . $k . '.jpg');
            $cocina->setTitle('Reforma cocina en ruiseñores - ' . $k);
            $cocina->setAlt('Reforma cocina en ruiseñores - ' . $k);
            $gallery->addImage($cocina);
        }

        for ($z = 0; $z <= 22; $z++) {
            $reforma = new Image();
            $reforma->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/');
            $reforma->setFile('reforma-ruiseñores_' . $z . '.jpg');
            $reforma->setTitle('Reforma integral en ruiseñores - ' . $z);
            $reforma->setAlt('Reforma integral en ruiseñores - ' . $z);
            $gallery->addImage($reforma);
        }
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
