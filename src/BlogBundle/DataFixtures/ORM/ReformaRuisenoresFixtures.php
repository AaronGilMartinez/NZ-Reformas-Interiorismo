<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformaRuisenoresFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reforma de piso integral en paseo Ruiseñores | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reforma de piso integral en paseo Ruiseñores');
        $article->setArticle('<p>
            Hoy traemos una reforma de piso integral en paseo Ruiseñores, que además de ser una 
            vivienda grande, se ha renovado prácticamente todo. En este caso solo vamos a repasar lo
            más importante o interesante, si tuviéramos que citar todos los cambios esta entrada 
            podría prolongarse demasiado, así que ¡al tajo!
        </p>
        <p>
            Primero hay que comentar que era una vivienda grande, y se ha realizado un cambio en la 
            distribución,  así que como resultado tenemos ambientes muy amplios. En cuanto al suelo,
            no se ha retirado el antiguo, y se ha trabajado sobre este realizando las actuaciones 
            necesarias para nivelarlo todo, y posteriormente colocar uno nuevo encima. Aprovechando 
            el cambio de distribución, se ha realizado una renovación completa de las instalaciones 
            de la vivienda: fontanería, calefacción (incluida caldera), y electricidad con iluminación
            LED.
        </p>
        <p>
            En cuanto a las ventanas, se han sustituido todas por unas nuevas de aluminio con rotura
            de puente térmico. En estas se ha instalado persianas motorizadas accionadas por 
            interruptor, que además de facilitar su uso, mejora el aislamiento acústico-térmico de 
            las mismas. Además se ha instalado un aislamiento térmico en el perímetro del muro en 
            contacto con el exterior para ahorrar energía.
        </p>
        <img src="/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/reforma-ruiseñores_4.jpg" title="comedor" alt="comedor" />
        <p>
            También se ha reformado la cocina, y cabe destacar el diseño de las dos bancadas, en las
            que se colocado una encimera de granito negro para conseguir contraste con los muebles 
            en blanco mate. Además, los muebles poseen tiradores integrados, que junto al encastre 
            del fregadero bajo encimera, crean una composición muy limpia. Un detalle interesante de
            la cocina es que se aprovechó el hueco del armario de la limpieza para encajar la nevera
            y que quedara enrasada con la pared, de esta manera conseguimos una cocina sin recovecos
            , ni salientes.
        </p>
        <p>
            La vivienda dispone de dos baños los cuales también se han reformado completamente, 
            ambos con un estilo similar para dar homogeneidad al conjunto. En los dos se ha buscado 
            funcionalidad, y encontraremos platos de ducha de resina extraplanos de color blanco con
            mamparas de cristal con hojas correderas, inodoro con tapa amortiguada y lavabo colgado 
            con semi-columna. Para revestir las paredes y el suelo se ha elegido una baldosa 
            porcelánica (color arena) por ser la más apta para estos entornos con tanta humedad. 
            Esta misma baldosa se ha utilizado en cocina y terraza, ya que con el mismo material se 
            pueden conseguir diferentes resultados en distintos ambientes.
        </p>
        <p>
            Como en casi todas las reformas de piso, se alisa, y pinta paredes y techo. Este detalle
            parece un cambio menor, pero un piso cambia mucho después de un par de manos de pintura.
            Hemos realizado proyectos solamente de pintura, suelo y puertas, y solo con estos cambios
            el piso parece nuevo. En este caso también se han realizado estos trabajos. El suelo es 
            quizás el elemento más destacable de toda la reforma: madera de roble, lama de gran 
            formato, simplemente hay que ver las fotos. Cabe destacar que se han colocado paneles de
            madera en la parte alta de las puertas y un rodapié un poco más alto de lo habitual, y 
            el rodapié viste mucho. 
        </p>
        <img src="/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/reforma-ruiseñores_2.jpg" title="comedor" alt="comedor" />
        <p>
            Por último para optimizar aún más el espacio que la vivienda ofrecía, se fabricaron 
            armarios empotrados a medida para instalar en diferentes zonas de la casa. Como conclusión
            tenemos un proyecto de reforma dónde se realizaron todo tipo de cambios con el resultado
            de una vivienda grande con espacios muy bien aprovechados.
        </p>
        <p>
            Para ver más fotos de la reforma haz clic 
            <a href="http://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-en-paseo-ruisenores" target="_blank" >aquí</a>
            , y si viendo esta graaaan reforma te entran ganas de renovar tu piso, o tienes alguna 
            consulta, no dudes en llamar por teléfono al <strong>976 56 55 24</strong>, enviar un 
            mail a <strong>info@nzreformas.es </strong> o contactar desde 
            <a href="www.nzreformas.es/contacto" > esta página</a>. También puedes venir a vernos a
            nuestra exposición en 
            <a target="_blank" href="https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es" >
                Polígono el Portazgo Naves 58-59</a> , junto a la rotonda de Pikolín.
        </p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reforma-de-piso-integral-en-paseo-ruisenores.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reforma-de-piso-integral-en-paseo-ruisenores');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('diseno-de-interiores'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
         $article->addTag($this->getReference('ahorro-energetico'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-08-24 14:54:10'));
        $article->setUpdated(new \DateTime('2017-08-24 14:54:10'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
