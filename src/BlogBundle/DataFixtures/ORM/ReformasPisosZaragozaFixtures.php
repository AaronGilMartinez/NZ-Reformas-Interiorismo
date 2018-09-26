<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformasPisosZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reformas de pisos en Zaragoza | Empresa NZ Reformas');
        $article->setDescription('Cuenta con la ayuda más profesional para realizar reformas de pisos'
                . ' en Zaragoza con una empresa como es NZ Reformas. Solicita presupuesto sin compromiso!');
        $article->setName('Reformas de pisos en Zaragoza');
        $article->setArticle('<p>En todas las ciudades y pueblos, los edificios más antiguos, son 
            los que en la mayoría de los casos necesitan <b>reformas de pisos en Zaragoza</b>, o de 
            cualquier otra ciudad, ya que las viviendas de los barrios con más tradición e historia 
            de las diversas capitales de provincia, son edificios antiguos. En algunos casos con más
            de 100 años desde su construcción. Así, es posible que encontremos una vivienda en el 
            casco antiguo de Zaragoza en la que sea necesario realizar reformas.</p>

            <p>A la hora de hacer reformas en pisos en Zaragoza o en cualquier otra población hay 
            que tener en cuenta el nivel de conversión que hace falta. Es decir, si hay que 
            modificar instalaciones, si es sólo movimiento de tabiques o si se trata de una reforma 
            integral. En NZ Reformas, somos conscientes de que las reformas en pisos de Zaragoza o 
            de cualquier otro lugar, necesitan de un proyecto previo en el que estudiar el nivel de 
            profundidad de la reforma que es necesario realizar.</p>

            <p>Disponemos de todo un equipo de profesionales multidisciplinar que puede asesorar y 
            realizar <a href="/proyectos/reformas-de-pisos">reformas en pisos en Zaragoza</a> o en la población que corresponda. Escuchamos a 
            nuestros clientes para saber y conocer cuáles son sus necesidades y requerimientos para
            desarrollar un proyecto completo. En el que recopilamos toda la información para 
            incluir en el presupuesto todos los componentes o elementos necesarios que puedan 
            resultar de utilidad para conseguir el nuevo entorno de trabajo o de residencia para 
            nuestros clientes.</p>

            <p>Así, no dude en consultarnos a la hora de hacer reformas de pisos en Zaragoza, todo 
            lo que pueda necesitar aclarar para poder proporcionarle un presupuesto sin compromiso y
            que contemple todos los elementos para convertir su espacio en el entorno más agradable
            para desarrollar su actividad diaria. Contáctenos a través de nuestra 
            <a href="http://www.nzreformas.es/contacto" >página de contacto</a>, correo electrónico 
            (info@nzreformas.es) o teléfono (976 56 55 24).</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reformas-pisos-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reformas-de-pisos-en-zaragoza');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-piso'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('diseno-de-interiores'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2016-09-19 14:24:48'));
        $article->setUpdated($article->getCreated());

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
