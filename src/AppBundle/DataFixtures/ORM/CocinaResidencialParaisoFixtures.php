<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class CocinaResidencialParaisoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-residencial-paraiso/antes-1');
        $image1->setTitle('Cocina antes de la reforma 1');
        $image1->setAlt('Cocina antes de la reforma 1');
        $image1->setDescription('Antes');
        $image1->setGallery($this->getReference('reforma-cocina-residencial-paraiso'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-residencial-paraiso/despues-1');
        $image2->setTitle('Cocina después de la reforma 1');
        $image2->setAlt('Cocina después de la reforma 1');
        $image2->setDescription('Después');
        $image2->setGallery($this->getReference('reforma-cocina-residencial-paraiso'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-residencial-paraiso/antes-3');
        $image3->setTitle('Cocina antes de la reforma 3');
        $image3->setAlt('Cocina antes de la reforma 3');
        $image3->setDescription('Antes');
        $image3->setGallery($this->getReference('reforma-cocina-residencial-paraiso'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-residencial-paraiso/despues-3');
        $image4->setTitle('Cocina después de la reforma 3');
        $image4->setAlt('Cocina después de la reforma 3');
        $image4->setDescription('Después');
        $image4->setGallery($this->getReference('reforma-cocina-residencial-paraiso'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-residencial-paraiso/despues-2');
        $image5->setTitle('Cocina después de la reforma 2');
        $image5->setAlt('Cocina después de la reforma 2');
        $image5->setDescription('Después');
        $image5->setGallery($this->getReference('reforma-cocina-residencial-paraiso'));
        $manager->persist($image5);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
