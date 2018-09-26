<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class RehabilitacionFachadasZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Rehabilitación de fachadas en Zaragoza');
        $article->setDescription('Contacta con NZ Reformas, empresa especializada en la rehabilitación'
                . ' de fachadas en Zaragoza con más de 20 años de experiencia en el sector.');
        $article->setName('Empresa de rehabilitación de fachadas en Zaragoza');
        $article->setArticle('<p>La realización de reformas en una comunidad, puede implicar una 
            <b>rehabilitación de fachadas en Zaragoza</b>, o en el lugar en el que residamos.  Es por ello 
            que en estos casos, es imprescindible acudir a profesionales especializados en la 
            realización de reformas o rehabilitaciones como NZ Reformas, con más de 20 años de 
            experiencia en el sector.</p>

            <p>De hecho, durante 2015, el Gobierno de Aragón ha destinado 6 millones de euros a la 
            rehabilitación de edificios para proceder a la renovación de viviendas, para propulsar 
            el sector de la construcción. Por eso, el servicio de rehabilitación integral de fachadas podría ser uno 
            de  los factores que haya permitido reactivar el sector de la construcción, volviendo 
            así a movilizar todo un sector que con el cese del boom inmobiliario quedó bastante 
            afectado.</p> 

            <p>Así, empresas dedicadas al sector de la construcción, pueden encontrar en la 
            rehabilitación y pintura de fachadas en Zaragoza, una vía para conseguir volver a funcionar y 
            recuperarse en este ámbito. De hecho, realizando la correcta rehabilitación de una fachada,
            es posible que los miembros de la comunidad que residen en el edificio noten diferentes 
            cambios o mejoras en general, como puede ser el ahorro energético, debido al menor uso 
            de calefacción, así como una mejora en cuanto a la accesibilidad del edificio.</p>

            <p>Así, la <a href="/proyectos/rehabilitacion-de-edificios">rehabilitación de fachadas en Zaragoza<a/>, supone un beneficio, no sólo para la 
            empresa que gestiona la reforma, sino también para todos los miembros de la comunidad 
            que en ella residen. Ya que a pesar de la importante inversión que es necesario realizar
            para proceder a los cambios de mejora, esta queda rápidamente amortizada, con las 
            ventajas que se desprenden de la reforma.</p>

            <p>Otro de los elementos que supone una ventaja al realizar la rehabilitación de 
            fachadas en Zaragoza es la consecución de un mayor valor de la vivienda, ya que esta se 
            revaloriza desde el momento en el que se finalizan los trabajos de obra y la inversión 
            realizada se amortiza a medio o largo plazo con el ahorro en el consumo de la 
            calefacción y de la luz.</p>

            <p>Además de contar con las subvenciones gubernamentales correspondientes que nos 
            permitirán realizar la rehabilitación de fachadas en Zaragoza con una inversión menor 
            por parte de los propietarios del edificio.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('rehabilitacion-fachadas-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('rehabilitacion-de-fachadas-en-zaragoza');
        $article->setCategory($this->getReference('rehabilitacion'));
        $article->addTag($this->getReference('rehabilitacion-de-fachadas'));
        $article->addTag($this->getReference('reparacion-edificio'));
        $article->addTag($this->getReference('comunidad-de-vecinos'));
        $article->addTag($this->getReference('ahorro-energetico'));
        $article->addTag($this->getReference('subvenciones-en-comunidades'));
        $article->addTag($this->getReference('reforma-local-comercial'));
        $article->setCreated(new \DateTime('2016-08-25 10:54:10'));
        $article->setUpdated($article->getCreated());

        $manager->persist($article);

        $manager->flush();

        $this->addReference('presupuestos-de-reformas-en-zaragoza', $article);
    }

    public function getOrder() {
        return 3;
    }

}
