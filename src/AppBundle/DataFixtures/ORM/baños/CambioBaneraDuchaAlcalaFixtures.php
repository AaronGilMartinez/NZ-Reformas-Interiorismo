<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use AppBundle\Entity\Gallery;

class CambioBaneraDuchaAlcalaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $gallery = new Gallery();
        $gallery->setName('Cambio de bañera por ducha Alcalá de la selva');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $imagen->setFile('cambio-banera-ducha-alcala-de-la-selva.jpg');
        $imagen->setTitle($gallery->getName());
        $imagen->setAlt($gallery->getName());
        $gallery->setImage($imagen);
        $gallery->setDescription('');
        $gallery->setProject($this->getReference('banos'));
        $gallery->setUploaded(new \DateTime('2016-03-29'));

        $image1 = new Image();
        $image1->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image1->setFile('banera-ducha-alcala-de-la-selva-1.jpg');
        $image1->setTitle('Estado anterior del baño');
        $image1->setAlt('Estado anterior del baño');
        $image1->setDescription('Estado anterior del baño');
        $gallery->addImage($image1);

        $image2 = new Image();
        $image2->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image2->setFile('banera-ducha-alcala-de-la-selva-2.jpg');
        $image2->setTitle('Retirada de la bañera');
        $image2->setAlt('Retirada de la bañera');
        $image2->setDescription('Retirada de la bañera');
        $gallery->addImage($image2);

        $image3 = new Image();
        $image3->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image3->setFile('banera-ducha-alcala-de-la-selva-3.jpg');
        $image3->setTitle('Plato de ducha con faldones');
        $image3->setAlt('Plato de ducha con faldones');
        $image3->setDescription('Plato de ducha con faldones');
        $gallery->addImage($image3);

        $image4 = new Image();
        $image4->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image4->setFile('banera-ducha-alcala-de-la-selva-4.jpg');
        $image4->setTitle('Sustitución por grifería nueva');
        $image4->setAlt('Sustitución por grifería nueva');
        $image4->setDescription('Sustitución por grifería nueva');
        $gallery->addImage($image4);

        $image5 = new Image();
        $image5->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image5->setFile('banera-ducha-alcala-de-la-selva-5.jpg');
        $image5->setTitle('Colocación de la mampara');
        $image5->setAlt('Colocación de la mampara');
        $image5->setDescription('Colocación de la mampara');
        $gallery->addImage($image5);

        $image6 = new Image();
        $image6->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image6->setFile('banera-ducha-alcala-de-la-selva-6.jpg');
        $image6->setTitle('Resultado final');
        $image6->setAlt('Resultado final');
        $image6->setDescription('Resultado final');
        $gallery->addImage($image6);

        $image7 = new Image();
        $image7->setPath('bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/');
        $image7->setFile('banera-ducha-alcala-de-la-selva-7.jpg');
        $image7->setTitle('Resultado final, mampara');
        $image7->setAlt('Resultado final, mampara');
        $image7->setDescription('Resultado final, mampara');
        $gallery->addImage($image7);

        $manager->persist($gallery);
        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
