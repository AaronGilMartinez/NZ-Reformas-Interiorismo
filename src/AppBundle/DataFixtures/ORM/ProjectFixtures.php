<?php

// src/AppBundle/DataFixtures/ORM/ProjectFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;

class ProjectFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $project1 = new Project();
        $project1->setName('Reformas de comunidades');
        $project1->setImage('bundles/app/images/proyectos/reformas-de-comunidades/reformas-de-comunidades');
        $project1->setDescription('Gestión de reformas en comunidades y reparación de edificios. '
                . 'Desarrollamos desde grandes proyectos, a modificaciones sencillas en los que la '
                . 'redistribución del espacio sea mínima. Proponemos diferentes modelos de pago, '
                . 'conforme a las necesidades del cliente.');
        $manager->persist($project1);

        $project2 = new Project();
        $project2->setName('Reformas de pisos');
        $project2->setImage('bundles/app/images/proyectos/reformas-de-pisos/reformas-de-pisos');
        $project2->setDescription('Reformas de pisos, y diseño de espacios interiores. Planificamos'
                . ' el proyecto de reforma, realizando un estudio previo para sacar el mayor partido '
                . 'a la distribución del espacio según las necesidades de uso, y la solución más '
                . 'asequible.');
        $manager->persist($project2);

        $project3 = new Project();
        $project3->setName('Reformas de baños');
        $project3->setImage('bundles/app/images/proyectos/reformas-de-banos/reformas-de-banos');
        $project3->setDescription('Reformas de baños, baños sencillos y modernos. Trabajamos con '
                . 'gran variedad de firmas de sanitarios, acabados y complementos, que nos permiten '
                . 'adaptar el espacio del baño a cualquier requisito tanto económico como funcional.');
        
        $manager->persist($project3);

        $project4 = new Project();
        $project4->setName('Reformas de cocinas');
        $project4->setImage('bundles/app/images/proyectos/reformas-de-cocinas/reformas-de-cocinas');
        $project4->setDescription('Reformas de cocinas, cocinas completas y a medida. Cada cocina es'
                . 'un mundo, por eso proponemos la configuración más óptima, concorde con el diseño '
                . 'más vanguardista. Disponemos de una amplia gama de enseres, permitiendo un amplio'
                . ' rango de precios.');
        $manager->persist($project4);

        $manager->flush();

        $this->addReference('comunidades', $project1);
        $this->addReference('pisos', $project2);
        $this->addReference('banos', $project3);
        $this->addReference('cocinas', $project4);
    }

    public function getOrder() {
        return 1;
    }

}
