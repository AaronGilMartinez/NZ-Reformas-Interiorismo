<?php

// src/BlogBundle/DataFixtures/ORM/TagFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Tag;

class TagFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $tag1 = new Tag();
        $tag1->setName('Comunidad de vecinos');
        $manager->persist($tag1);
        $this->addReference('comunidad-de-vecinos', $tag1);

        $tag2 = new Tag();
        $tag2->setName('Zaragoza');
        $manager->persist($tag2);
        $this->addReference('zaragoza', $tag2);

        $tag3 = new Tag();
        $tag3->setName('Patios');
        $manager->persist($tag3);
        $this->addReference('patios', $tag3);

        $tag5 = new Tag();
        $tag5->setName('Rehabilitación de fachadas');
        $manager->persist($tag5);
        $this->addReference('rehabilitacion-de-fachadas', $tag5);
        
        $tag6 = new Tag();
        $tag6->setName('Ascensores');
        $manager->persist($tag6);
        $this->addReference('ascensores', $tag6);
        
        $tag7 = new Tag();
        $tag7->setName('Reparación edificio');
        $manager->persist($tag7);
        $this->addReference('reparacion-edificio', $tag7);

        $tag8 = new Tag();
        $tag8->setName('Reforma vivienda');
        $manager->persist($tag8);
        $this->addReference('reforma-vivienda', $tag8);
        
        $tag9 = new Tag();
        $tag9->setName('Reforma piso');
        $manager->persist($tag9);
        $this->addReference('reforma-piso', $tag9);
        
        $tag10 = new Tag();
        $tag10->setName('Diseño de interiores');
        $manager->persist($tag10);
        $this->addReference('diseno-de-interiores', $tag10);
        
        $tag12 = new Tag();
        $tag12->setName('Presupuesto de reforma');
        $manager->persist($tag12);
        $this->addReference('presupuesto-de-reforma', $tag12);
        
        $tag13 = new Tag();
        $tag13->setName('Precio de reforma');
        $manager->persist($tag13);
        $this->addReference('precio-de-reforma', $tag13);
        
        $tag14 = new Tag();
        $tag14->setName('Coste de reforma');
        $manager->persist($tag14);
        $this->addReference('coste-de-reforma', $tag14);
        
        $tag15 = new Tag();
        $tag15->setName('Inversión en el hogar');
        $manager->persist($tag15);
        $this->addReference('inversion-en-el-hogar', $tag15);
        
        $tag16 = new Tag();
        $tag16->setName('Reforma local comercial');
        $manager->persist($tag16);
        $this->addReference('reforma-local-comercial', $tag16);
        
        $tag17 = new Tag();
        $tag17->setName('Ahorro energético');
        $manager->persist($tag17);
        $this->addReference('ahorro-energetico', $tag17);
        
        $tag18 = new Tag();
        $tag18->setName('Subvenciones en comunidades');
        $manager->persist($tag18);
        $this->addReference('subvenciones-en-comunidades', $tag18);
        
        $tag19 = new Tag();
        $tag19->setName('Impermeabilización de cubiertas');
        $manager->persist($tag19);
        $this->addReference('impermeabilizacion-de-cubiertas', $tag19);
        
        $tag20 = new Tag();
        $tag20->setName('Impermeabilización de terrazas');
        $manager->persist($tag20);
        $this->addReference('impermeabilizacion-de-terrazas', $tag20);
        
        $tag21 = new Tag();
        $tag21->setName('Impermeabilizar');
        $manager->persist($tag21);
        $this->addReference('impermeabilizar', $tag21);
        
        $tag22 = new Tag();
        $tag22->setName('Filtraciones');
        $manager->persist($tag22);
        $this->addReference('filtraciones', $tag22);
        
        $tag23 = new Tag();
        $tag23->setName('Humedades');
        $manager->persist($tag23);
        $this->addReference('humedades', $tag23);

        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

}
