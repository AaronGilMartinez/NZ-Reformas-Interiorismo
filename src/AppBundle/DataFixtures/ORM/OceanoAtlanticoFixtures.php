<?php

// src/AppBundle/DataFixtures/ORM/ImageFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class OceanoAtlanticoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $image1 = new Image();
        $image1->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/entrada-1-antes');
        $image1->setTitle('Entrada antes de la reforma 1');
        $image1->setAlt('Entrada antes de la reforma 1');
        $image1->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/entrada-1-después');
        $image2->setTitle('Entrada después de la reforma 1');
        $image2->setAlt('Entrada después de la reforma 1');
        $image2->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/entrada-2-antes');
        $image3->setTitle('Entrada antes de la reforma 2');
        $image3->setAlt('Entrada antes de la reforma 2');
        $image3->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/entrada-2-después');
        $image4->setTitle('Entrada después de la reforma 2');
        $image4->setAlt('Entrada después de la reforma 2');
        $image4->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/pasillo-antes');
        $image5->setTitle('Pasillo antes de la reforma');
        $image5->setAlt('Pasillo antes de la reforma');
        $image5->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/pasillo-después');
        $image6->setTitle('Pasillo después de la reforma');
        $image6->setAlt('Pasillo después de la reforma');
        $image6->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/salón-antes');
        $image7->setTitle('Salón antes de la reforma');
        $image7->setAlt('Salón antes de la reforma');
        $image7->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image7);

        $image8 = new Image();
        $image8->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/salón-después');
        $image8->setTitle('Salón después de la reforma');
        $image8->setAlt('Salón después de la reforma');
        $image8->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image8);

        $image9 = new Image();
        $image9->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/armario-antes');
        $image9->setTitle('Armario antes de la reforma');
        $image9->setAlt('Armario antes de la reforma');
        $image9->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image9);

        $image10 = new Image();
        $image10->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/armario-después');
        $image10->setTitle('Armario después de la reforma');
        $image10->setAlt('Armario después de la reforma');
        $image10->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image10);

        $image11 = new Image();
        $image11->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/habitación-1-antes');
        $image11->setTitle('Habitación antes de la reforma 1');
        $image11->setAlt('Habitación antes de la reforma 1');
        $image11->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image11);

        $image12 = new Image();
        $image12->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/habitación-1-después');
        $image12->setTitle('Habitación después de la reforma 1');
        $image12->setAlt('Habitación después de la reforma 1');
        $image12->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image12);

        $image13 = new Image();
        $image13->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/habitación-2-antes');
        $image13->setTitle('Habitación después de la reforma 2');
        $image13->setAlt('Habitación después de la reforma 2');
        $image13->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image13);

        $image14 = new Image();
        $image14->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/habitación-2-después');
        $image14->setTitle('Habitación después de la reforma 2');
        $image14->setAlt('Habitación después de la reforma 2');
        $image14->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image14);

        $image15 = new Image();
        $image15->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-1-antes');
        $image15->setTitle('Cocina antes de la reforma 1');
        $image15->setAlt('Cocina antes de la reforma 1');
        $image15->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image15);

        $image16 = new Image();
        $image16->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-1-después');
        $image16->setTitle('Cocina después de la reforma 1');
        $image16->setAlt('Cocina después de la reforma 1');
        $image16->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image16);

        $image17 = new Image();
        $image17->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-2-antes');
        $image17->setTitle('Cocina antes de la reforma 2');
        $image17->setAlt('Cocina antes de la reforma 2');
        $image17->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image17);

        $image18 = new Image();
        $image18->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-2-después');
        $image18->setTitle('Cocina después de la reforma 2');
        $image18->setAlt('Cocina después de la reforma 2');
        $image18->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image18);

        $image19 = new Image();
        $image19->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-3-antes');
        $image19->setTitle('Cocina antes de la reforma 3');
        $image19->setAlt('Cocina antes de la reforma ');
        $image19->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image19);

        $image20 = new Image();
        $image20->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-3-después');
        $image20->setTitle('Cocina después de la reforma 3');
        $image20->setAlt('Cocina después de la reforma 3');
        $image20->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image20);

        $image21 = new Image();
        $image21->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/dormitorio-1-antes');
        $image21->setTitle('Dormitorio antes de la reforma 1');
        $image21->setAlt('Dormitorio antes de la reforma 1');
        $image21->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image21);

        $image22 = new Image();
        $image22->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/dormitorio-1-después');
        $image22->setTitle('Dormitorio después de la reforma 1');
        $image22->setAlt('Dormitorio después de la reforma 1');
        $image22->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image22);

        $image23 = new Image();
        $image23->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/dormitorio-2-antes');
        $image23->setTitle('Dormitorio antes de la reforma 2');
        $image23->setAlt('Dormitorio antes de la reforma 2');
        $image23->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image23);

        $image24 = new Image();
        $image24->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/dormitorio-2-después');
        $image24->setTitle('Dormitorio después de la reforma 2');
        $image24->setAlt('Dormitorio después de la reforma 2');
        $image24->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image24);

        $image25 = new Image();
        $image25->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-1p-antes');
        $image25->setTitle('Baño antes de la reforma, desde pasillo 1');
        $image25->setAlt('Baño antes de la reforma, desde pasillo 1');
        $image25->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image25);

        $image26 = new Image();
        $image26->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-1p-después');
        $image26->setTitle('Baño después de la reforma, desde pasillo 1');
        $image26->setAlt('Baño después de la reforma, desde pasillo 1');
        $image26->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image26);

        $image27 = new Image();
        $image27->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-2i-antes');
        $image27->setTitle('Baño antes de la reforma, desde izquierda 2');
        $image27->setAlt('Baño antes de la reforma, desde izquierda 2');
        $image27->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image27);

        $image28 = new Image();
        $image28->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-2i-después');
        $image28->setTitle('Baño después de la reforma, desde izquierda 2');
        $image28->setAlt('Baño después de la reforma, desde izquierda 2');
        $image28->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image28);

        $image29 = new Image();
        $image29->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-2p-antes');
        $image29->setTitle('Baño antes de la reforma, desde pasillo 2');
        $image29->setAlt('Baño antes de la reforma, desde pasillo 2');
        $image29->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image29);

        $image30 = new Image();
        $image30->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-2p-después');
        $image30->setTitle('Baño después de la reforma, desde pasillo 2');
        $image30->setAlt('Baño después de la reforma, desde pasillo 2');
        $image30->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image30);

        $image31 = new Image();
        $image31->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/baño-2d-después');
        $image31->setTitle('Baño después de la reforma, desde derecha 2');
        $image31->setAlt('Baño después de la reforma, desde derecha 2');
        $image31->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image31);

        $image32 = new Image();
        $image32->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-4-después');
        $image32->setTitle('Cocina después de la reforma 4');
        $image32->setAlt('Cocina después de la reforma 4');
        $image32->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image32);

        $image33 = new Image();
        $image33->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-5-después');
        $image33->setTitle('Cocina después de la reforma 5');
        $image33->setAlt('Cocina después de la reforma 5');
        $image33->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image33);

        $image34 = new Image();
        $image34->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-6-después');
        $image34->setTitle('Cocina después de la reforma 6');
        $image34->setAlt('Cocina después de la reforma 6');
        $image34->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image34);

        $image35 = new Image();
        $image35->setSrc('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-océano-atlántico/cocina-7-después');
        $image35->setTitle('Cocina después de la reforma 7');
        $image35->setAlt('Cocina después de la reforma 7');
        $image35->setGallery($this->getReference('reforma-integral-océano-atlántico'));
        $manager->persist($image35);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
