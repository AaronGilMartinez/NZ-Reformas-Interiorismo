<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformasZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reformas en Zaragoza para proyectos integrales');
        $article->setDescription('Te ayudamos a realizar todas las reformas en Zaragoza que necesites con nuestro equipo de expertos. Solicítanos presupuesto sin compromiso!');
        $article->setName('Reformas en Zaragoza mucho más que un proyecto constructivo');
        $article->setArticle('<p>A la hora de tener que realizar <b>reformas en Zaragoza</b> o en cualquier
            lugar en el que residamos o dispongamos de un espacio a rediseñar, es importante saber 
            exactamente qué espacio tenemos y lo que es más importante, disponer de asesores 
            profesionales que nos recomienden lo que mejor nos ayudará a obtener lo que buscamos.</p> 

            <p>Por eso, si necesitamos realizar reformas en Zaragoza, una opción muy recomendable es
            acudir a NZ Reformas. Llevan más de 20 años en el sector de la remodelación, la 
            rehabilitación y el interiorismo, proporcionando el asesoramiento y servicio que todos 
            sus clientes necesitan para poder llevar a cabo sus proyectos constructivos con todas 
            las garantías de un buen acabado final.</p>

            <p>De hecho, todo nuestro equipo de profesionales, cuenta con la experiencia suficiente 
            para asesorar y orientar a todas las personas que requieran de <a href="/proyectos/reformas-de-pisos">reformas en Zaragoza</a>, 
            para proporcionarles las soluciones más prácticas y funcionales a sus espacios, para 
            garantizarles que, una vez finalizado el proyecto constructivo, dispondrán de un espacio
            o espacios, personalizado, pensado para poder desarrollar de la manera más confortable 
            todas sus actividades diarias, ya sea a nivel personal como profesional.</p>

            <p>En <a href="/empresa">NZ Reformas</a>, velamos por conseguir que nuestros clientes queden satisfechos con 
            los trabajos realizados, ya que especialmente somos conscientes de que en muchos casos 
            la realización de los cambios o reformas en Zaragoza son sinónimo, a su vez, de la 
            realización de un cambio personal.</p>

            <p>Por dicho motivo nuestros equipos técnicos velan por conseguir desarrollar los 
            proyectos de la manera más profesional, rápida y sobre todo, correcta, para conseguir 
            que todos y cada uno de nuestros proyectos acabe siendo único, dotándolo de la 
            personalidad propia de la persona o personas que residen en esa vivienda o acuden a ese 
            negocio a trabajar.</p>

            <p>Contáctenos a través de nuestra <a href="http://www.nzreformas.es/contacto" >página 
            de contacto</a>, correo electrónico (info@nzreformas.es) o teléfono (976 56 55 24) y le 
            proporcionaremos el  presupuesto y asesoramiento necesarios para indicarle el coste de 
            su reforma y las posibilidades potenciales de sus espacios.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reformas-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setSlug('reformas-en-zaragoza-mucho-mas-que-un-proyecto-constructivo');
        $article->setImage($imagen);
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('diseno-de-interiores'));
        $article->addTag($this->getReference('reforma-local-comercial'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2016-10-25 13:05:10'));
        $article->setUpdated($article->getCreated());

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
