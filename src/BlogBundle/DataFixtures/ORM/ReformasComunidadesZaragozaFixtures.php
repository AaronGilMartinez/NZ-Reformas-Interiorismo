<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformasComunidadesZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reformas de comunidades en Zaragoza | NZ');
        $article->setDescription('Obtén los mejores presupuestos para realizar reformas de comunidades '
                . 'en Zaragoza en todo tipo de pisos. Solicita presupuesto sin compromiso!');
        $article->setName('Realiza reformas de comunidades en Zaragoza con técnicos profesionales');
        $article->setArticle('<p>Las comunidades de propietarios son unos de los colectivos que 
            deben enfrentarse a la realización de reformas, pasados los años, en los espacios 
            comunes de la comunidad. Para los propietarios, si necesitan hacer <b>reformas en las 
            comunidades de Zaragoza</b>, puede resultar un quebradero de cabeza, así que lo más 
            recomendable es contratar a un especialista, que realice todas las gestiones necesarias 
            para proceder a realizar las reformas que sean oportunas, bajo supervisión y aprobación 
            de todos los miembros de la comunidad.</p>

            <p>En NZ Reformas, cuentan con un equipo técnico de profesionales que pueden realizar 
            las reformas de comunidades en Zaragoza, sin ningún tipo de problema, desde grandes 
            proyectos, a proyectos sencillos en los que la intervención o modificación del espacio 
            sea mínima. Lo importante es rodearse de los profesionales adecuados que nos permitan 
            realizar las gestiones necesarias para poder dotar de un nuevo entorno a la comunidad y 
            así ofrecer un espacio confortable a todos los residentes de la finca.</p>

            <p>A la hora de realizar <a href="/proyectos/rehabilitacion-de-edificios">reformas en comunidades en Zaragoza</a>, o en cualquier otra 
            población, lo más importante es que toda la comunidad esté conforme con los cambios que 
            es necesario realizar y que se pueda recibir el asesoramiento de los profesionales 
            especializados, como pueden ser NZ Reformas, para obtener, con el mejor precio, los 
            mejores resultados. Satisfaciendo las exigencias de todos los propietarios miembros de 
            la comunidad, o al menos, de su gran mayoría.</p>

            <p>En definitiva, se trata de poder facilitar a las comunidades y sus propietarios el 
            máximo de reformas posibles, para que puedan realizarse de manera profesional y sin 
            complicaciones o incidencias. Por ello no dude en contactar con NZ Reformas a través de 
            nuestra <a href="http://www.nzreformas.es/contacto" >página de contacto</a>, correo 
            electrónico (info@nzreformas.es) o teléfono (976 56 55 24). Le proporcionarán todo el 
            asesoramiento necesario para realizar reformas en comunidades en Zaragoza con todas las 
            garantías de trabajar con especialistas avalados por su larga trayectoria profesional.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reformas-de-comunidades-en-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reformas-de-comunidades-en-zaragoza');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('comunidad-de-vecinos'));
        $article->addTag($this->getReference('patios'));
        $article->addTag($this->getReference('rehabilitacion-de-fachadas'));
        $article->addTag($this->getReference('ascensores'));
                $article->addTag($this->getReference('reparacion-edificio'));
                        $article->addTag($this->getReference('zaragoza'));

        $article->setCreated(new \DateTime('2016-11-22 11:21:49'));
        $article->setUpdated($article->getCreated());

        $manager->persist($article);

        $manager->flush();

        $this->addReference('reformas-de-comundiades-en-zaragoza', $article);
    }

    public function getOrder() {
        return 3;
    }

}
