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
        $tag1->setTitle('Etiqueta de Comunidad de vecinos | NZ Reformas');
        $tag1->setDescription('Información acerca de las comunidades de vecinos en nuestro blog de NZ Reformas. Artículos, noticias, proyectos y más!');
        $manager->persist($tag1);
        $this->addReference('comunidad-de-vecinos', $tag1);

        $tag2 = new Tag();
        $tag2->setName('Zaragoza');
        $tag2->setTitle('Etiqueta de Artículos en Zaragoza | NZ Reformas');
        $manager->persist($tag2);
        $this->addReference('zaragoza', $tag2);

        $tag3 = new Tag();
        $tag3->setName('Patios');
        $tag3->setTitle('Etiqueta de Patios | NZ Reformas');
        $manager->persist($tag3);
        $this->addReference('patios', $tag3);

        $tag5 = new Tag();
        $tag5->setName('Rehabilitación de fachadas');
        $tag5->setTitle('Etiqueta de Rehabilitación de fachadas | NZ Reformas');
        $manager->persist($tag5);
        $this->addReference('rehabilitacion-de-fachadas', $tag5);
        
        $tag6 = new Tag();
        $tag6->setName('Ascensores');
        $tag6->setTitle('Etiqueta de Ascensores | NZ Reformas');
        $manager->persist($tag6);
        $this->addReference('ascensores', $tag6);
        
        $tag7 = new Tag();
        $tag7->setName('Reparación edificio');
        $tag7->setTitle('Etiqueta de Reparación de edificios | NZ Reformas');
        $manager->persist($tag7);
        $this->addReference('reparacion-edificio', $tag7);

        $tag8 = new Tag();
        $tag8->setName('Reforma vivienda');
        $tag8->setTitle('Etiqueta de Reformas de viviendas | NZ Reformas');
        $manager->persist($tag8);
        $this->addReference('reforma-vivienda', $tag8);
        
        $tag9 = new Tag();
        $tag9->setName('Reforma piso');
        $tag9->setTitle('Reformas de pisos | NZ Reformas');
        $manager->persist($tag9);
        $this->addReference('reforma-piso', $tag9);
        
        $tag10 = new Tag();
        $tag10->setName('Diseño de interiores');
        $tag10->setTitle('Etiqueta de diseño de interiores | NZ Reformas');
        $manager->persist($tag10);
        $this->addReference('diseno-de-interiores', $tag10);
        
        $tag12 = new Tag();
        $tag12->setName('Presupuesto de reforma');
        $tag12->setTitle('Etiqueta de Presupuesto de reformas | NZ Reformas');
        $manager->persist($tag12);
        $this->addReference('presupuesto-de-reforma', $tag12);
        
        $tag13 = new Tag();
        $tag13->setName('Precio de reforma');
        $tag13->setTitle('Etiqueta de Precio de reformas | NZ Reformas');
        $manager->persist($tag13);
        $this->addReference('precio-de-reforma', $tag13);
        
        $tag14 = new Tag();
        $tag14->setName('Coste de reforma');
        $tag14->setTitle('Etiqueta de Coste de reforma | NZ Reformas');
        $manager->persist($tag14);
        $this->addReference('coste-de-reforma', $tag14);
        
        $tag15 = new Tag();
        $tag15->setName('Inversión en el hogar');
        $tag15->setTitle('Inversión en el hogar | NZ Reformas');
        $tag15->setDescription('Información sobre la inversión que realizamos en el hogar.');
        $manager->persist($tag15);
        $this->addReference('inversion-en-el-hogar', $tag15);
        
        $tag16 = new Tag();
        $tag16->setName('Reforma local comercial');
        $tag16->setTitle('Etiqueta de reforma de local comercial | NZ Reformas');
        $manager->persist($tag16);
        $this->addReference('reforma-local-comercial', $tag16);
        
        $tag17 = new Tag();
        $tag17->setName('Ahorro energético');
        $tag17->setTitle('Etiqueta de Ahorro energético | NZ Reformas');
        $manager->persist($tag17);
        $this->addReference('ahorro-energetico', $tag17);
        
        $tag18 = new Tag();
        $tag18->setName('Subvenciones en comunidades');
        $tag18->setTitle('Etiqueta de Subvenciones en comunidades | NZ Reformas');
        $manager->persist($tag18);
        $this->addReference('subvenciones-en-comunidades', $tag18);
        
        $tag19 = new Tag();
        $tag19->setName('Impermeabilización de cubiertas');
        $tag19->setTitle('Etiqueta de Impermeabilizaciones de cubiertas | NZ Reformas');
        $manager->persist($tag19);
        $this->addReference('impermeabilizacion-de-cubiertas', $tag19);
        
        $tag20 = new Tag();
        $tag20->setName('Impermeabilización de terrazas');
        $tag20->setTitle('Etiqueta de Impermeabilizaciones de terrazas | NZ Reformas');
        $manager->persist($tag20);
        $this->addReference('impermeabilizacion-de-terrazas', $tag20);
        
        $tag21 = new Tag();
        $tag21->setName('Impermeabilizar');
        $tag21->setTitle('Etiqueta de Impermeabilizar | NZ Reformas');
        $manager->persist($tag21);
        $this->addReference('impermeabilizar', $tag21);
        
        $tag22 = new Tag();
        $tag22->setName('Filtraciones');
        $tag22->setTitle('Etiqueta de Filtraciones | NZ Reformas');
        $manager->persist($tag22);
        $this->addReference('filtraciones', $tag22);
        
        $tag23 = new Tag();
        $tag23->setName('Humedades');
        $tag23->setTitle('Etiqueta de Humedades | NZ Reformas');
        $manager->persist($tag23);
        $this->addReference('humedades', $tag23);

        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

}
