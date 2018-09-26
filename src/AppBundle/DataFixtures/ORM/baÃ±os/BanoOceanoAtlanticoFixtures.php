<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoOceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Oceáno Atlántico');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $imagen->setFile('reforma-bano-oceano-atlantico.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2015-10-23'));

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image2->setFile('bano-1-despues.jpg');
        $image2->setTitle('Baño 1 después de la reforma');
        $image2->setAlt('Baño 1 después de la reforma');
        $image2->setDescription('Después');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image3->setFile('bano-1-puerta-antes.jpg');
        $image3->setTitle('Puerta del baño 1 antes de la reforma');
        $image3->setAlt('Puerta del baño 1 antes de la reforma');
        $image3->setDescription('Antes');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image4->setFile('bano-1-puerta-despues.jpg');
        $image4->setTitle('Puerta del baño 1 después de la reforma');
        $image4->setAlt('Puerta del baño 1 después de la reforma');
        $image4->setDescription('Después');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image5->setFile('bano-1-mueble-antes.jpg');
        $image5->setTitle('Mueble del baño 1 antes de la reforma');
        $image5->setAlt('Mueble del baño 1 antes de la reforma');
        $image5->setDescription('Después');
        $gallery->addImage($image5);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image5->setFile('bano-1-mueble-despues.jpg');
        $image5->setTitle('Mueble del baño 1 después de la reforma');
        $image5->setAlt('Mueble del baño 1 después de la reforma');
        $image5->setDescription('Después');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image6->setFile('bano-2-ducha-antes.jpg');
        $image6->setTitle('Ducha del baño 2 antes de la reforma');
        $image6->setAlt('Ducha del baño 2 antes de la reforma');
        $image6->setDescription('Antes');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image7->setFile('bano-2-ducha-despues.jpg');
        $image7->setTitle('Ducha de l baño 2 después de la reforma');
        $image7->setAlt('Ducha de l baño 2 después de la reforma');
        $image7->setDescription('Después');
        $gallery->addImage($image7);

        $image8 = new Image();
        $image8->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image8->setFile('bano-2-puerta.jpg');
        $image8->setTitle('Puerta del baño 2');
        $image8->setAlt('Puerta del baño 2');
        $image8->setDescription('Después');
        $gallery->addImage($image8);

        $image9 = new Image();
        $image9->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/');
        $image9->setFile('bano-2-suelo.jpg');
        $image9->setTitle('Suelo del baño 2');
        $image9->setAlt('Suelo del baño 2');
        $image9->setDescription('Después');
        $gallery->addImage($image9);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
