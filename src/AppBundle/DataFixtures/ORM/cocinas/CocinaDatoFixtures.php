<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CocinaDatoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de cocina Dato');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $imagen->setFile('reforma-cocina-dato.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('cocinas'));
        $gallery->setUploaded(new \DateTime('2016-03-21'));
        
        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image1->setFile('1-cristalera.jpg');
        $image1->setTitle('Cristalera');
        $image1->setAlt('Cristalera');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image2->setFile('1-cristalera-fuera.jpg');
        $image2->setTitle('Cristalera fuera');
        $image2->setAlt('Cristalera fuera');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image3->setFile('2-horno-micro.jpg');
        $image3->setTitle('Horno y micro');
        $image3->setAlt('Horno y micro');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image4->setFile('3-isla.jpg');
        $image4->setTitle('Isla');
        $image4->setAlt('Isla');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image5->setFile('3-zoom-isla.jpg');
        $image5->setTitle('Zoom isla');
        $image5->setAlt('Zoom isla');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image6->setFile('4-lateral.jpg');
        $image6->setTitle('Lateral cocina');
        $image6->setAlt('Lateral cocina');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image7->setFile('5-cajones-cerrados.jpg');
        $image7->setTitle('Cajones cerrados');
        $image7->setAlt('Cajones cerrados');
        $gallery->addImage($image7);

        $image8 = new Image();
        $image8->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image8->setFile('6-cajones-isla.jpg');
        $image8->setTitle('Cajones de la isla');
        $image8->setAlt('Cajones de la isla');
        $gallery->addImage($image8);

        $image9 = new Image();
        $image9->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image9->setFile('7-cajones-vitro.jpg');
        $image9->setTitle('Cajones bajo la vitrocerámica');
        $image9->setAlt('Cajones bajo la vitrocerámica');
        $gallery->addImage($image9);

        $image11 = new Image();
        $image11->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image11->setFile('8-estanteria.jpg');
        $image11->setTitle('Estantería');
        $image11->setAlt('Estantería');
        $gallery->addImage($image11);

        $image12 = new Image();
        $image12->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image12->setFile('9-led.jpg');
        $image12->setTitle('Luz led');
        $image12->setAlt('Luz led');
        $gallery->addImage($image12);

        $image13 = new Image();
        $image13->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image13->setFile('10-campana-horno-micro.jpg');
        $image13->setTitle('Conjunto campana horno y micro');
        $image13->setAlt('Conjunto campana horno y micro');
        $gallery->addImage($image13);

        $image14 = new Image();
        $image14->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image14->setFile('11-campana.jpg');
        $image14->setTitle('Campana');
        $image14->setAlt('Campana');
        $gallery->addImage($image14);

        $image15 = new Image();
        $image15->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image15->setFile('12-encimera.jpg');
        $image15->setTitle('Encimera');
        $image15->setAlt('Encimera');
        $gallery->addImage($image15);

        $image16 = new Image();
        $image16->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image16->setFile('13-grifo.jpg');
        $image16->setTitle('Grifo');
        $image16->setAlt('Grifo');
        $gallery->addImage($image16);

        $image17 = new Image();
        $image17->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image17->setFile('14-frontal.jpg');
        $image17->setTitle('Frontal');
        $image17->setAlt('Frontal');
        $gallery->addImage($image17);

        $image18 = new Image();
        $image18->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/');
        $image18->setFile('15-cristalera-dentro.jpg');
        $image18->setTitle('Cristalera desde dentro');
        $image18->setAlt('Cristalera desde dentro');
        $gallery->addImage($image18);
        
        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
