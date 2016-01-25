<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;

class PresupuestosReformasZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Presupuestos de reformas en Zaragoza para modificar nuestros espacios');
        $article->setArticle('<p>En toda remodelación o rehabilitación, ya sea de un negocio 
            particular o de una vivienda, es importante tener en cuenta algunos aspectos como el 
            volumen de inversión a realizar para contemplar realmente el coste que tendrá realizar 
            la adaptación de los espacios. Por ello es importante solicitar diversos presupuestos de
            reformas en Zaragoza, para contrastar y así escoger el que mejor se adapte a nuestras 
            posibilidades.</p>

            <p>Es por ello que en NZ Reformas, se realizan presupuestos de reformas en Zaragoza, 
            ajustados a las necesidades y posibilidades del cliente.  De esta manera podemos 
            realizar y convertir en realidad los proyectos constructivos de nuestros clientes, 
            sabiendo de antemano del espacio real que disponen y de todas las peticiones que desean 
            hacer sobre una estancia concreta. Así, de esta manera, se consigue convertir en 
            realidad la idea inicial que se encuentra en la mente de nuestros clientes. Mejorando 
            sus espacios y haciendo que todo ello acabe siendo un nuevo entorno.</p>

            <p>En NZ Reformas, disponemos de todo lo necesario para convertir un espacio antiguo en 
            uno nuevo, realizando presupuestos de reformas en Zaragoza, adaptando todo lo necesario 
            para que los espacios cumplan con los requisitos que desean los clientes. Y así poder 
            disfrutar de su nuevo hogar u oficina, con los nuevos materiales utilizados, 
            convirtiendo en realidad todos los requisitos que servirán para mejorar las necesidades 
            de nuestros usuarios para que desarrollen de una mejor manera sus actividades diarias, 
            tanto a nivel personal como profesional.</p>

            <p>Si estás pensando en realizar una reforma, una rehabilitación o una modificación del 
            interiorismo para poder realizar un cambio en sus espacios, no dude en realizarnos su 
            petición a través de nuestra <a href="http://www.nzreformas.es/contacto" >
            página de contacto</a>, correo electrónico (info@nzreformasintegrales.es) o teléfono 
            (976 56 55 24) y le proporcionaremos el presupuesto o presupuestos de reformas en 
            Zaragoza, así como el asesoramiento que pueda necesitar para proporcionarle todo lo que 
            nuestros clientes puedan requerir para conseguir su nuevo espacio de trabajo o personal.</p>');
        $article->setImage('presupuestos-reformas-zaragoza.jpg');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('diseno-de-interiores'));
        $article->addTag($this->getReference('precio-de-reforma'));
        $article->addTag($this->getReference('coste-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('zaragoza'));
        
        
        $article->setCreated(new \DateTime());
        $article->setUpdated($article->getCreated());
        $manager->persist($article);

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
