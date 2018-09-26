<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class CocinaCondesAragonFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reforma de cocina en Condes de Aragón | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reforma de cocina en Condes de Aragón');
        $article->setArticle('
            <p>¡Buenos días! Hoy traemos una reforma de cocina un poco distinta a lo habitual, no 
            solo por los resultados obtenidos, también por las premisas del cliente, el cual quería 
            una solución muy especial que veremos ahora.</p>
            <p>En este proyecto el objetivo ha sido conseguir un cambio completo de estilo por medio
            de una reforma parcial en la cocina. Con el fin de comunicar visualmente dos espacios 
            contiguos (cocina y salón), se ha llevado a cabo una apertura en la pared que los separa,
            colocando un cerramiento de forja y vidrio conforme al gusto del cliente. De este modo 
            logramos que la luz natural de la cocina fluya al salón, dando una sensación de espacio 
            abierto, y preservando a su vez la independencia de ambas estancias.</p>
            <img src="/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/cocina-condes-de-aragon-despues-5.jpg" title="Cerramiento" alt="Cerramiento" />
            <p>Dentro de la cocina se ha respetado el alicatado original hasta media altura, luciéndose 
            y pintando el resto de los paramentos. La premisa inicial era obtener un estilo nórdico, 
            combinando luminosidad, sencillez y naturalidad. Por ello, en el suelo se ha optado por 
            un pavimento laminado con propiedades hidrófugas, acabado Roble Helsinky en tonalidades 
            grises que combina a la perfección con la baldosa blanca existente y la pintura escogida.</p>
                        <img src="/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/cocina-condes-de-aragon-despues-10.jpg" title="cocina" alt="cocina" />
            <p>Siguiendo el mismo patrón de colores, los muebles de cocina tienden a superficies limpias
            y asépticas en blanco satinado con tiradores uñeros metalizados. La encimera de cuarzo 
            de color gris y el frontal de vidrio blanco brillo suman en su conjunto una línea 
            cromática que se complementa perfectamente con el resto de los elementos colocados.</p>
            <p><a href="www.nzreformas.es/proyectos/reformas-de-pisos/reforma-de-cocina-condes-de-aragon"
            tagert="_blank" >Aquí</a> podrás encontrar más imagenes del proyecto, aunque no sea un 
            proyecto tan grande como una reforma de piso, si que se han conseguido unos resultados 
            muy llamativos. Si te planteas reformar la cocina puedes consultarnos sin coste y ni 
            compromiso, nosotros te asesoramos. Para ponerte en contacto con nosotros puedes ahcerlo
            a través del <strong>976 56 55 24</strong> , o si prefieres enviar un e-mail a <strong>
            info@nzreformas.es</strong>, desde la <a href="www.nzreformas.es" > página de contacto</a>
            o venir a nuestra <a target="_blank" href="https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es" >
                exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/');
        $imagen->setFile('cocina-condes-de-aragon-despues-1.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reforma-de-cocina-en-condes-de-aragon');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-08-31 15:54:10'));
        $article->setUpdated(new \DateTime('2017-08-31 15:54:10'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
