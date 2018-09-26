<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class VinedoViejoFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reforma de piso integral en paseo Viñedo Viejo | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reforma de piso integral en paseo Viñedo Viejo');
        $article->setArticle('<p>
            Hoy tenemos reforma de piso integral de las que lucen mucho, y no es porque tenga 
            iluminación LED. Se trata de una reforma de piso en Viñedo Viejo dónde han renovado 
            baños, cocina, suelos, puertas, ventanas, fontanería, electricidad, calefacción y sistema
            de aire acondicionado. Como dijo Jack, vamos por partes.
        </p>
        <img src="/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/comedor-3.jpg" title="comedor" alt="comedor" />
        <p>
            En este caso se ha conservado la distribución, pero se ha retirado el suelo existente, 
            así como el embaldosado, y alicatado de los baños y la cocina. Ya que se cambiaban suelos
            y paredes, se aprovechó para abrir rozas para renovar las instalaciones de electricidad 
            y fontanería, como podéis imaginar las rozas son los "huecos" por donde pasan las 
            instalaciones de toda la vivienda. Además de suelos y paredes, también se tiraron falsos
            techos pues había que sustituir la iluminación, así como preparar el techo para cambiar 
            la canalización del aire acondicionado. Otro punto interesante es que se retiró la 
            instalación del hilo musical y se tapó los huecos de los altavoces, no se ven muchas 
            viviendas con hilo musical, pero es una opción que también podemos implementar.
        </p>
        <p>
            Además de un nuevo sistema de aire acondicionado por conductos por el falso techo de la 
            vivienda, también se retiró el equipo aire acondicionado antiguo y se reemplazó por uno 
            más silencioso y con menor consumo. Asimismo se sustituyeron los radiadores por unos 
            nuevos. 
        </p>
        <p>
            Seguimos con la cocina, la cual se ha reformado por completo. Se ha planteado un diseño 
            de cocina con dos bancadas y muebles en dos acabados de madera, muebles bajos en tono 
            claro y altos en tono oscuro. Para dar mayor contraste al conjunto, en los muebles se ha 
            colocado una encimera porcelánica de color oscuro (basalto). Este tipo de encimeras de 
            gran resistencia se componen de minerales sometidos a gran presión y temperatura.
        </p>
        <img src="/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/cocina-3.jpg" title="cocina" alt="cocina" />
        <p>
            Otro detalle interesante de la cocina es el alicatado las paredes, con una baldosa blanco
            mate lisa con perfiles a media altura, y en el frente de los fuegos se ha colocado una 
            baldosa con relieve para crear un punto de interés. Este diseño suele usarse también en 
            baños revistiendo en frente de la ducha con baldosa de otro tono o con una textura. Otro
            recurso sería revestir el frente con el mismo material que la encimera, o colocar un 
            frente de cristal en algún color, estas alternativas se aplican hasta la altura de la 
            campana o de los muebles altos.
        </p>
        <p>
            La vivienda consta dos baños que se han reformado completamente. En ambos se ha 
            colocado plato de ducha de resina con mampara de cristal, ducha termo-estática, inodoro 
            con tapa amortiguada, mueble con acabado a juego con el suelo y radiador toallero. Como 
            podemos observar en ambos baños nos encontramos dos líneas de color, uno en blancos y 
            otro en tonos tierra.
        </p>
        <img src="/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/baño-dormitorio-2.jpg" title="baño" alt="baño" />
        <p>
            Hasta ahora no habíamos comentado el suelo de la cocina y los baños, pero porque aquí 
            tenemos una de las características más interesantes de la vivienda. Se ha embaldosado TODA
            la vivienda con gres porcelánico imitación madera, ya que este tipo de materiales son muy
            resistentes y conservan el aspecto estético de la madera, además son muy fáciles de 
            limpiar. También nos proporcionan continuidad en todas las zonas de la vivienda.
        </p>
        <p>
            <a href="www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-vinedo-viejo" tagert="_blank" >Aquí</a> puedes ver 
            más imágenes de este trabajo. La verdad es que viendo estos resultados dan ganas de 
            reformarse el piso, así que si tienes alguna duda puedes consultarnos sin ningún problema.
            Puedes ponerte en contacto con nosotros a través del <strong>976 56 55 24</strong>, o si
            prefieres enviar un e-mail a <strong>info@nzreformas.es</strong>, desde la 
            <a href="www.nzreformas.es" > página de contacto</a> o venir a nuestra 
            <a target="_blank" href="https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es" >
                exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.
        </p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reforma-integral-de-vivienda-en-vinedo-viejo.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reforma-integral-de-vivienda-en-vinedo-viejo');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
         $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-07-25 15:54:10'));
        $article->setUpdated(new \DateTime('2017-07-25 15:54:10'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
