<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformaMiguelServetFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reforma integral de ático en Zaragoza (calle Miguel Servet) | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reforma integral de ático en Zaragoza (calle Miguel Servet)');
        $article->setArticle('<p>
				El proyecto de reforma para esta vivienda se plantea de manera integral.
			<br>
				Partimos de una configuración inicial consistente en recibidor, salón comedor, dos dormitorios dos baños, cocina y terraza descubierta.
			<br>
				El cliente quiere una nueva distribución, por lo que una vez se aprueba el proyecto, se procede con los trabajos de derribo y demolición, incluidos falsos techos, alicatados y pavimentos. Se procede a continuación con el levantamiento de tabiquería y cerramientos, tapiado de carpinterías exteriores, pavimentado, revestimientos y falsos techos.
			<br>
				La reforma incluye la sustitución de fontanería (en el baño y cocina) e instalación eléctrica. 
			<br>
				También instalación de caldera.
			<br>
				Se han realizado también trabajos de impermeabilización.
			</p>
			<p>
				Tanto la puerta de acceso al ático, como las puertas de paso interiores, se han adaptado a minusválidos, por lo que se han modificado los cabeceros y estructuras.
			</p>
			<p>
				Existía de origen un desnivel en la vivienda, por lo que ha sido necesaria la demolición del pavimento y suelo elevado hasta llegar al forjado de la edificación, y a partir de ahí, se ha recrecido y nivelado para posteriormente proceder a la colocación del suelo laminado en pasillo, salón, cocina y habitaciones, incluido el rodapié, con resolución de esquinas, uniones y encuentros.
			</p>
			<p>
				Se ha realizado el suministro y montaje de instalación interior de fontanería para cuarto de baño y cocina, con dotación para inodoro, lavabo sencillo y plato de ducha, así como fregadero, lavadora y lavavajillas.
			</p>
			<p>
				También se ha realizado el montaje e instalación de calefacción, incluido el suministro de radiadores en la vivienda.
			</p>
			<p>
				Ha sido necesaria la instalación de red eléctrica completa de distribución interior del piso, para recibidor, pasillo, dos dormitorios, salón, cocina, baño, aseo y terraza.
			</p>
			<p>
				Para ocultar todas las instalaciones, se ha colocado, en toda la vivienda, un falso techo continuo de placas de escayola, con repaso de juntas e instalación de accesorios y medios auxiliares. 
			</p>
			
			<img src="http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/salon-2.jpg" >
			
			<p>
				Nada más acceder al ático, a mano derecha nos encontramos con uno de los espacios principales: el salón, con acceso a la terraza. Para lograr una estancia amplia y luminosa, se ha pintado el techo con pintura plástica lisa mate lavable en color blanco, y las paredes, una vez alisadas, se han pintado en un tono gris como elemento decorativo.
			</p>
			<p>
				Para la carpintería exterior, tanto del salón como del resto del piso, se ha optado por la instalación de ventanas de aluminio anodizado con rotura de puente térmico y vidrio doble.
			</p>
			<p>
				Como elemento de protección de entrada de lluvia, se ha formado un resalte en la puerta de acceso a la terraza. 
			</p>

			<img src="http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/terraza-8.jpg" >
			
			<p>
				La terraza de origen era por completo abierta. Se ha practicado un cerramiento parcial de perfilería oculta, que ha requerido trabajo de albañilería e impermeabilización de cubierta inclinada. 
			</p>
			<p>
				Para una adecuada evacuación del agua de lluvia, se han creado pendientes con mortero de cemento, instalación de sumidero de aluminio y modificación de la bajante de las canales de las cubiertas superiores.
			</p>
			<p>
				Para el solado de la terraza, se ha colocado baldosa para exterior antideslizante con mortero de cemento y arena de río, incluido el rodapié, de características similares a la baldosa colocada. 
			</p>

			<img src="http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/cocina-1.jpg" >
			
			<p>
				A la cocina se accede a través del salón. Para lograr una máxima integración de ambas estancias y aprovechar espacios, se ha colocado una puerta corredera, mediante instalación de tabique auxiliar con estructura de armazón metálico con chapa grecada y malla metálica.
			</p>

			<img src="http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/cocina-3.jpg" >

			<p>
				En la cocina se ha buscado el efecto blanco/negro y alguna gama de gris, con líneas simples y puras para conseguir un efecto armonioso en coordinación con el salón.
				<br>
				El mobiliario lacado en blanco, hace destacar la encimera en color negro con brillo.
				<br>
				El alicatado de las paredes, previo rascado y alisado, se ha realizado con azulejo de gres esmaltado, incluido cortes, ingletes y piezas especiales.
				<br>
				Se han suministrado también los electrodomésticos y la grifería monomando.
			</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/');
        $imagen->setFile('bano-5.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reforma-integral-miguel-servet');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-04-25 15:52:10'));
        $article->setUpdated(new \DateTime('2017-04-25 15:52:10'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
