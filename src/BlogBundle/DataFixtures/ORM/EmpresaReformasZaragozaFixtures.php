<?php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class EmpresaReformasZaragozaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Empresas de reformas en Zaragoza de calidad');
        $article->setDescription('Descubre como hacer realizar realidad tus proyectos con las mejores'
                . ' empresas de reformas en Zaragoza de más calidad y de la forma más profesional.');
        $article->setName('Descubre una de las mejores empresas de reformas en Zaragoza');
        $article->setArticle('<p>Una de las maneras de conseguir modificar nuestro espacio de 
            trabajo o de residencia es realizar un proyecto para cambiar las estancias. Este 
            proyecto, en muchas ocasiones requiere contar con la presencia de <a href="/"<b>empresas de reformas 
            en Zaragoza</b></a> o en el lugar que nos encontremos. En NZ Reformas proporcionamos apoyo a la
            rehabilitación o modificación de sus espacios con las garantías de trabajar con 
            profesionales avalados por más de 20 años de experiencia en el sector. Ya que como una 
            de las empresas de reformas en Zaragoza, buscamos ofrecer el mejor 
            servicio, al mejor precio y siempre contando con la confianza depositada por nuestros 
            clientes en nuestro equipo de profesionales.</p>
            
            <p>Así, en NZ Reformas, disfrutamos pudiendo hacer que nuestros clientes vean en la 
            realidad su proyecto, sobre todo, que podamos realizar todo el trabajo basándonos en la 
            excelencia y en la profesionalidad de un equipo multidisciplinar y que cumple con todas 
            las expectativas de quien nos contrata.</p>
            
            <p>En NZ Reformas, somos conscientes que para nuestros clientes lo más importante es 
            conseguir realizar sus proyectos de la manera más profesional, rápida y con las máximas
            garantías de satisfacción, es por ello que trabajamos con profesionales especializados 
            desde el momento inicial hasta la finalización de la rehabilitación o reforma para 
            garantizar un resultado óptimo, acorde a los requerimientos de nuestros usuarios.</p>
            
            <p>Nuestros equipos técnicos, cuentan con profesionales de todos los ámbitos involucrados
            en la realización de todo tipo de reformas o modificaciones de espacios, es por ello, 
            que sabemos que como una de las empresas de reformas en <a href="/blog/impermeabilizaciones-en-zaragoza">Zaragoza</a>, 
            podemos ofrecer siempre el mejor trato a todos nuestros clientes y siempre con el valor 
            añadido de la experiencia y la excelencia, tanto en el trato como en el desarrollo de 
            nuestras actividades.</p>
            
            <p>No lo dude más y contáctenos a través de nuestra <a href="http://www.nzreformas.es/contacto" >
            página de contacto</a>, correo electrónico (info@nzreformas.es) o teléfono (976 56 55 24) 
            para proponernos su proyecto y asesorarle. Le indicaremos cómo mejorarlo para conseguir 
            un espacio mucho más confortable y acorde a sus necesidades, ya sea a nivel personal 
            como profesional.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('empresa-de-reformas-en-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('empresas-de-reformas-en-zaragoza');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('zaragoza'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('reforma-piso'));
        $article->addTag($this->getReference('diseno-de-interiores'));
        /* ----- Comentrio ----- */

        $article->setCreated(new \DateTime('2017-01-26 16:27:56'));
        $article->setUpdated($article->getCreated());

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
