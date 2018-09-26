<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaCondesAragonFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Condes de Aragón');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/');
        $imagen->setFile('cocina-condes-de-aragon.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setDescription('Reforma de cocina con cerramiento al comedor. Se trata de una reforma'
                . ' dónde se ha respetado el alicatado original hasta media altura y se ha pintado '
                . 'el resto de paramentos. También se ha instalado un suelo vinílico con propiedades'
                . ' hidrófugas con acabado en roble. En cuanto a los muebles se ha elegido una '
                . 'combinación en tonos mate claros a juego con el resto de conjunto. Lo más llamativo'
                . 'de esta reforma es la apertura del hueco en la pared que comunica cocina y salón,'
                . ' en la que posteriormente se ha colocado un cerramiento de forja con fijos de cristal.');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-11-28'));

        for ($i = 1; $i <= 5; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/');
            $baño1->setFile('cocina-condes-de-aragon-antes-' . $i . '.jpg');
            $baño1->setTitle('Cocina antes de la reforma ' . $i);
            $baño1->setAlt('Cocina antes de la reforma ' . $i);
            $gallery->addImage($baño1);
        }

        for ($i = 1; $i <= 14; $i++) {
            $baño1 = new Image();
            $baño1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/');
            $baño1->setFile('cocina-condes-de-aragon-despues-' . $i . '.jpg');
            $baño1->setTitle('Cocina antes de la reforma ' . $i);
            $baño1->setAlt('Cocina antes de la reforma ' . $i);
            $gallery->addImage($baño1);
        }

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
