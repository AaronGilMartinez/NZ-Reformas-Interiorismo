<?php

// src/AppBundle/DataFixtures/ORM/ProjectFixtures.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;
use AppBundle\Entity\Image;

class ProjectFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $project1 = new Project();
        $project1->setName('Reformas de comunidades');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-comunidades/');
        $imagen->setFile('reformas-de-comunidades.jpg');
        $imagen->setTitle($project1->getName());
        $imagen->setAlt($project1->getName());
        $project1->setImage($imagen);
        $project1->setIntroduction('Reparación de edificios y gestión de reformas en comunidades. '
                . 'Desarrollamos desde grandes proyectos, a modificaciones sencillas en los que la '
                . 'redistribución del espacio sea mínima. Proponemos diferentes modelos de pago, '
                . 'conforme a las necesidades del cliente.');
        $project1->setDescription('<p>Además de dedicarnos a la reformas de viviendas, también '
                . 'realizamos proyectos de una escala mayor. NZ Reformas pertenece a Construcciones '
                . 'Navascués Zalaya S.L. una empresa de dedicada a obra mayor, y obra nueva. '
                . 'Desarrollamos desde grandes proyectos, a modificaciones y reparaciones sencillas.</p>'
                . ''
                . '<p>Asi que si se plantea la reforma de un negocio, reparación de un patio o la '
                . 'impermeabilización de una fachada en una comunidad de vecinos, sepa que no es un '
                . 'problema y que contamos con gran experiencia en el sector. Proponemos diferentes '
                . 'modelos de pago, conforme a las necesidades del cliente.</p>');
        $manager->persist($project1);

        $project2 = new Project();
        $project2->setName('Reformas de pisos');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/');
        $imagen->setFile('reformas-de-pisos.jpg');
        $imagen->setTitle($project2->getName());
        $imagen->setAlt($project2->getName());
        $project2->setImage($imagen);
        $project2->setIntroduction('Reformas de pisos, y diseño de espacios interiores. Planificamos'
                . ' el proyecto de reforma, realizando un estudio previo para sacar el mayor partido '
                . 'a la distribución del espacio según las necesidades de uso, y la solución más '
                . 'asequible.');
        $project2->setDescription('<p>En NZ Reformas nos preocupamos por la realización de cada 
            proyecto de forma que cada área desarrolle su máximo potencial. La reforma de una 
            vivienda puede variar desde intervenciones pequeñas, como puede ser un cambio de puertas
            , hasta reformas de pisos integrales dónde se modifica toda la vivienda.</p>
            
            <p>Lo más importante en las reformas de pisos es la elección en la distribución de espacios
            , un pequeño cambio en un tabique puede mejorar mucho la calidad de vida. Una vivienda 
            refleja la personalidad de las personas que viven en ella, y es importante a la hora de 
            realizar reformas la participación del cliente, la elección de cada variación bajo 
            nuestro asesoramiento.</p>');

        $manager->persist($project2);

        $project3 = new Project();
        $project3->setName('Reformas de baños');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-banos/');
        $imagen->setFile('reformas-de-banos.jpg');
        $imagen->setTitle($project3->getName());
        $imagen->setAlt($project3->getName());
        $project3->setImage($imagen);
        $project3->setIntroduction('Reformas de baños, baños sencillos y modernos. Trabajamos con '
                . 'gran variedad de firmas de sanitarios, acabados y complementos, que nos permiten '
                . 'adaptar el espacio del bano a cualquier requisito tanto económico como funcional.');
        $project3->setDescription('<p>Tenemos muy en cuenta el diseño de espacios en reformas, sobre 
            todo en reformas de baños. Es en esta zona de las viviendas donde más hay que cuidar el 
            espacio, así que aportamos soluciones simples y diseños de banos modernos.</p>
            
            <p>Disponemos de gran variedad de firmas de sanitarios, acabados y complementos. Pero la 
            diferencia la marca, la selección de los más adecuados. Por supuesto la elección es del 
            cliente, y bajo nuestro asesoramiento se puede realizar el plan de reforma más acertado.
            Planteando una idea, o partiendo de cero, el diseño del mobiliario junto al acabado, y 
            los materiales apropiados pueden hacer mucho.</p>');

        $manager->persist($project3);

        $project4 = new Project();
        $project4->setName('Reformas de cocinas');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/');
        $imagen->setFile('reformas-de-cocinas.jpg');
        $imagen->setTitle($project4->getName());
        $imagen->setAlt($project4->getName());
        $project4->setImage($imagen);
        $project4->setIntroduction('Reformas de cocinas, cocinas completas y a medida. Cada cocina es '
                . 'un mundo, por eso proponemos la configuración más óptima, acorde con el diseño '
                . 'más vanguardista. Disponemos de una amplia gama de enseres, permitiendo un amplio'
                . ' rango de precios.');
        $project4->setDescription('<p>Las reformas de cocinas son uno de los proyectos con más 
            repercusión sobre la vivienda. Plantear este tipo de reformas puede desalentar a muchos 
            clientes por el desconocimiento del coste aproximado de una cocina. La estimación de una
            reforma de cocina sin una visita previa es complicada, hay que tener encuenta muchas 
            posibilidades, pero nuestro conocimiento y experiencia en el sector aportan una base 
            sólida para lograr los objetivos de nuestros clientes.</p>
            
            <p>Dado que cada reforma de cocina es diferente, hay muchas opciones de configuración, ya 
            sea por la disposición del mobiliario y los electrodomésticos, o la selección de 
            materiales. Además de estudiar el diseño de la cocina, hay tener en cuenta su 
            funcionalidad, una cocina ha de ser tanto cómoda, como práctica. Por eso disponemos de 
            los mejores especialistas, y un amplia gama de materiales que escoger. Moldeamos su 
            cocina a su gusto.</p>');
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
