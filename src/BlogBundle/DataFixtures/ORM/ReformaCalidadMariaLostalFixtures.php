<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ReformaCalidadMariaLostalFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Reformas Zaragoza: una reforma de calidad en la calle María Lostal | NZ Reformas');
        $article->setDescription('');
        $article->setName('Reformas Zaragoza: una reforma de calidad en la calle María Lostal');
        $article->setArticle('<p>
				Os presentamos un nuevo proyecto dentro de las reformas en Zaragoza que realizamos. Se trata de una reforma integral de vivienda, en la calle María Lostal. Se incluye la instalación completa de nueva fontanería y nueva red eléctrica completa de distribución interior, así como del sistema de calefacción. Se realiza la reforma del baño y de la cocina, y el cerramiento de la terraza con perfilería oculta.
			</p>
			<p>
				El cliente solicita una nueva distribución del piso.
			</p>
			<p>
				Vamos a detallaros a continuación los trabajos realizados, paso a paso:
				<ol class="default">
					<li>
						<strong>Demoliciones, derribos y retirada de escombros.</strong>
						Previamente se protege el ascensor y los elementos comunes para evitar dañarlos durante la ejecución de la obra posterior. A continuación, se procede con el derribo y demolición con métodos manuales de los elementos actuales que se encuentran en el piso, siguiendo el plano aprobado por el cliente, y posterior limpieza y retirada de escombros y llevada a vertedero:
						<ul class="default" >
							<li>
								Revestimientos de suelos existentes: moqueta de suelo, parqué (incluido los rodapiés) y pavimentos de baldosa de gres.
							</li>
							<li>
								Elementos que recubren los paramentos verticales: papeles pintados, revestimientos textiles y alicatado en baños y cocina.
							</li>
							<li>
								Carpintería exterior de acristalamiento de aluminio: ventanas y puertas de acceso a terraza.
							</li>
							<li>
								Falso techo continuo de escayola de todo el ático, incluido el arco decorativo del pasillo
							</li>
							<li>
								Carpintería interior de madera: puertas de paso, incluso desmontaje de premarcos en aquellas que no vayan a ser repuestas.
							</li>
							<li>
								Tabiques de partición interior de fábrica: aquellos que deban ser retirados por incompatibilidad con la nueva distribución de la vivienda.
							</li>
							<li>
								Conducciones vistas de fontanería y calefacción
							</li>
							<li>
								Radiadores y elementos accesorios
							</li>
							<li>
								Equipamiento auxiliar en baños y cocina
							</li>
						</ul>
					</li>
					<li>
						<strong>Tabiquería y cerramientos.</strong>
						El proyecto de esta <strong>reforma en Zaragoza</strong> continúa con el levantamiento de la tabiquería necesaria para configurar la nueva distribución del piso, y el suministro, montaje e instalación de la nueva carpintería exterior, incluido el cerramiento de la terraza:
						<ul class="default" >
							<li>
								Construcción de nuevos tabiques de obra para partición interna, en ladrillo hueco doble o pladur, con aislamiento y placa especial
							</li>
							<li>
								Formación de nuevo tabique de ladrillo hueco para alojar puerta corredera.
							</li>
							<li>
								Tapiado parcial del hueco en cerramiento de fachada de terraza.
							</li>
							<li>
								Suministro y colocación de elemento de aislamiento térmico en paredes en contacto con el patio de luces, incluso placa especial en zonas a alicatar.
							</li>
							<li>
								Carpintería exterior de dos hojas en aluminio lacado en color blanco con las siguientes características: abertura doble en sistema oscilobatiente, con rotura de puente térmico (RPT) y vidrio de 4/14/4.
							</li>
							<li>
								Dotación y colocación de puertas de paso ciegas de 1 hoja, lacadas en blanco, en baño, cocina y habitación, incluidos herrajes, batideros y tapajuntas.
							</li>
							<li>
								Montaje de nueva puerta de acceso a la vivienda: blindada y lacada en blanco por la cara interior.
							</li>
							<li>
								Instalación de puerta corredera lisa ciega, lacada en blanco de dos hojas, que separa el despacho del salón.
							</li>
						</ul>
					</li>
					<li>
						<strong>Revestimientos y Falsos Techos.</strong>
						Se continúa con los trabajos referidos a paredes, techos y suelos, según el plano de <strong>reformas en Zaragoza</strong> de este ático:
						<ul class="default" >
							<li>
								Enlucido de los paramentos verticales de todo el piso.
							</li>
							<li>
								Picado y enlucido con mortero de cemento de paredes exteriores de terraza.
							</li>
							<li>
								Suministro y colocación de suelo laminado clase 32, serie Vitality Deluxe 4V de la marca Balterio, en color pino blanco, incluidos elementos auxiliares, junturas y rodapiés.
							</li>
							<li>
								Formación de revestimiento continuo de microcemento en paredes y suelo de aseo y baño principal, colores a elegir por la propiedad, acabado mediante imprimación tapaporos y sellador de acabado mate.
							</li>
							<li>
								Solado de cocina con baldosa de gres porcelánico modelo Forest Timber 15 x 90 de la casa Peronda, incluido rodapié.
							</li>
							<li>
								Dotación e instalación de falso techo continuo de placas de escayola.
							</li>
							<li>
								Pintado de paramentos verticales interiores y falsos techos con pintura plástica lisa mate lavable, en color blanco, incluso mano de imprimación y plastecido
							</li>
							<li>
								Dos manos aplicación de pintura en pared exterior de terraza de tipo lavable y transpirable para exteriores

							</li>
						</ul>
					</li>
					<li>
						<strong>Cerramiento parcial de terraza.</strong>
						Esta <strong>reforma en Zaragoza</strong> incluye cerrar parcialmente la terraza, que de origen era completamente descubierta, y cambio del pavimento del suelo:
						<ul class="default" >
							<li>
								Techo marca BRISA, fabricado con perfil GLOGER, lacado en color blanco, con cristal laminar 3+3, motorizado con dos motores, cuatro divisiones por donde se desplazan los paneles de cristal, tres paneles recogiéndose los delanteros en el trasero que es fijo. Motor vía radio, con un mando.
							</li>
							<li>
								Cerramiento frontal formado por puertas plegables serie CORVENT fabricadas en aluminio blanco y con cristal Climalit 4/14/4 de medidas 5100 de ancho por 2100 de alto. Siete hojas recogidas a un lado.
							</li>
							<li>
								Cuña lateral en aluminio lacado en blanco y policarbonato de 16 mm.
							</li>
							<li>
								Modificación de bajante de pluviales para la conducción de aguas hasta sumidero.
							</li>
							<li>
								Verja de 1,50 m. de altura colocada sobre peto de obra.
							</li>
						</ul>
					</li>
					<li>
						<strong>Instalación de fontanería.</strong>
						El proyecto de <strong>reformas en Zaragoza</strong> de este ático incluye nueva dotación de fontanería interior, con el siguiente detalle:
						<ul class="default" >
							<li>
								Para baño principal y para aseo con tres puntos de agua (inodoro, lavabo sencillo y ducha), realizada con polietileno reticulado (PE-X) para la red de agua fría y caliente
							</li>
							<li>
								Para cocina con cuatro puntos de agua (fregadero, lavavajillas, lavadora y terraza) realizado con el mismo material que baño y aseo.
							</li>
							<li>
								Red interior de evacuación para cocina y baños con dotación para fregadero, desagüe para lavavajillas, desagüe para lavadora y caldera, realizada con tubo de PVC serie B para red de desagües.
							</li>
							<li>
								Dotación y colocación de platos de ducha de resina Resigrés, incluso válvula de desagüe y grifería monomando.
							</li>
							<li>
								Montaje de mamparas de ducha para baño y aseo, de perfilería de aluminio, serie GME Aktual.
							</li>
						</ul>
					</li>
					<li>
						<strong>Instalación de Calefacción.</strong>
						La dotación de los elementos requeridos para la calefacción en este planteamiento integral de <strong>reformas en Zaragoza</strong> incluye la entrega y montaje de los siguientes componentes:
						<ul class="default" >
							<li>
								Un total de 7 radiadores de aluminio con distintos elementos cada uno (tres radiadores de 15 elementos, uno de 14, uno de 9, uno de 7 y uno de 5) para sistema bitubo, que incluye, llave, detentor, purgador, soportes, tapones y juntas.
							</li>
							<li>
								Colector de 4 vías con válvulas de corte, caja empotrable y racores de conexióN.
							</li>
							<li>
								Tubería de polietileno reticulado según requerimientos técnicos para para agua fria y agua caliente.
							</li>
						</ul>
					</li>
					<li>
						<strong>Instalación eléctrica.</strong>
						En el proyecto de <strong>reformas en Zaragoza</strong> de este ático, se diseña e implementa la nueva red interna de distribución de electricidad, según especificaciones del cliente y necesidades de la obra, con el siguiente detalle (incluye el suministro y montaje de los distintos componentes):
						<ul class="default" >
						 	<li>
								Derivación individual compuesta por cable de cobre según requerimientos técnicos.
							</li>
							<li>
								Cuadro de mando y protección para vivienda de electrificación elevada, con caja empotrable de puerta opaca y especificidades concretas.
							</li>
							<li>
								Circuito de alumbrado compuesto por cable de cobre de acuerdo a las especificaciones del proyecto.
							</li>
							<li>
								Circuito de tomas de corriente de cocina y baños, y de usos varios a lo largo de todo el piso, establecida en cable de cobre y con las características dispuestas en la obra.
							</li>
							<li>
								Varias de puntos de luz, enchufes y tomas para teléfono según se recoge en la memoria de obra.
							</li>
							<li>
								Luminarias y halógenos varios.
							</li>
							<li>
								Certificado de instalación eléctrica, memoria técnica de diseño y comunicación a Organismo de Centro Autorizado.
							</li>
						</ul>
					</li>
					<li>
						<strong>Nuevo sistema de climatización.</strong>
						Para la instalación de aire acondicionado, dentro del <strong>proyecto de reformas</strong> en Zaragoza de este ático, se suministra e instala un split de pared modelo Mitsubishi MSZ-EF35VE Kirigamine Zen. Se incluyen los trabajos de albañilería necesarios.
					</li>
					<li>
						<strong>Otros equipamientos.</strong>
						Para completar la <strong>reforma en Zaragoza</strong> que os presentamos, se suministran e instalan otros equipamientos:
						<ul class="default" >
							<li>
								Columna de horno y microondas modelos Teka 435 y Teka 26 FY.
							</li>
							<li>
								Diversas baldas fijadas a la pared para usos varios.
							</li>
							<li>
								Púas anti-paloma fijadas con producto adhesivo en perímetro de terraza.
							</li>
							<li>
								aplique tendedor de pared de dos cuerdas, con blocaje individual por cuerda y recogida automática.
							</li>
							<li>
								Tendedero de pared con barras desplegables, en material plástico y acero.
							</li>
						</ul>
					</li>
				</ol>
			</p>
			<p>Accede aquí al resto de 
                        <a href="http://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-maria-lostal" target="_blank">
                        fotografías del proyecto de reforma</a></p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reformas-zaragoza-una-reforma-de-calidad-en-la-calle-maria-lostal.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('reforma-de-calidad-maria-lostal');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
         $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-05-23 15:32:42'));
        $article->setUpdated(new \DateTime('2017-05-23 15:32:42'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
