<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class IntroExposicionFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Exposición de reformas en Zaragoza | NZ Reformas');
        $article->setDescription('');
        $article->setName('Exposición de reformas en Zaragoza');
        $article->setArticle('
            <p>Realizar un proyecto de reforma es un asunto a considerar, no solo el plantearse si 
            se va a realizar o no, sino "con quien", el coste que pueda tener, la duración de la 
            misma, dificultades que puedan surgir, y más temas que no se conocen hasta que uno se 
            adentra en este mundo.</p>

            <p>El proceso de un proyecto de reforma, de algo tan importante como tu hogar, puede 
            variar mucho, en NZ cuidamos cada detalle y nos esforzamos al máximo para conseguir tu 
            casa tal y como la imaginas. No hay mejor manera de demostrar nuestras aptitudes que la 
            opinión de nuestros clientes y el historial de reformas realizadas. Disponemos de varias
            galerías de imágenes de proyectos realizados.</p>

            <p>Las fotos de reformas realizadas están bien, pero quizás no consigan reflejar todos los 
            detalles, o el efecto de una reforma de piso como lo haría verlo en persona. Por esa 
            razón en NZ queremos ir un paso más allá, y mostrar a nuestros clientes no solo los 
            resultados, sino además las posibilidades que ofrece un proyecto bien planteado y 
            realizado. De modo que NZ Reformas abre las puertas de su exposición.</p>

            <p>Toda la exposición en sí ha sido un macro-proyecto de reforma, se ha renovado una 
            nave antigua, por fuera y por dentro, desde la exposición hasta la oficina donde 
            trabajamos. Todas las zonas de la exposición han sido pensadas para ser aprovechadas al 
            máximo dar una sensación de amplitud, pues son muchos los detalles que hay que enseñar 
            de cada zona. ¿Qué encontrarás en la exposición? Pues a grandes rasgos, solución a todo 
            tipo de necesidades de reforma. La exposición está distribuida por zonas, cada zona está
            enfocada a una función desde más genéricas (viviendas) a más concretas (encimeras, 
            armarios, baldosas, …).</p>
            
            <h3>Viviendas</h3>
            <ul class="default">
                <li>Las viviendas son el núcleo de la exposición, y el resto de espacios giran en torno a
                estas. Tenemos varios ejemplos de viviendas completas con diferentes estilos, y la 
                mayoría oscilan los 60-70m2. Son en total cinco viviendas:</li>

                <li>La <b>vivienda 1</b> está enfocada hacia un estilo industrial, pocos colores vivos bajo luz 
                indirecta. En la vivienda encontraremos una cocina en tonos grises, con isla y zona de 
                lavanderia. Separado de la cocina por un biombo de madera, está el dormitorio, donde 
                tenemos un frente de baldosa imitación de ladrillo. Una habitación con armario vestidor.
                Por último un baño con grifería empotrada y suelo continuo de microcemento.</li>
            
                <li>En la <b>vivienda 2</b> tenemos un ejemplo de vivienda contemporánea. En esta vivienda 
                salón y cocina fusionan en un espacio diáfano de colores claros, para dar sensación 
                de amplitud y luminosidad. Más adelante nos encontraremos un baño sencillo: mueble, 
                un inodoro con la cisterna empotrada y ducha con mampara de cristal. Por último 
                tenemos un dormitorio con papel decorativo y mesillas de noche a ambos lados de la 
                cama. En frente, una mesa de trabajo suspendida y un armario empotrado.</li>
                
                <li>Para la <b>vivienda 3</b> se ha planteado un diseño con contrastes muy marcados y matices
                de estilo nórdico. Esta es la vivienda más grande de la exposición, y tiene de todo.
                En la entrada de la vivienda tenemos dos armarios blancos con puertas en acordeón, y
                una puerta corredera de gran formato que da a la cocina. En baño y cocina tenemos un
                juego de colores en blanco y negro. Además en el comedor encontramos muebles de madera,
                parquet y una solución de tabique móvil. Por último dormitorio en suite y muebles de
                diseño propio.</li>
                
                <li>La <b>vivienda 4</b> en la vivienda encontraremos matices de estilo rústico-moderno. En
                toda la vivienda (incluidos baño y cocina) se ha colocado suelo de bambú. En la 
                cocina se alternan tres colores, negro, gris y blanco, los cuales se plantean en los
                acabados de los muebles, la encimera y las paredes. En el baño conviven varios 
                materiales, bambú, madera, y piedra natural, esculpida a mano en el caso del plato 
                de ducha y la poza del lavabo. También se ha revestido con piedra el "exterior de la
                vivienda".</li>
                
                <li>La <b>vivienda 5</b> está diseñada con un estilo rústico. Los materiales básicos de esta
                composición son madera y piedra. Nada más entrar nos encontramos con la cocina-comedor,
                un espacio abierto en el que encontramos la madera trabajada de diferentes maneras. 
                En la cocina tenemos un juego de muebles de madera, y una encimera de granito. En la
                zona del comedor encontramos una chimenea con un frente decorativo de madera reciclada.
                Por último en el baño apreciamos tonos de estilo vintage. Esto solo algunos de los 
                aspectos de las viviendas, para obtener más información puedes visitar este enlace 
                con información y galerías de imágenes de la exposición.</li>
            </ul>

            <p>Contamos con cocinas y baños, desde gama alta a los más asequibles, por si quieres 
            reformar solo una parte de la vivienda sin gastarte mucho. Vamos a empezar por las 
            cocinas. Son tres cocinas (aparte de las que tenemos en las viviendas):</p>
            <ul class="default" >
                <li><b>Cocina escaparate</b>: aquí encontramos una cocina con muebles de color blanco y 
                acabados en tonos claros. Quizás lo más destacable de esta cocina sea la isla, la 
                cual está revestida de material porcelánico con acabado mármol blanco. Con esta isla
                conseguimos ubicar la vitro en el centro de la cocina, y gracias al vuelo de la misma
                creamos un espacio extra que sirve de mesa.</li>
                
                <li><b>Cocina entrada</b>: en esta cocina tenemos un diseño más urbano con algún matiz retro.
                Para la pared se ha elegido un acabado decorativo de ladrillo, y en el suelo una 
                baldosa hexagonal en diferentes tonos de gris. Además los muebles se han escogido 
                con diferentes acabados madera, blanco y los cajones en rojo brillante. Un detalle 
                muy llamativo es la “placa dominó”, son varios módulos con diferentes funciones: 
                barbacoa, gas e inducción. Este “dominó” es una solución de Bosch en la que se pueden
                combinar varias tecnologias. Por último encontramos una encimera en dos acabados de 
                Dekton.</li>
                
                <li><b>Cocina TOP</b>: nuestro ejemplo de cocina más rentable, buena calidad a un precio 
                asequible. Es una cocina totalmente funcional y dispone de todo lo necesario para 
                ser un master-chef. Muebles de cocina con un acabado en madera clara con tiradores 
                sencillos, y fregadero sobre encimera de color oscuro. Electrodomésticos de Fagor: 
                nevera, lavavajillas, horno, lavadora, microondas, vitrocerámica de inducción y 
                campana de extracción. La cocina esta iluminada sobre un fondo de baldosa (STN) en 
                diferentes tonos.</li>
            </ul>
                
            <p>Continuamos con los baños, se podría dividir en dos zonas: por un lado tenemos una 
            colección de baños con diferentes estilos y por otro el baño TOP:</p>

            <ul class="default" >
                <li><b>Colección de baños</b>: aquí tenemos nuestra pequeña colección de baños, en total 
                son seis baños con diferentes estilos. Cubren todas las posibilidades que se pueden 
                plantear para un baño: pequeños y grandes, bañera o ducha, inodoro a suelo o 
                suspendido, con o sin bidé, todo tipo de muebles para lavabo, grifería y diferentes 
                acabados en suelos y paredes.</li>
                
                <li><b>Baño TOP</b>: al igual que en la cocina TOP, la mejor relación calidad/precio para 
                un baño con ducha, lavabo e inodoro. En la ducha tenemos un plato de ducha de resina
                con un frontal de baldosa con relieve y mampara de cristal. Para el lavabo se ha 
                elegido un mueble de baño con espejo y apliques led, además de un mueble-columna, 
                ambos con un acabado en Nogal. Por último pero no menos importante, un inodoro a 
                suelo.</li>
            </ul>

            <p>También disponemos de unos espacios (los llamamos "corners") con temas más concretos.
            Cada corner puede ser un mundo, detrás de cada uno hay una gran variedad marcas 
            especializadas en ese tema:</p>
            <ul class="default" >
                <li><b>Encimeras</b>: un corner dónde cubrimos todos los materiales existentes en el mercado
                con grandes marcas: Silestone, Compac, Neolith (TheSize), Laminam, Dekton, Lapitek, …</li>
                
                <li><b>Muebles de cocina</b>: una zona para los de donde puedes comparar entre diferentes 
                formas y acabados. Este corner está diseñado para crear los muebles de cocina a tu 
                gusto.</li>
                
                <li><b>Armarios</b>: el corner para armarios con diferentes acabados, mecanismos de 
                apertura/cierre, y distribuciones para el interior del armario que siempre has soñado.</li>
                
                <li><b>SPA</b>: tenemos dos zonas, un baño en el que se ha dado formas curvas a las paredes
                y al lavabo con corcho de alta densidad. Por otro lado un baño turco para los más 
                caprichosos.</li>
                
                <li><b>Zona infantil</b>: disponemos de un amplio catálogo de muebles modulares que nos 
                permiten realizar cualquier combinación para dormitorios infantiles y juveniles. De 
                esta manera podemos conseguir diferentes zonas: estudio, descanso y ocio… dentro del
                mismo espacio.</li>
                
                <li><b>Puertas</b>: presentamos nuestra pequeña colección de puertas con estilos para todos
                los gustos, desde la minimalista lacada en blanco a la clásica de roble con molduras.</li>
                
                <li><b>Accesibilidad</b>: disponemos de un espacio con elementos de cuarto de baño para 
                personas con movilidad reducida: mampara sin perfil inferior, barras de apoyo, 
                lavabo regulable, espejo fijo inclinado, inodoro-bidet …</li>
                
                <li><b>Piscinas y exterior</b>: aquí se agrupan diferentes soluciones para exterior como 
                mortero monocapa de diferentes colores, gresite para piscinas, césped artificial y 
                diferente tipos de revestimientos.</li>
                
                <li><b>Microcemento</b>: este corner está totalmente dedicado al microcemento en diferentes
                colores y formas. Además de aplicarse en viviendas puede dar un aspecto urbano en 
                locales comerciales.</li>
                
                <li><b>Policarbonato</b>: es un buen material para decoración con ventajas grandes respecto
                al cristal: mayor resistencia, menor peso, larga vida, rango de temperaturas muy 
                amplio, cualquier color y forma. Como resultado obtenemos un material muy bueno para
                elementos decorativos con mucha personalidad.</li>
                
                <li><b>Iluminación</b>: en este corner se adoptan varias soluciones para la iluminación del
                hogar. El espacio está enfocado a una iluminación general como focos y mecanismos, 
                una combinación de tonos de luz y diferentes acabados.</li>
            </ul>
            <p>Además de las viviendas, baños, cocinas y los corners existen varios expositores. En 
            los expositores tenemos una GRAN variedad de muestras:</p>
            <ul class="default" >
                <li><b>Baldosas</b>: este es el expositor que nos da la bienvenida a la exposición. Contiene 
                una gran variedad modelos de baldosa, nada menos que 152 paneles. En cada panel tenemos 
                el nombre del modelo con una foto ambiente. También contiene una o varias baldosas del 
                modelo con los diferentes acabados, incluso en algunos paneles aparece un conjunto 
                de varias baldosas para tener una perspectiva más clara.</li>
                
                <li><b>Baldosas de gran formato</b>: en este corner el tamaño importa, aquí mostramos 
                baldosa de gran formato. Esta baldosa además de servir en espacios amplios, puede 
                utilizarse para espacios más pequeños como cocinas y baños, dónde una baldosa ocupa 
                toda una pared. Además del aspecto estético, utilizar este formato no supone un coste
                superior al de una baldosa de buena calidad.</li>
                
                <li><b>Grifería</b>: aquí es donde acudiremos para elegir la grifería de la cocina y el baño.
                Tenemos una gran variedad de modelos de diferentes estilos para fregadero, lavabo, 
                bidé, bañera y ducha.</li>
                
                <li><b>Suelos</b>: en esta zona encontraremos la misma idea que en el expositor de baldosas
                pero enfocada a todo tipo de suelos. Es un expositor de grandes paneles con diferentes
                muestras de suelos: laminado, bambú, madera y vinílicos.</li>
            </ul>
            <p>Además de todo esto, contamos con proveedores y especialistas de diferentes
            campos que nos permiten realizar todo tipo de obra: reformas en comunidades, 
            rehabilitaciones, impermeabilizaciones, locales comerciales, ...</p>

            <p>Iremos publicando diferentes artículos con temas específicos de detalles interesantes 
            que tenemos en la exposición, pero de momento para no dejaros con la miel en la boca 
            podéis obtener más información <a href="http://www.nzreformas.es/exposicion-de-reformas">
            aqui</a>, o mejor aún venir a visitarnos en persona a la exposición en el 
            <a href="https://www.google.com/maps/place/NZ+Reformas+Exposici%C3%B3n/@41.673397,-0.949329,15z/data=!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es-ES" target="_blank">Poligono el Portazo Naves 58-59, junto a rotonda de Pikolín</a>. También 
            disponemos de una <a href="https://www.google.com/maps?ll=41.645879,-0.908825&amp;z=15&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=embed&amp;cid=11812223659264856053" target="_blank">exposición de cercanías en Calle Duquesa Villahermosa 115</a>, una versión
            reducida de la exposición del Portazgo.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('exposición-de-reformas-en-Zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('exposicion-de-reformas-en-zaragoza');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-06-27 15:50:16'));
        $article->setUpdated(new \DateTime('2017-06-27 15:50:16'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
