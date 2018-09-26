<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class PisoViñedoViejoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma integral Viñedo Viejo');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
        $imagen->setFile('reforma-integral-viñedo-viejo.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('Reforma integral de vivienda con renovación total de instalaciones
            de fontanería y electricidad, así como iluminación LED, sustitución de ventanas y puertas,
            y retirada del hilo musical existente. También se han reformado los dos baños, alicatado, 
            mobiliario, sanitarios, griferia, ducha con plato de resina y mampara de cristal. Reforma
            de la cocina con alicatado nuevo, mobiliario con tirador integrado, encimera, grifería, 
            fregadero y electrodomésticos. Embaldosado con porcelánico en toda la vivienda.');
        $gallery->setProject($this->getReference('pisos'));
        $gallery->setUploaded(new \DateTime('2017-01-25'));
        
        for ($i = 1; $i <= 3; $i++) {
            $baño = new Image();
            $baño->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
            $baño->setFile('baño-' . $i . '.jpg');
            $baño->setTitle('Baño ' . $i);
            $baño->setAlt('Baño ' . $i);
            $gallery->addImage($baño);
        }

        for ($i = 1; $i <= 3; $i++) {
            $bañoDormitorio = new Image();
            $bañoDormitorio->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
            $bañoDormitorio->setFile('baño-dormitorio-' . $i . '.jpg');
            $bañoDormitorio->setTitle('Baño dormitorio ' . $i);
            $bañoDormitorio->setAlt('Baño dormitorio ' . $i);
            $gallery->addImage($bañoDormitorio);
        }

        for ($i = 1; $i <= 5; $i++) {
            $cocina = new Image();
            $cocina->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
            $cocina->setFile('cocina-' . $i . '.jpg');
            $cocina->setTitle('Cocina ' . $i);
            $cocina->setAlt('Cocina ' . $i);
            $gallery->addImage($cocina);
        }

        $image15 = new Image();
        $image15->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
        $image15->setFile('cocina-7.jpg');
        $image15->setTitle('Cocina 7');
        $image15->setAlt('Cocina 7');
        $gallery->addImage($image15);

        for ($i = 1; $i <= 6; $i++) {
            $cocina = new Image();
            $cocina->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
            $cocina->setFile('comedor-' . $i . '.jpg');
            $cocina->setTitle('Comedor ' . $i);
            $cocina->setAlt('Comedor ' . $i);
            $gallery->addImage($cocina);
        }

        $image22 = new Image();
        $image22->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
        $image22->setFile('dormitorio.jpg');
        $image22->setTitle('Dormitorio');
        $image22->setAlt('Dormitorio');
        $gallery->addImage($image22);

        $image23 = new Image();
        $image23->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
        $image23->setFile('pasillo.jpg');
        $image23->setTitle('Pasillo');
        $image23->setAlt('Pasillo');
        $gallery->addImage($image23);

        for ($i = 1; $i <= 4; $i++) {
            $habitacion = new Image();
            $habitacion->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
            $habitacion->setFile('habitacion-' . $i . '.jpg');
            $habitacion->setTitle('Habitación ' . $i);
            $habitacion->setAlt('Habitación ' . $i);
            $gallery->addImage($habitacion);
        }

        $image29 = new Image();
        $image29->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/');
        $image29->setFile('entrada.jpg');
        $image29->setTitle('Entrada');
        $image29->setAlt('Entrada');
        $gallery->addImage($image29);
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
