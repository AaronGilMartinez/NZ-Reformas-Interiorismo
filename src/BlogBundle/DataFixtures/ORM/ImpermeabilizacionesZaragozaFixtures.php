<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ImpermeabilizacionesZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Impermeabilizaciones en Zaragoza | NZ Reformas');
        $article->setdescription('La empresa NZ Reformas está especializada en realizar impermeabilizaciones en Zaragoza tanto en edificios antiguos como de nueva construcción.');
        $article->setName('Impermeabilizaciones en Zaragoza');
        $article->setArticle('<p>Las <b>impermeabilizaciones en Zaragoza</b> o en cualquier otro lugar, son
            un proceso complejo que requiere de asesoramiento y de la participación de profesionales
            especializados en el sector constructivo como es el caso de la <a href="http://www.nzreformas.es/empresa" >empresa NZ Reformas</a>.  Este proceso 
            evita el paso del agua y demás filtraciones para paredes, techos, terrazas, etc. ya que 
            con esta técnica se evita la porosidad de los materiales utilizados en la construcción 
            del edificio.</p>

            <p>Lo importante es que las impermeabilizaciones en Zaragoza o donde corresponda, deben 
            realizarse en los edificios antiguos o en los de nueva construcción con los materiales 
            adecuados. En el caso de tratarse de edificios antiguos, el <i>proceso de impermeabilización</i> 
            permite que se evite la filtración de agua en un periodo entre 5 y 25 años, dependiendo 
            del material que se utilice en la realización de la misma.</p> 

            <p>En NZ Reformas, realizamos todo tipo de trabajos de impermeabilizaciones en la ciudad de Zaragoza,
            para <b>garantizar la seguridad en las edificaciones</b> y poder alargar su vida, evitando la 
            porosidad de sus materiales y por tanto, la filtración de agua u otros elementos que 
            pueden deteriorar partes de la finca. Es por ello que lo más recomendable es realizar 
            este tipo de trabajos con los profesionales adecuados para garantizar que tanto la 
            aplicación como el resultado final sea el correcto. Ya que, además de realizar la 
            instalación de los materiales adecuados, es importante también disponer del sistema de 
            drenajes que mejor funcione y nos permita optimizar los materiales para evitar las 
            filtraciones.</p>
            
            <p>No lo dude más y contáctenos si necesita realizar <a href="/">impermeabilizaciones en Zaragoza</a> a 
            través de nuestra <a href="http://www.nzreformas.es/contacto" >página de contacto</a>, 
            correo electrónico (<a href="mailto:info@nzreformas.es">info@nzreformas.es</a>) o teléfono (<b>976 56 55 24</b>). En NZ Reformas 
            estaremos encantados en proporcionarle el asesoramiento necesario para indicarle el tipo
            de impermeabilización que mejor se adapte a su edificio o espacio, así como todo lo 
            necesario para que el trabajo final le proporcione el mejor aislamiento.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('impermeabilizaciones-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('impermeabilizaciones-en-zaragoza');
        $article->setCategory($this->getReference('rehabilitacion'));
        $article->addTag($this->getReference('impermeabilizar'));
        $article->addTag($this->getReference('filtraciones'));
        $article->addTag($this->getReference('impermeabilizacion-de-cubiertas'));
        $article->addTag($this->getReference('impermeabilizacion-de-terrazas'));
        $article->addTag($this->getReference('humedades'));
        $article->addTag($this->getReference('zaragoza'));
        $article->addTag($this->getReference('reparacion-edificio'));
         $article->setCreated(new \DateTime('2017-02-21 15:13:25'));
        $article->setUpdated(new \DateTime('2017-02-21 15:13:25'));

        /*  $article->setSlug('url artículo'); */

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
