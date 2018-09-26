<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformaBañoMicrocementoSainzVarandaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reforma de baño con microcemento en Sainz de Varanda | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reforma de baño con microcemento en Sainz de Varanda');
        $article->setArticle('
            <p>¡Buenos días! </p>
            <img src="/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/cocina-condes-de-aragon-despues-5.jpg" title="Cerramiento" alt="Cerramiento" />
            
            - Desmontado y retirada de bañera existente, preparación de suelo para: plato de ducha 
                de resina antideslizante, Centuria Inox
                
            - Sustitución de mueble de baño por uno nuevo: mueble de lavabo con poza de porcelana desplazada a 
                una lado, mueble auxiliar y espejo.
                
            - Retirada de bide y anulación de la toma.
            
            - Aplicación de microcemento del color deseado en el suelo y el frente de ducha.
            
            - Suministro e instalación mampara de cristal transparente fijo+ movil SCREEN de GME
                o 2 fijos + 2 correderas TITAN GME
                        
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
