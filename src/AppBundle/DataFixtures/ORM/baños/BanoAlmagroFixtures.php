<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class BanoAlmagroFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Reforma de baño Almagro');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $imagen->setFile('reforma-bano-almagro.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $manager->persist($imagen);
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2016-03-23'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image1->setFile('bano-1-antes.jpg');
        $image1->setTitle('Baño 1 antes de la reforma');
        $image1->setAlt('Baño 1 antes de la reforma');
        $image1->setDescription('Antes');
        $manager->persist($image1);
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image2->setFile('bano-1-despues.jpg');
        $image2->setTitle('Baño 1 después de la reforma');
        $image2->setAlt('Baño 1 después de la reforma');
        $image2->setDescription('Después');
        $manager->persist($image2);
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image3->setFile('bano-2-antes.jpg');
        $image3->setTitle('Baño 2 antes de la reforma');
        $image3->setAlt('Baño 2 antes de la reforma');
        $image3->setDescription('Antes');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image4->setFile('bano-2-despues.jpg');
        $image4->setTitle('Baño 2 después de la reforma');
        $image4->setAlt('Baño 2 después de la reforma');
        $image4->setDescription('Después');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image5->setFile('bano-3-antes.jpg');
        $image5->setTitle('Baño 3 antes de la reforma');
        $image5->setAlt('Baño 3 antes de la reforma');
        $image5->setDescription('Antes');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/');
        $image6->setFile('bano-3-despues.jpg');
        $image6->setTitle('Baño 3 después de la reforma');
        $image6->setAlt('Ducha 3 después antes de la reforma');
        $image6->setDescription('Después');
        $gallery->addImage($image6);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
