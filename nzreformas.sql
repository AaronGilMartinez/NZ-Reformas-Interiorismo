-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2018 a las 12:44:17
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nzreformas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_classes`
--

CREATE TABLE `acl_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_entries`
--

CREATE TABLE `acl_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `object_identity_id` int(10) UNSIGNED DEFAULT NULL,
  `security_identity_id` int(10) UNSIGNED NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) UNSIGNED NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_object_identities`
--

CREATE TABLE `acl_object_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_object_identity_id` int(10) UNSIGNED DEFAULT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_object_identity_ancestors`
--

CREATE TABLE `acl_object_identity_ancestors` (
  `object_identity_id` int(10) UNSIGNED NOT NULL,
  `ancestor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_security_identities`
--

CREATE TABLE `acl_security_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id`, `image_id`, `category`, `name`, `title`, `description`, `slug`, `article`, `created`, `updated`) VALUES
(1191, 38445, 285, 'Reforma de cocina en Condes de Aragón', 'Reforma de cocina en Condes de Aragón | NZ Reformas', NULL, 'reforma-de-cocina-en-condes-de-aragon', '<p>¡Buenos días! Hoy traemos una reforma de cocina un poco distinta a lo habitual, no \r\n            solo por los resultados obtenidos, también por las premisas del cliente, el cual quería \r\n            una solución muy especial que veremos ahora.</p>\r\n            <p>En este proyecto el objetivo ha sido conseguir un cambio completo de estilo por medio\r\n            de una reforma parcial en la cocina. Con el fin de comunicar visualmente dos espacios \r\n            contiguos (cocina y salón), se ha llevado a cabo una apertura en la pared que los separa,\r\n            colocando un cerramiento de forja y vidrio conforme al gusto del cliente. De este modo \r\n            logramos que la luz natural de la cocina fluya al salón, dando una sensación de espacio \r\n            abierto, y preservando a su vez la independencia de ambas estancias.</p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/cocina-condes-de-aragon-despues-5.jpg\" title=\"Cerramiento\" alt=\"Cerramiento\" />\r\n            <p>Dentro de la cocina se ha respetado el alicatado original hasta media altura, luciéndose \r\n            y pintando el resto de los paramentos. La premisa inicial era obtener un estilo nórdico, \r\n            combinando luminosidad, sencillez y naturalidad. Por ello, en el suelo se ha optado por \r\n            un pavimento laminado con propiedades hidrófugas, acabado Roble Helsinky en tonalidades \r\n            grises que combina a la perfección con la baldosa blanca existente y la pintura escogida.</p>\r\n                        <img src=\"/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/cocina-condes-de-aragon-despues-10.jpg\" title=\"cocina\" alt=\"cocina\" />\r\n            <p>Siguiendo el mismo patrón de colores, los muebles de cocina tienden a superficies limpias\r\n            y asépticas en blanco satinado con tiradores uñeros metalizados. La encimera de cuarzo \r\n            de color gris y el frontal de vidrio blanco brillo suman en su conjunto una línea \r\n            cromática que se complementa perfectamente con el resto de los elementos colocados.</p>\r\n            <p><a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-de-cocina-condes-de-aragon\"\r\n            target=\"_blank\" >Aquí</a> podrás encontrar más imagenes del proyecto, aunque no sea un \r\n            proyecto tan grande como una reforma de piso, si que se han conseguido unos resultados \r\n            muy llamativos. Si te planteas reformar la cocina puedes consultarnos sin coste y ni \r\n            compromiso, nosotros te asesoramos. Para ponerte en contacto con nosotros puedes ahcerlo\r\n            a través del <strong>976 56 55 24</strong> , o si prefieres enviar un e-mail a <strong>\r\n            info@nzreformas.es</strong>, desde la <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" > página de contacto</a>\r\n            o venir a nuestra <a target=\"_blank\" href=\"https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es\" >\r\n                exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.</p>', '2017-08-31 15:54:10', '2017-08-31 15:54:10'),
(1193, 38450, 285, 'Descubre una de las mejores empresas de reformas en Zaragoza', 'Empresa experimentada en reformas en Zaragoza', 'Descubre como hacer realizar realidad tus proyectos con las mejores empresas de reformas en Zaragoza de más calidad y de la forma más profesional.', 'empresas-de-reformas-en-zaragoza', '<p>Una de las maneras de conseguir modificar nuestro espacio de \r\n            trabajo o de residencia es realizar un proyecto para cambiar las estancias. Este \r\n            proyecto, en muchas ocasiones requiere contar con la presencia de <a href=\"/\"<b>empresas de reformas \r\n            en Zaragoza</b></a> o en el lugar que nos encontremos. En NZ Reformas proporcionamos apoyo a la\r\n            rehabilitación o modificación de sus espacios con las garantías de trabajar con \r\n            profesionales avalados por más de 20 años de experiencia en el sector. Ya que como una \r\n            de las empresas de reformas en Zaragoza, buscamos ofrecer el mejor \r\n            servicio, al mejor precio y siempre contando con la confianza depositada por nuestros \r\n            clientes en nuestro equipo de profesionales.</p>\r\n            \r\n            <p>Así, en NZ Reformas, disfrutamos pudiendo hacer que nuestros clientes vean en la \r\n            realidad su proyecto, sobre todo, que podamos realizar todo el trabajo basándonos en la \r\n            excelencia y en la profesionalidad de un equipo multidisciplinar y que cumple con todas \r\n            las expectativas de quien nos contrata.</p>\r\n            \r\n            <p>En NZ Reformas, somos conscientes que para nuestros clientes lo más importante es \r\n            conseguir realizar sus proyectos de la manera más profesional, rápida y con las máximas\r\n            garantías de satisfacción, es por ello que trabajamos con profesionales especializados \r\n            desde el momento inicial hasta la finalización de la rehabilitación o reforma para \r\n            garantizar un resultado óptimo, acorde a los requerimientos de nuestros usuarios.</p>\r\n            \r\n            <p>Nuestros equipos técnicos, cuentan con profesionales de todos los ámbitos involucrados\r\n            en la realización de todo tipo de reformas o modificaciones de espacios, es por ello, \r\n            que sabemos que como empresa de reformas e <a href=\"/blog/impermeabilizaciones-en-zaragoza\">impermeabilizaciones enZaragoza</a>, \r\n            podemos ofrecer siempre el mejor trato a todos nuestros clientes. Destacamos siempre el valor \r\n            añadido de la experiencia y la excelencia, tanto en el trato como en el desarrollo de \r\n            nuestras actividades.</p>\r\n            \r\n            <p>No lo dude más y contáctenos a través de nuestra página de contacto para recibir un <a href=\"https://www.nzreformas.es/pedir-presupuesto\" >\r\n            presupuesto de reformas a medida</a>, correo electrónico (info@nzreformas.es) o teléfono (976 56 55 24) \r\n            para proponernos su proyecto y asesorarle. Le indicaremos cómo mejorarlo para conseguir \r\n            un espacio mucho más confortable y acorde a sus necesidades, ya sea a nivel personal \r\n            como profesional.</p>', '2017-01-26 16:27:56', '2017-01-26 16:27:56'),
(1194, 38449, 286, 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza | NZ Reformas', 'La empresa NZ Reformas está especializada en realizar impermeabilizaciones en Zaragoza tanto en edificios antiguos como de nueva construcción.', 'impermeabilizaciones-en-zaragoza', '<p>Las <b>impermeabilizaciones en Zaragoza</b> o en cualquier otro lugar, son\r\n            un proceso complejo que requiere de asesoramiento y de la participación de profesionales\r\n            especializados en el sector constructivo como es el caso de la <a href=\"https://www.nzreformas.es/empresa\" >empresa NZ Reformas</a>.  Este proceso \r\n            evita el paso del agua y demás filtraciones para paredes, techos, terrazas, etc. ya que \r\n            con esta técnica se evita la porosidad de los materiales utilizados en la construcción \r\n            del edificio.</p>\r\n\r\n            <p>Lo importante es que las impermeabilizaciones en Zaragoza o donde corresponda, deben \r\n            realizarse en los edificios antiguos o en los de nueva construcción con los materiales \r\n            adecuados. En el caso de tratarse de edificios antiguos, el <i>proceso de impermeabilización</i> \r\n            permite que se evite la filtración de agua en un periodo entre 5 y 25 años, dependiendo \r\n            del material que se utilice en la realización de la misma.</p> \r\n\r\n            <p>En NZ Reformas, realizamos todo tipo de trabajos de impermeabilizaciones en la ciudad de Zaragoza,\r\n            para <b>garantizar la seguridad en las edificaciones</b> y poder alargar su vida, evitando la \r\n            porosidad de sus materiales y por tanto, la filtración de agua u otros elementos que \r\n            pueden deteriorar partes de la finca. Es por ello que lo más recomendable es realizar \r\n            este tipo de trabajos con los profesionales adecuados para garantizar que tanto la \r\n            aplicación como el resultado final sea el correcto. Ya que, además de realizar la \r\n            instalación de los materiales adecuados, es importante también disponer del sistema de \r\n            drenajes que mejor funcione y nos permita optimizar los materiales para evitar las \r\n            filtraciones.</p>\r\n            \r\n            <p>No lo dude más y contáctenos si necesita realizar impermeabilizaciones en Zaragoza a \r\n            través de nuestra <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >página de contacto</a>, \r\n            correo electrónico (<a href=\"mailto:info@nzreformas.es\">info@nzreformas.es</a>) o teléfono (<b>976 56 55 24</b>). En NZ Reformas \r\n            estaremos encantados en proporcionarle el asesoramiento necesario para indicarle el tipo\r\n            de impermeabilización que mejor se adapte a su edificio o espacio, así como todo lo \r\n            necesario para que el trabajo final le proporcione el mejor aislamiento.</p>', '2017-02-21 15:13:25', '2017-02-21 15:13:25'),
(1195, 38416, 285, 'Exposición de reformas en Zaragoza', 'Exposición de reformas en Zaragoza | NZ Reformas', NULL, 'exposicion-de-reformas-en-zaragoza', '<p>Realizar un proyecto de reforma es un asunto a considerar, no solo el plantearse si \r\n            se va a realizar o no, sino \"con quien\", el coste que pueda tener, la duración de la \r\n            misma, dificultades que puedan surgir, y más temas que no se conocen hasta que uno se \r\n            adentra en este mundo.</p>\r\n\r\n            <p>El proceso de un proyecto de reforma, de algo tan importante como tu hogar, puede \r\n            variar mucho, en NZ cuidamos cada detalle y nos esforzamos al máximo para conseguir tu \r\n            casa tal y como la imaginas. No hay mejor manera de demostrar nuestras aptitudes que la \r\n            opinión de nuestros clientes y el historial de reformas realizadas. Disponemos de varias\r\n            galerías de imágenes de proyectos realizados.</p>\r\n\r\n            <p>Las fotos de reformas realizadas están bien, pero quizás no consigan reflejar todos los \r\n            detalles, o el efecto de una reforma de piso como lo haría verlo en persona. Por esa \r\n            razón en NZ queremos ir un paso más allá, y mostrar a nuestros clientes no solo los \r\n            resultados, sino además las posibilidades que ofrece un proyecto bien planteado y \r\n            realizado. De modo que NZ Reformas abre las puertas de su exposición.</p>\r\n\r\n            <p>Toda la exposición en sí ha sido un macro-proyecto de reforma, se ha renovado una \r\n            nave antigua, por fuera y por dentro, desde la exposición hasta la oficina donde \r\n            trabajamos. Todas las zonas de la exposición han sido pensadas para ser aprovechadas al \r\n            máximo dar una sensación de amplitud, pues son muchos los detalles que hay que enseñar \r\n            de cada zona. ¿Qué encontrarás en la exposición? Pues a grandes rasgos, solución a todo \r\n            tipo de necesidades de reforma. La exposición está distribuida por zonas, cada zona está\r\n            enfocada a una función desde más genéricas (viviendas) a más concretas (encimeras, \r\n            armarios, baldosas, …).</p>\r\n            \r\n            <h3>Viviendas</h3>\r\n            <ul class=\"default\">\r\n                <li>Las viviendas son el núcleo de la exposición, y el resto de espacios giran en torno a\r\n                estas. Tenemos varios ejemplos de viviendas completas con diferentes estilos, y la \r\n                mayoría oscilan los 60-70m2. Son en total cinco viviendas:</li>\r\n\r\n                <li>La <b>vivienda 1</b> está enfocada hacia un estilo industrial, pocos colores vivos bajo luz \r\n                indirecta. En la vivienda encontraremos una cocina en tonos grises, con isla y zona de \r\n                lavanderia. Separado de la cocina por un biombo de madera, está el dormitorio, donde \r\n                tenemos un frente de baldosa imitación de ladrillo. Una habitación con armario vestidor.\r\n                Por último un baño con grifería empotrada y suelo continuo de microcemento.</li>\r\n            \r\n                <li>En la <b>vivienda 2</b> tenemos un ejemplo de vivienda contemporánea. En esta vivienda \r\n                salón y cocina fusionan en un espacio diáfano de colores claros, para dar sensación \r\n                de amplitud y luminosidad. Más adelante nos encontraremos un baño sencillo: mueble, \r\n                un inodoro con la cisterna empotrada y ducha con mampara de cristal. Por último \r\n                tenemos un dormitorio con papel decorativo y mesillas de noche a ambos lados de la \r\n                cama. En frente, una mesa de trabajo suspendida y un armario empotrado.</li>\r\n                \r\n                <li>Para la <b>vivienda 3</b> se ha planteado un diseño con contrastes muy marcados y matices\r\n                de estilo nórdico. Esta es la vivienda más grande de la exposición, y tiene de todo.\r\n                En la entrada de la vivienda tenemos dos armarios blancos con puertas en acordeón, y\r\n                una puerta corredera de gran formato que da a la cocina. En baño y cocina tenemos un\r\n                juego de colores en blanco y negro. Además en el comedor encontramos muebles de madera,\r\n                parquet y una solución de tabique móvil. Por último dormitorio en suite y muebles de\r\n                diseño propio.</li>\r\n                \r\n                <li>La <b>vivienda 4</b> en la vivienda encontraremos matices de estilo rústico-moderno. En\r\n                toda la vivienda (incluidos baño y cocina) se ha colocado suelo de bambú. En la \r\n                cocina se alternan tres colores, negro, gris y blanco, los cuales se plantean en los\r\n                acabados de los muebles, la encimera y las paredes. En el baño conviven varios \r\n                materiales, bambú, madera, y piedra natural, esculpida a mano en el caso del plato \r\n                de ducha y la poza del lavabo. También se ha revestido con piedra el \"exterior de la\r\n                vivienda\".</li>\r\n                \r\n                <li>La <b>vivienda 5</b> está diseñada con un estilo rústico. Los materiales básicos de esta\r\n                composición son madera y piedra. Nada más entrar nos encontramos con la cocina-comedor,\r\n                un espacio abierto en el que encontramos la madera trabajada de diferentes maneras. \r\n                En la cocina tenemos un juego de muebles de madera, y una encimera de granito. En la\r\n                zona del comedor encontramos una chimenea con un frente decorativo de madera reciclada.\r\n                Por último en el baño apreciamos tonos de estilo vintage. Esto solo algunos de los \r\n                aspectos de las viviendas, para obtener más información puedes visitar este enlace \r\n                con información y galerías de imágenes de la exposición.</li>\r\n            </ul>\r\n\r\n            <p>Contamos con cocinas y baños, desde gama alta a los más asequibles, por si quieres \r\n            reformar solo una parte de la vivienda sin gastarte mucho. Vamos a empezar por las \r\n            cocinas. Son tres cocinas (aparte de las que tenemos en las viviendas):</p>\r\n            <ul class=\"default\" >\r\n                <li><b>Cocina escaparate</b>: aquí encontramos una cocina con muebles de color blanco y \r\n                acabados en tonos claros. Quizás lo más destacable de esta cocina sea la isla, la \r\n                cual está revestida de material porcelánico con acabado mármol blanco. Con esta isla\r\n                conseguimos ubicar la vitro en el centro de la cocina, y gracias al vuelo de la misma\r\n                creamos un espacio extra que sirve de mesa.</li>\r\n                \r\n                <li><b>Cocina entrada</b>: en esta cocina tenemos un diseño más urbano con algún matiz retro.\r\n                Para la pared se ha elegido un acabado decorativo de ladrillo, y en el suelo una \r\n                baldosa hexagonal en diferentes tonos de gris. Además los muebles se han escogido \r\n                con diferentes acabados madera, blanco y los cajones en rojo brillante. Un detalle \r\n                muy llamativo es la “placa dominó”, son varios módulos con diferentes funciones: \r\n                barbacoa, gas e inducción. Este “dominó” es una solución de Bosch en la que se pueden\r\n                combinar varias tecnologias. Por último encontramos una encimera en dos acabados de \r\n                Dekton.</li>\r\n                \r\n                <li><b>Cocina TOP</b>: nuestro ejemplo de cocina más rentable, buena calidad a un precio \r\n                asequible. Es una cocina totalmente funcional y dispone de todo lo necesario para \r\n                ser un master-chef. Muebles de cocina con un acabado en madera clara con tiradores \r\n                sencillos, y fregadero sobre encimera de color oscuro. Electrodomésticos de Fagor: \r\n                nevera, lavavajillas, horno, lavadora, microondas, vitrocerámica de inducción y \r\n                campana de extracción. La cocina esta iluminada sobre un fondo de baldosa (STN) en \r\n                diferentes tonos.</li>\r\n            </ul>\r\n                \r\n            <p>Continuamos con los baños, se podría dividir en dos zonas: por un lado tenemos una \r\n            colección de baños con diferentes estilos y por otro el baño TOP:</p>\r\n\r\n            <ul class=\"default\" >\r\n                <li><b>Colección de baños</b>: aquí tenemos nuestra pequeña colección de baños, en total \r\n                son seis baños con diferentes estilos. Cubren todas las posibilidades que se pueden \r\n                plantear para un baño: pequeños y grandes, bañera o ducha, inodoro a suelo o \r\n                suspendido, con o sin bidé, todo tipo de muebles para lavabo, grifería y diferentes \r\n                acabados en suelos y paredes.</li>\r\n                \r\n                <li><b>Baño TOP</b>: al igual que en la cocina TOP, la mejor relación calidad/precio para \r\n                un baño con ducha, lavabo e inodoro. En la ducha tenemos un plato de ducha de resina\r\n                con un frontal de baldosa con relieve y mampara de cristal. Para el lavabo se ha \r\n                elegido un mueble de baño con espejo y apliques led, además de un mueble-columna, \r\n                ambos con un acabado en Nogal. Por último pero no menos importante, un inodoro a \r\n                suelo.</li>\r\n            </ul>\r\n\r\n            <p>También disponemos de unos espacios (los llamamos \"corners\") con temas más concretos.\r\n            Cada corner puede ser un mundo, detrás de cada uno hay una gran variedad marcas \r\n            especializadas en ese tema:</p>\r\n            <ul class=\"default\" >\r\n                <li><b>Encimeras</b>: un corner dónde cubrimos todos los materiales existentes en el mercado\r\n                con grandes marcas: Silestone, Compac, Neolith (TheSize), Laminam, Dekton, Lapitek, …</li>\r\n                \r\n                <li><b>Muebles de cocina</b>: una zona para los de donde puedes comparar entre diferentes \r\n                formas y acabados. Este corner está diseñado para crear los muebles de cocina a tu \r\n                gusto.</li>\r\n                \r\n                <li><b>Armarios</b>: el corner para armarios con diferentes acabados, mecanismos de \r\n                apertura/cierre, y distribuciones para el interior del armario que siempre has soñado.</li>\r\n                \r\n                <li><b>SPA</b>: tenemos dos zonas, un baño en el que se ha dado formas curvas a las paredes\r\n                y al lavabo con corcho de alta densidad. Por otro lado un baño turco para los más \r\n                caprichosos.</li>\r\n                \r\n                <li><b>Zona infantil</b>: disponemos de un amplio catálogo de muebles modulares que nos \r\n                permiten realizar cualquier combinación para dormitorios infantiles y juveniles. De \r\n                esta manera podemos conseguir diferentes zonas: estudio, descanso y ocio… dentro del\r\n                mismo espacio.</li>\r\n                \r\n                <li><b>Puertas</b>: presentamos nuestra pequeña colección de puertas con estilos para todos\r\n                los gustos, desde la minimalista lacada en blanco a la clásica de roble con molduras.</li>\r\n                \r\n                <li><b>Accesibilidad</b>: disponemos de un espacio con elementos de cuarto de baño para \r\n                personas con movilidad reducida: mampara sin perfil inferior, barras de apoyo, \r\n                lavabo regulable, espejo fijo inclinado, inodoro-bidet …</li>\r\n                \r\n                <li><b>Piscinas y exterior</b>: aquí se agrupan diferentes soluciones para exterior como \r\n                mortero monocapa de diferentes colores, gresite para piscinas, césped artificial y \r\n                diferente tipos de revestimientos.</li>\r\n                \r\n                <li><b>Microcemento</b>: este corner está totalmente dedicado al microcemento en diferentes\r\n                colores y formas. Además de aplicarse en viviendas puede dar un aspecto urbano en \r\n                locales comerciales.</li>\r\n                \r\n                <li><b>Policarbonato</b>: es un buen material para decoración con ventajas grandes respecto\r\n                al cristal: mayor resistencia, menor peso, larga vida, rango de temperaturas muy \r\n                amplio, cualquier color y forma. Como resultado obtenemos un material muy bueno para\r\n                elementos decorativos con mucha personalidad.</li>\r\n                \r\n                <li><b>Iluminación</b>: en este corner se adoptan varias soluciones para la iluminación del\r\n                hogar. El espacio está enfocado a una iluminación general como focos y mecanismos, \r\n                una combinación de tonos de luz y diferentes acabados.</li>\r\n            </ul>\r\n            <p>Además de las viviendas, baños, cocinas y los corners existen varios expositores. En \r\n            los expositores tenemos una GRAN variedad de muestras:</p>\r\n            <ul class=\"default\" >\r\n                <li><b>Baldosas</b>: este es el expositor que nos da la bienvenida a la exposición. Contiene \r\n                una gran variedad modelos de baldosa, nada menos que 152 paneles. En cada panel tenemos \r\n                el nombre del modelo con una foto ambiente. También contiene una o varias baldosas del \r\n                modelo con los diferentes acabados, incluso en algunos paneles aparece un conjunto \r\n                de varias baldosas para tener una perspectiva más clara.</li>\r\n                \r\n                <li><b>Baldosas de gran formato</b>: en este corner el tamaño importa, aquí mostramos \r\n                baldosa de gran formato. Esta baldosa además de servir en espacios amplios, puede \r\n                utilizarse para espacios más pequeños como cocinas y baños, dónde una baldosa ocupa \r\n                toda una pared. Además del aspecto estético, utilizar este formato no supone un coste\r\n                superior al de una baldosa de buena calidad.</li>\r\n                \r\n                <li><b>Grifería</b>: aquí es donde acudiremos para elegir la grifería de la cocina y el baño.\r\n                Tenemos una gran variedad de modelos de diferentes estilos para fregadero, lavabo, \r\n                bidé, bañera y ducha.</li>\r\n                \r\n                <li><b>Suelos</b>: en esta zona encontraremos la misma idea que en el expositor de baldosas\r\n                pero enfocada a todo tipo de suelos. Es un expositor de grandes paneles con diferentes\r\n                muestras de suelos: laminado, bambú, madera y vinílicos.</li>\r\n            </ul>\r\n            <p>Además de todo esto, contamos con proveedores y especialistas de diferentes\r\n            campos que nos permiten realizar todo tipo de obra: reformas en comunidades, \r\n            rehabilitaciones, impermeabilizaciones, locales comerciales, ...</p>\r\n\r\n            <p>Iremos publicando diferentes artículos con temas específicos de detalles interesantes \r\n            que tenemos en la exposición, pero de momento para no dejaros con la miel en la boca \r\n            podéis obtener más información <a href=\"https://www.nzreformas.es/exposicion-de-reformas\">\r\n            aqui</a>, o mejor aún venir a visitarnos en persona a la exposición en el \r\n            <a href=\"https://www.google.com/maps/place/NZ+Reformas+Exposici%C3%B3n/@41.673397,-0.949329,15z/data=!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es-ES\" target=\"_blank\">Poligono el Portazo Naves 58-59, junto a rotonda de Pikolín</a>. También \r\n            disponemos de una <a href=\"https://www.google.com/maps?ll=41.645879,-0.908825&amp;z=15&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=embed&amp;cid=11812223659264856053\" target=\"_blank\">exposición de cercanías en Calle Duquesa Villahermosa 115</a>, una versión\r\n            reducida de la exposición del Portazgo.</p>', '2017-06-27 15:50:16', '2017-06-27 15:50:16'),
(1196, 38448, 285, 'Un elegante ático en la calle Miguel Servet', 'Un elegante ático en la calle Miguel Servet | NZ Reformas', NULL, 'elegante-atico-zaragoza', '<p>Queremos presentaros hoy una nueva <b>reforma en Zaragoza</b>: un ático con mucha personalidad.</p>\r\n<p>El cliente quería un proyecto sobrio y elegante, pero sobre todo que fuera una extensión de su propia personalidad, sin olvidar, por supuesto, esa calidez que hace de un piso un auténtico hogar. Un hogar donde tuvieran cabida sus vivencias y recuerdos, sus viajes y experiencias, que se insinúan claramente a través del mobiliario y decoración: un torbellino de colores que inunda las estancias en un claro alarde de exotismo y fuerza vital. Unos muebles que tienen vida y que respiran ese toque étnico y colonial, perfectamente integrado con objetos más antiguos que hacen verdaderamente única esta vivienda.</p>\r\n<p>La conjugación de todas estas premisas, unida a la búsqueda de un hogar práctico y funcional, han sido las claves para el desarrollo de esta <b><a href=\"https://www.nzreformas.es\">reforma integral en Zaragoza</a></b>.</p>\r\n<p>Como suele ser habitual, el salón se convierte en el corazón de la vivienda. Para conseguir que los muebles y elementos decorativos destacaran, se ha buscado recrear en la reforma un ambiente sin estridencias, con acabados de calidad pero que no le quitaran protagonismo a la decoración. Las paredes se han pintado en un blanco roto, al igual que el techo, que previamente se ha cubierto con un falso techo de escayola de líneas rectas y depuradas.</p>\r\n<p>Para la carpintería exterior se ha optado por grandes ventanales para aprovechar la potente luz natural que ilumina hasta el último rincón de la casa, con la parte interna y externa en blanco, en un claro propósito de buscar el máximo mimetismo con el conjunto.</p>\r\n<p>Una elegante puerta corredera, en lacado blanco y con molduras rectas, separa el despacho del salón. A pesar de sus grandes dimensiones, y de ser un elemento rotundo, su integración dentro del tabique disimula su presencia cuando está abierta.</p>\r\n<p>Lamas anchas en noble madera recubren el suelo de este ático. Para conseguir aportar ligereza al conjunto y no recargarlo visualmente, se ha elegido un tono claro para la tarima flotante, de gran resistencia al desgaste y tratada para conferirle ese aspecto de viejo que tan bien conjuga con el ambiente recreado.</p>\r\n<p>Las puertas de paso interiores se han lacado también en blanco, y se han integrado en los dormitorios los armarios empotrados, con puertas correderas también en el mismo color que aprovechan el espacio y le dan todo el protagonismo a la decoración.</p>\r\n<p>Mención aparte requiere el fabuloso vestidor, el sueño de todas las mujeres. Se instalaron baldas y colgadores para adecuar el espacio y aprovecharlo al máximo. La tarima flotante presente en el resto del piso se instaló también en el suelo del vestidor, y se instalaron halógenos en el techo para dotarlo de la máxima claridad.</p>\r\n<p>Para los baños se ha recreado en suelo y paredes un revestimiento en imitación estucado veneciano. Se ha montado en ambos un plato de ducha imitación pizarra, habilitando una mampara corredera que aprovecha el espacio y facilita la entrada.</p>\r\n<p>La cocina se ha revestido con un tipo de tarima resistente para estos ambientes, a la que se le ha aplicado un tratamiento superficial que evita el deterioro derivado de las salpicaduras y del propio uso en estas estancias. Con un mobiliario lacado en blanco y una encimera del mismo color, la única concesión se hace con la vitrocerámica, en negro, y con la nevera y columna de horno, en acero inoxidable.</p>\r\n<p>Una reforma integral en Zaragoza que respira por los cuatro costados la personalidad de sus habitantes, y que consigue traspasar los pixeles de la pantalla de tu ordenador para conmover el gusto de los más sibaritas.</p>', '2017-03-21 14:23:45', '2017-03-21 14:23:45'),
(1197, 38474, 285, 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda | NZ Reformas', NULL, 'reforma-de-bano-con-microcemento-en-sainz-de-varanda', '<p>\r\n                ¡Buenos días! Hoy tenemos una reforma parcial de baño, pero viene con sorpresa: microcemento.\r\n                Es un tema que habíamos nombrado pero sin estudiarlo en profundidad, y además de repasar \r\n                la reforma de baño, también veremos las virtudes y posibilidades del microcemento.\r\n            </p>\r\n            <p>\r\n                Para la reforma de baño se aplicó microcemento en el suelo y el frente de ducha. Se \r\n                eligió un color para el microcemento marrón oscuro en contraste con la baldosa existente\r\n                de las paredes, la cual se conservó. Además se sustituyó plato de ducha por otro nuevo, y \r\n                se instaló en el mismo una mampara de cristal. Hay que tener en cuenta que la tendencia actual se dirige a <a href=\"https://www.reformasintegraleszaragoza-nz.com/blog/cambiar-banera-por-ducha-zaragoza\" >cambiar bañeras por platos de ducha</a> así como a renovar los platos más antiguos. Por último se eligió un mueble de baño\r\n                con poza desplazada a la derecha para aprovechar la grifería empotrada existente.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/bano-sainz-de-varanda-3.jpg\" title=\"Cerramiento\" alt=\"Cerramiento\" />\r\n            <p>\r\n            Bueno ahora vamos con lo interesante, el microcemento, pero antes de nada, hay que saber\r\n            qué es. El microcemento es una técnica de aplicación de un componente basado en cemento,\r\n            áridos y polímeros, además incluyen colorantes para conseguir cualquier tono de color. \r\n            Normalmente el proceso de aplicación consiste en estos pasos:\r\n            </p>\r\n            <ol class=\"default\" >\r\n                <li>\r\n                    Limpieza de la zona: hace falta una superficie limpia, y libre de elementos móviles.\r\n                </li>\r\n                <li>\r\n                    Preparación de la superficie: antes de aplicar nada hay que asegurarse de que\r\n                    el componente va a \"agarrar\", para ello se aplica un puente de unión (es como\r\n                    un pegamento) o una imprimación, esto depende del material de la superficie. \r\n                    Además también se coloca una malla de fibra de vidrio para evitar que se agriete.\r\n                </li>\r\n                <li>\r\n                    Una vez lista la zona se aplican varias capas, entre cada aplicación se deja secar\r\n                    y se lija. Este proceso se repite hasta alcanzar 2 ó 3 mm de espesor.\r\n                </li>\r\n                <li>\r\n                    Por último se sella con un componente para proteger la superficie, para verlo\r\n                    más claro podríamos hacer un símil con el barniz. Además de proteger, este sellado\r\n                    puede tener diferentes grados de brillo que junto al color nos da una gama muy \r\n                    amplia de acabados.\r\n                </li>\r\n            </ol>\r\n            <p>\r\n                Una vez visto por encima el proceso aplicación podemos centrarnos en sus características,\r\n                y es que son muy peculiares y la primera salta a la vista, no tiene juntas, y presenta\r\n                un acabado continuo, estéticamente es una gran virtud, podemos crear diseños limpios.\r\n                También disponemos de una carta libre de colores, así que podríamos combinarlo con otros \r\n                materiales u otros tonos de microcemento.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/bano-sainz-de-varanda-4.jpg\" title=\"Cerramiento\" alt=\"Cerramiento\" />\r\n            <p>\r\n                No todo es apariencia, y otra de sus grandes características es que no necesita una \r\n                gran preparación previa, si tenemos que aplicar sobre baldosa no hace falta picado, y \r\n                se aplica sobre casi cualquier material sin problemas, y su aplicación no ensucia.\r\n            </p>\r\n            <p>\r\n                Además de ser vistoso, limpio y rápido, también es un material resistente, especialmente\r\n                al agua, lo que lo hace muy apto para baños. También es ignifugo, aséptico, refleja \r\n                la luz y el calor, antiestático, resistente al roce, adherente, baja difusión térmica,\r\n                ... Otra de sus ventajas es que tiene un mantenimiento muy sencillo, basta con agua \r\n                y jabón neutro para limpiarlo. Por contra solo tenemos una pega, y es que tenemos \r\n                otros materiales más duros y más aconsejables en zonas de transito. Por ejemplo no \r\n                recomendamos poner un suelo de cocina de microcemento, pero sí que estaría bien \r\n                ponerlo en paredes, junto a una baldosa porcelánica obtendríamos una combinación \r\n                ganadora.\r\n            </p>\r\n            <p>\r\n                Como conclusión tenemos una opción muy aconsejable si queremos reformar el baño \r\n                y no queremos meternos en grandes obras. <a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-de-cocina-condes-de-aragon\"\r\n                target=\"_blank\" >Aquí</a> podéis encontrar más fotos de este fantástico baño con \r\n                microcemento. Disponemos profesionales  especializados en microcemento y podéis \r\n                consultarnos desde <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >aqui</a>, llamar al \r\n                <strong>976 56 55 24</strong>, enviar un correo a <strong>info@nzreformas.es</strong>\r\n                , o visitarnos a la <a target=\"_blank\" href=\"https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es\" > \r\n                exposición</a> dónde tenemos una zona dedicada exclusivamente al microcemento.\r\n            </p>', '2017-09-11 15:54:10', '2017-09-11 15:54:10'),
(1198, 38454, 285, 'Reformas de pisos en Zaragoza', 'Reformas de pisos en Zaragoza | Empresa NZ Reformas', 'Cuenta con la ayuda más profesional para realizar reformas de pisos en Zaragoza con una empresa como es NZ Reformas. Solicita presupuesto sin compromiso!', 'reformas-de-pisos-en-zaragoza', '<p>En todas las ciudades y pueblos, los edificios más antiguos, son \r\n            los que en la mayoría de los casos necesitan <b>reformas de pisos en Zaragoza</b>, o de \r\n            cualquier otra ciudad, ya que las viviendas de los barrios con más tradición e historia \r\n            de las diversas capitales de provincia, son edificios antiguos. En algunos casos con más\r\n            de 100 años desde su construcción. Así, es posible que encontremos una vivienda en el \r\n            casco antiguo de Zaragoza en la que sea necesario realizar reformas.</p>\r\n\r\n            <p>A la hora de hacer reformas en pisos en Zaragoza o en cualquier otra población hay \r\n            que tener en cuenta el nivel de conversión que hace falta. Es decir, si hay que \r\n            modificar instalaciones, si es sólo movimiento de tabiques o si se trata de una reforma \r\n            integral. En NZ Reformas, somos conscientes de que las reformas en pisos de Zaragoza o \r\n            de cualquier otro lugar, necesitan de un proyecto previo en el que estudiar el nivel de \r\n            profundidad de la reforma que es necesario realizar.</p>\r\n\r\n            <p>Disponemos de todo un equipo de profesionales multidisciplinar que puede asesorar y \r\n            realizar <a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos\">reformas en pisos en Zaragoza</a> o en la población que corresponda. Escuchamos a \r\n            nuestros clientes para saber y conocer cuáles son sus necesidades y requerimientos para\r\n            desarrollar un proyecto completo. En el que recopilamos toda la información para \r\n            incluir en el presupuesto todos los componentes o elementos necesarios que puedan \r\n            resultar de utilidad para conseguir el nuevo entorno de trabajo o de residencia para \r\n            nuestros clientes.</p>\r\n\r\n            <p>Así, no dude en consultarnos a la hora de hacer reformas de pisos en Zaragoza, todo \r\n            lo que pueda necesitar aclarar para poder proporcionarle un presupuesto sin compromiso y\r\n            que contemple todos los elementos para convertir su espacio en el entorno más agradable\r\n            para desarrollar su actividad diaria. Contáctenos a través de nuestra página de contacto, solicite su\r\n            <a href=\"https://www.nzreformas.es/pedir-presupuesto\" >presupuesto de reformas Zaragoza</a>, escríbanos un correo electrónico \r\n            (info@nzreformas.es) o llámenos por teléfono (976 56 55 24).</p>', '2016-09-19 14:24:48', '2016-09-19 14:24:48'),
(1199, 38453, 285, 'Reformas en Zaragoza mucho más que un proyecto constructivo', 'Reformas en Zaragoza para proyectos integrales', 'Te ayudamos a realizar todas las reformas en Zaragoza que necesites con nuestro equipo de expertos. Solicítanos presupuesto sin compromiso!', 'reformas-en-zaragoza-mucho-mas-que-un-proyecto-constructivo', '<p>A la hora de tener que realizar <b>reformas en Zaragoza</b> o en cualquier\r\n            lugar en el que residamos o dispongamos de un espacio a rediseñar, es importante saber \r\n            exactamente qué espacio tenemos y lo que es más importante, disponer de asesores \r\n            profesionales que nos recomienden lo que mejor nos ayudará a obtener lo que buscamos.</p> \r\n\r\n            <p>Por eso, si necesitamos realizar reformas en Zaragoza, una opción muy recomendable es\r\n            acudir a NZ Reformas. Llevan más de 20 años en el sector de la remodelación, la \r\n            rehabilitación y el interiorismo, proporcionando el asesoramiento y servicio que todos \r\n            sus clientes necesitan para poder llevar a cabo sus proyectos constructivos con todas \r\n            las garantías de un buen acabado final.</p>\r\n\r\n            <p>De hecho, todo nuestro equipo de profesionales, cuenta con la experiencia suficiente \r\n            para asesorar y orientar a todas las personas que requieran de <a href=\"/proyectos/reformas-de-pisos\">reformas en Zaragoza</a>, \r\n            para proporcionarles las soluciones más prácticas y funcionales a sus espacios, para \r\n            garantizarles que, una vez finalizado el proyecto constructivo, dispondrán de un espacio\r\n            o espacios, personalizado, pensado para poder desarrollar de la manera más confortable \r\n            todas sus actividades diarias, ya sea a nivel personal como profesional.</p>\r\n\r\n            <p>En <a href=\"https://www.nzreformas.es/empresa\">NZ Reformas</a>, velamos por conseguir que nuestros clientes queden satisfechos con \r\n            los trabajos realizados, ya que especialmente somos conscientes de que en muchos casos \r\n            la realización de los cambios o reformas en Zaragoza son sinónimo, a su vez, de la \r\n            realización de un cambio personal.</p>\r\n\r\n            <p>Por dicho motivo nuestros equipos técnicos velan por conseguir desarrollar los \r\n            proyectos de la manera más profesional, rápida y sobre todo, correcta, para conseguir \r\n            que todos y cada uno de nuestros proyectos acabe siendo único, dotándolo de la \r\n            personalidad propia de la persona o personas que residen en esa vivienda o acuden a ese \r\n            negocio a trabajar.</p>\r\n\r\n            <p>Contáctenos a través de nuestra <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >página \r\n            de contacto</a>, correo electrónico (info@nzreformas.es) o teléfono (976 56 55 24) y le \r\n            proporcionaremos el  presupuesto y asesoramiento necesarios para indicarle el coste de \r\n            su reforma y las posibilidades potenciales de sus espacios.</p>', '2016-10-25 13:05:10', '2016-10-25 13:05:10'),
(1200, 38427, 286, 'Empresa de rehabilitación de fachadas en Zaragoza', 'Rehabilitación de fachadas en Zaragoza', 'Contacta con NZ Reformas, empresa especializada en la rehabilitación de fachadas en Zaragoza con más de 20 años de experiencia en el sector.', 'rehabilitacion-de-fachadas-en-zaragoza', '<p>La realización de reformas en una comunidad, puede implicar una \r\n            <b>rehabilitación de fachadas en Zaragoza</b>, o en el lugar en el que residamos.  Es por ello \r\n            que en estos casos, es imprescindible acudir a profesionales especializados en la \r\n            realización de reformas o rehabilitaciones como NZ Reformas, con más de 20 años de \r\n            experiencia en el sector.</p>\r\n\r\n            <p>De hecho, durante 2015, el Gobierno de Aragón ha destinado 6 millones de euros a la \r\n            rehabilitación de edificios para proceder a la renovación de viviendas, para propulsar \r\n            el sector de la construcción. Por eso, el servicio de rehabilitación integral de fachadas podría ser uno \r\n            de  los factores que haya permitido reactivar el sector de la construcción, volviendo \r\n            así a movilizar todo un sector que con el cese del boom inmobiliario quedó bastante \r\n            afectado.</p> \r\n\r\n            <p>Así, empresas dedicadas al sector de la construcción, pueden encontrar en la \r\n            rehabilitación y pintura de fachadas en Zaragoza, una vía para conseguir volver a funcionar y \r\n            recuperarse en este ámbito. De hecho, realizando la correcta rehabilitación de una fachada,\r\n            es posible que los miembros de la comunidad que residen en el edificio noten diferentes \r\n            cambios o mejoras en general, como puede ser el ahorro energético, debido al menor uso \r\n            de calefacción, así como una mejora en cuanto a la accesibilidad del edificio.</p>\r\n\r\n            <p>Así, la <b>rehabilitación de fachadas en Zaragoza</b>, supone un beneficio, no sólo para la \r\n            empresa que gestiona la reforma, sino también para todos los miembros de la comunidad \r\n            que en ella residen. Ya que a pesar de la importante inversión que es necesario realizar\r\n            para proceder a los cambios de mejora, esta queda rápidamente amortizada, con las \r\n            ventajas que se desprenden de la reforma.</p>\r\n\r\n            <p>Otro de los elementos que supone una ventaja al realizar la rehabilitación de \r\n            fachadas en Zaragoza es la consecución de un mayor valor de la vivienda, ya que esta se \r\n            revaloriza desde el momento en el que se finalizan los trabajos de obra y la inversión \r\n            realizada se amortiza a medio o largo plazo con el ahorro en el consumo de la \r\n            calefacción y de la luz.</p>\r\n\r\n            <p>Además de contar con las subvenciones gubernamentales correspondientes que nos \r\n            permitirán realizar la rehabilitación de fachadas en Zaragoza con una inversión menor \r\n            por parte de los propietarios del edificio.</p>', '2016-08-25 10:54:10', '2016-08-25 10:54:10');
INSERT INTO `article` (`id`, `image_id`, `category`, `name`, `title`, `description`, `slug`, `article`, `created`, `updated`) VALUES
(1201, 38447, 285, 'Reforma de piso integral en paseo Viñedo Viejo', 'Reforma de piso integral en paseo Viñedo Viejo | NZ Reformas', NULL, 'reforma-integral-de-vivienda-en-vinedo-viejo', '<p>\r\n            Hoy tenemos reforma de piso integral de las que lucen mucho, y no es porque tenga \r\n            iluminación LED. Se trata de una reforma de piso en Viñedo Viejo dónde han renovado \r\n            baños, cocina, suelos, puertas, ventanas, fontanería, electricidad, calefacción y sistema\r\n            de aire acondicionado. Como dijo Jack, vamos por partes.\r\n        </p>\r\n        <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/comedor-3.jpg\" title=\"comedor\" alt=\"comedor\" />\r\n        <p>\r\n            En este caso se ha conservado la distribución, pero se ha retirado el suelo existente, \r\n            así como el embaldosado, y alicatado de los baños y la cocina. Ya que se cambiaban suelos\r\n            y paredes, se aprovechó para abrir rozas para renovar las instalaciones de electricidad \r\n            y fontanería, como podéis imaginar las rozas son los \"huecos\" por donde pasan las \r\n            instalaciones de toda la vivienda. Además de suelos y paredes, también se tiraron falsos\r\n            techos pues había que sustituir la iluminación, así como preparar el techo para cambiar \r\n            la canalización del aire acondicionado. Otro punto interesante es que se retiró la \r\n            instalación del hilo musical y se tapó los huecos de los altavoces, no se ven muchas \r\n            viviendas con hilo musical, pero es una opción que también podemos implementar.\r\n        </p>\r\n        <p>\r\n            Además de un nuevo sistema de aire acondicionado por conductos por el falso techo de la \r\n            vivienda, también se retiró el equipo aire acondicionado antiguo y se reemplazó por uno \r\n            más silencioso y con menor consumo. Asimismo se sustituyeron los radiadores por unos \r\n            nuevos. \r\n        </p>\r\n        <p>\r\n            Seguimos con la cocina, la cual se ha reformado por completo. Se ha planteado un diseño \r\n            de cocina con dos bancadas y muebles en dos acabados de madera, muebles bajos en tono \r\n            claro y altos en tono oscuro. Para dar mayor contraste al conjunto, en los muebles se ha \r\n            colocado una encimera porcelánica de color oscuro (basalto). Este tipo de encimeras de \r\n            gran resistencia se componen de minerales sometidos a gran presión y temperatura.\r\n        </p>\r\n        <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/cocina-3.jpg\" title=\"cocina\" alt=\"cocina\" />\r\n        <p>\r\n            Otro detalle interesante de la cocina es el alicatado las paredes, con una baldosa blanco\r\n            mate lisa con perfiles a media altura, y en el frente de los fuegos se ha colocado una \r\n            baldosa con relieve para crear un punto de interés. Este diseño suele usarse también en \r\n            baños revistiendo en frente de la ducha con baldosa de otro tono o con una textura. Otro\r\n            recurso sería revestir el frente con el mismo material que la encimera, o colocar un \r\n            frente de cristal en algún color, estas alternativas se aplican hasta la altura de la \r\n            campana o de los muebles altos.\r\n        </p>\r\n        <p>\r\n            La vivienda consta dos baños que se han reformado completamente. En ambos se ha \r\n            colocado plato de ducha de resina con mampara de cristal, ducha termo-estática, inodoro \r\n            con tapa amortiguada, mueble con acabado a juego con el suelo y radiador toallero. Como \r\n            podemos observar en ambos baños nos encontramos dos líneas de color, uno en blancos y \r\n            otro en tonos tierra.\r\n        </p>\r\n        <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/baño-dormitorio-2.jpg\" title=\"baño\" alt=\"baño\" />\r\n        <p>\r\n            Hasta ahora no habíamos comentado el suelo de la cocina y los baños, pero porque aquí \r\n            tenemos una de las características más interesantes de la vivienda. Se ha embaldosado TODA\r\n            la vivienda con gres porcelánico imitación madera, ya que este tipo de materiales son muy\r\n            resistentes y conservan el aspecto estético de la madera, además son muy fáciles de \r\n            limpiar. También nos proporcionan continuidad en todas las zonas de la vivienda.\r\n        </p>\r\n        <p>\r\n            <a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-vinedo-viejo\" target=\"_blank\" >Aquí</a> puedes ver \r\n            más imágenes de este trabajo. La verdad es que viendo estos resultados dan ganas de \r\n            reformarse el piso, así que si tienes alguna duda puedes consultarnos sin ningún problema.\r\n            Puedes ponerte en contacto con nosotros a través del <strong>976 56 55 24</strong>, o si\r\n            prefieres enviar un e-mail a <strong>info@nzreformas.es</strong>, pide un \r\n            <a href=\"https://www.nzreformas.es/pedir-presupuesto\" > presupuesto de reformas en Zaragoza</a> o ven a visitarnos a nuestra \r\n            <a target=\"_blank\" href=\"https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es\" >\r\n                exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.\r\n        </p>', '2017-07-25 15:54:10', '2017-07-25 15:54:10'),
(1202, 38452, 285, 'Reformas de comunidades en Zaragoza con técnicos profesionales', 'Reformas de comunidades en Zaragoza | NZ', 'Obtén los mejores presupuestos para realizar reformas de comunidades en Zaragoza en todo tipo de pisos. Solicita presupuesto sin compromiso!', 'reformas-de-comunidades-en-zaragoza', '<p>Las comunidades de propietarios son unos de los colectivos que \r\n            deben enfrentarse a la realización de reformas, pasados los años, en los espacios \r\n            comunes de la comunidad. Para los propietarios, si necesitan hacer <b>reformas en su\r\n            comunidad de vecinos de Zaragoza</b>, puede resultar un quebradero de cabeza, así que lo más \r\n            recomendable es contratar a un especialista, que realice todas las gestiones necesarias \r\n            para proceder a realizar las reformas que sean oportunas, bajo supervisión y aprobación \r\n            de todos los miembros de la comunidad.</p>\r\n\r\n            <p>En NZ Reformas, cuentan con un equipo técnico de profesionales que pueden realizar \r\n            las reformas de comunidades en Zaragoza, sin ningún tipo de problema, desde grandes \r\n            proyectos, a proyectos sencillos en los que la intervención o modificación del espacio \r\n            sea mínima. Lo importante es rodearse de los profesionales adecuados que nos permitan \r\n            realizar las gestiones necesarias para poder dotar de un nuevo entorno a la comunidad y \r\n            así ofrecer un espacio confortable a todos los residentes de la finca.</p>\r\n\r\n            <p>A la hora de realizar  <b>reformas en comunidades en Zaragoza</b>, o en cualquier otra \r\n            población, lo más importante es que toda la comunidad esté conforme con los cambios que \r\n            es necesario realizar y que se pueda recibir el asesoramiento de los profesionales \r\n            especializados, como pueden ser NZ Reformas, para obtener, con el mejor precio, los \r\n            mejores resultados. Satisfaciendo las exigencias de todos los propietarios miembros de \r\n            la comunidad, o al menos, de su gran mayoría.</p>\r\n\r\n            <p>En definitiva, se trata de poder facilitar a las comunidades y sus propietarios el \r\n            máximo de reformas posibles, para que puedan realizarse de manera profesional y sin \r\n            complicaciones o incidencias. Por ello no dude en contactar con NZ Reformas a través de \r\n            nuestra <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >página de contacto</a>, correo \r\n            electrónico (info@nzreformas.es) o teléfono (976 56 55 24). Le proporcionarán todo el \r\n            asesoramiento necesario para realizar reformas en comunidades en Zaragoza con todas las \r\n            garantías de trabajar con especialistas avalados por su larga trayectoria profesional.</p>', '2016-11-22 11:21:49', '2016-11-22 11:21:49'),
(1203, 38446, 285, 'Reforma de piso integral en paseo Ruiseñores', 'Reforma de piso integral en paseo Ruiseñores | NZ Reformas', NULL, 'reforma-de-piso-integral-en-paseo-ruisenores', '<p>\r\n            Hoy traemos una reforma de piso integral en paseo Ruiseñores, que además de ser una \r\n            vivienda grande, se ha renovado prácticamente todo. En este caso solo vamos a repasar lo\r\n            más importante o interesante, si tuviéramos que citar todos los cambios esta entrada \r\n            podría prolongarse demasiado, así que ¡al tajo!\r\n        </p>\r\n        <p>\r\n            Primero hay que comentar que era una vivienda grande, y se ha realizado un cambio en la \r\n            distribución,  así que como resultado tenemos ambientes muy amplios. En cuanto al suelo,\r\n            no se ha retirado el antiguo, y se ha trabajado sobre este realizando las actuaciones \r\n            necesarias para nivelarlo todo, y posteriormente colocar uno nuevo encima. Aprovechando \r\n            el cambio de distribución, se ha realizado una renovación completa de las instalaciones \r\n            de la vivienda: fontanería, calefacción (incluida caldera), y electricidad con iluminación\r\n            LED.\r\n        </p>\r\n        <p>\r\n            En cuanto a las ventanas, se han sustituido todas por unas nuevas de aluminio con rotura\r\n            de puente térmico. En estas se ha instalado persianas motorizadas accionadas por \r\n            interruptor, que además de facilitar su uso, mejora el aislamiento acústico-térmico de \r\n            las mismas. Además se ha instalado un aislamiento térmico en el perímetro del muro en \r\n            contacto con el exterior para ahorrar energía.\r\n        </p>\r\n        <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/reforma-ruiseñores_4.jpg\" title=\"comedor\" alt=\"comedor\" />\r\n        <p>\r\n            También se ha reformado la cocina, y cabe destacar el diseño de las dos bancadas, en las\r\n            que se colocado una encimera de granito negro para conseguir contraste con los muebles \r\n            en blanco mate. Además, los muebles poseen tiradores integrados, que junto al encastre \r\n            del fregadero bajo encimera, crean una composición muy limpia. Un detalle interesante de\r\n            la cocina es que se aprovechó el hueco del armario de la limpieza para encajar la nevera\r\n            y que quedara enrasada con la pared, de esta manera conseguimos una cocina sin recovecos\r\n            , ni salientes.\r\n        </p>\r\n        <p>\r\n            La vivienda dispone de dos baños los cuales también se han reformado completamente, \r\n            ambos con un estilo similar para dar homogeneidad al conjunto. En los dos se ha buscado \r\n            funcionalidad, y encontraremos platos de ducha de resina extraplanos de color blanco con\r\n            mamparas de cristal con hojas correderas, inodoro con tapa amortiguada y lavabo colgado \r\n            con semi-columna. Para revestir las paredes y el suelo se ha elegido una baldosa \r\n            porcelánica (color arena) por ser la más apta para estos entornos con tanta humedad. \r\n            Esta misma baldosa se ha utilizado en cocina y terraza, ya que con el mismo material se \r\n            pueden conseguir diferentes resultados en distintos ambientes.\r\n        </p>\r\n        <p>\r\n            Como en casi todas las reformas de piso, se alisa, y pinta paredes y techo. Este detalle\r\n            parece un cambio menor, pero un piso cambia mucho después de un par de manos de pintura.\r\n            Hemos realizado proyectos solamente de pintura, suelo y puertas, y solo con estos cambios\r\n            el piso parece nuevo. En este caso también se han realizado estos trabajos. El suelo es \r\n            quizás el elemento más destacable de toda la reforma: madera de roble, lama de gran \r\n            formato, simplemente hay que ver las fotos. Cabe destacar que se han colocado paneles de\r\n            madera en la parte alta de las puertas y un rodapié un poco más alto de lo habitual, y \r\n            el rodapié viste mucho. \r\n        </p>\r\n        <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/reforma-ruiseñores_2.jpg\" title=\"comedor\" alt=\"comedor\" />\r\n        <p>\r\n            Por último para optimizar aún más el espacio que la vivienda ofrecía, se fabricaron \r\n            armarios empotrados a medida para instalar en diferentes zonas de la casa. Como conclusión\r\n            tenemos un proyecto de reforma dónde se realizaron todo tipo de cambios con el resultado\r\n            de una vivienda grande con espacios muy bien aprovechados.\r\n        </p>\r\n        <p>\r\n            Para ver más fotos de la reforma haz clic \r\n            <a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-en-paseo-ruisenores\" target=\"_blank\" >aquí</a>\r\n            , y si viendo esta graaaan reforma te entran ganas de renovar tu piso, o tienes alguna \r\n            consulta, no dudes en llamar por teléfono al <strong>976 56 55 24</strong>, enviar un \r\n            mail a <strong>info@nzreformas.es </strong> o contactar desde \r\n            <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" > esta página</a>. También puedes venir a vernos a\r\n            nuestra exposición en \r\n            <a target=\"_blank\" href=\"https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es\" >\r\n                Polígono el Portazgo Naves 58-59</a> , junto a la rotonda de Pikolín.\r\n        </p>', '2017-08-24 14:54:10', '2017-08-24 14:54:10'),
(1204, 38417, 285, 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal', 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal | NZ Reformas', NULL, 'reforma-de-calidad-maria-lostal', '<p>\r\n                Os presentamos un nuevo proyecto dentro de las reformas en Zaragoza que realizamos. Se trata de una reforma integral de vivienda, en la calle María Lostal. Se incluye la instalación completa de nueva fontanería y nueva red eléctrica completa de distribución interior, así como del sistema de calefacción. Se realiza la reforma del baño y de la cocina, y el cerramiento de la terraza con perfilería oculta.\r\n            </p>\r\n            <p>\r\n                El cliente solicita una nueva distribución del piso.\r\n            </p>\r\n            <p>\r\n                Vamos a detallaros a continuación los trabajos realizados, paso a paso:\r\n                            <ol class=\"default\">\r\n                                    <li>\r\n                                            <strong>Demoliciones, derribos y retirada de escombros.</strong>\r\n                                            Previamente se protege el ascensor y los elementos comunes para evitar dañarlos durante la ejecución de la obra posterior. A continuación, se procede con el derribo y demolición con métodos manuales de los elementos actuales que se encuentran en el piso, siguiendo el plano aprobado por el cliente, y posterior limpieza y retirada de escombros y llevada a vertedero:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Revestimientos de suelos existentes: moqueta de suelo, parqué (incluido los rodapiés) y pavimentos de baldosa de gres.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Elementos que recubren los paramentos verticales: papeles pintados, revestimientos textiles y alicatado en baños y cocina.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Carpintería exterior de acristalamiento de aluminio: ventanas y puertas de acceso a terraza.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Falso techo continuo de escayola de todo el ático, incluido el arco decorativo del pasillo\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Carpintería interior de madera: puertas de paso, incluso desmontaje de premarcos en aquellas que no vayan a ser repuestas.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Tabiques de partición interior de fábrica: aquellos que deban ser retirados por incompatibilidad con la nueva distribución de la vivienda.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Conducciones vistas de fontanería y calefacción\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Radiadores y elementos accesorios\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Equipamiento auxiliar en baños y cocina\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Tabiquería y cerramientos.</strong>\r\n                                            El proyecto de esta <strong>reforma en Zaragoza</strong> continúa con el levantamiento de la tabiquería necesaria para configurar la nueva distribución del piso, y el suministro, montaje e instalación de la nueva carpintería exterior, incluido el cerramiento de la terraza:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Construcción de nuevos tabiques de obra para partición interna, en ladrillo hueco doble o pladur, con aislamiento y placa especial\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Formación de nuevo tabique de ladrillo hueco para alojar puerta corredera.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Tapiado parcial del hueco en cerramiento de fachada de terraza.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Suministro y colocación de elemento de aislamiento térmico en paredes en contacto con el patio de luces, incluso placa especial en zonas a alicatar.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Carpintería exterior de dos hojas en aluminio lacado en color blanco con las siguientes características: abertura doble en sistema oscilobatiente, con rotura de puente térmico (RPT) y vidrio de 4/14/4.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Dotación y colocación de puertas de paso ciegas de 1 hoja, lacadas en blanco, en baño, cocina y habitación, incluidos herrajes, batideros y tapajuntas.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Montaje de nueva puerta de acceso a la vivienda: blindada y lacada en blanco por la cara interior.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Instalación de puerta corredera lisa ciega, lacada en blanco de dos hojas, que separa el despacho del salón.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Revestimientos y Falsos Techos.</strong>\r\n                                            Se continúa con los trabajos referidos a paredes, techos y suelos, según el plano de <strong>reformas en Zaragoza</strong> de este ático:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Enlucido de los paramentos verticales de todo el piso.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Picado y enlucido con mortero de cemento de paredes exteriores de terraza.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Suministro y colocación de suelo laminado clase 32, serie Vitality Deluxe 4V de la marca Balterio, en color pino blanco, incluidos elementos auxiliares, junturas y rodapiés.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Formación de revestimiento continuo de microcemento en paredes y suelo de aseo y baño principal, colores a elegir por la propiedad, acabado mediante imprimación tapaporos y sellador de acabado mate.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Solado de cocina con baldosa de gres porcelánico modelo Forest Timber 15 x 90 de la casa Peronda, incluido rodapié.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Dotación e instalación de falso techo continuo de placas de escayola.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Pintado de paramentos verticales interiores y falsos techos con pintura plástica lisa mate lavable, en color blanco, incluso mano de imprimación y plastecido\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Dos manos aplicación de pintura en pared exterior de terraza de tipo lavable y transpirable para exteriores\r\n\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Cerramiento parcial de terraza.</strong>\r\n                                            Esta <strong>reforma en Zaragoza</strong> incluye cerrar parcialmente la terraza, que de origen era completamente descubierta, y cambio del pavimento del suelo:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Techo marca BRISA, fabricado con perfil GLOGER, lacado en color blanco, con cristal laminar 3+3, motorizado con dos motores, cuatro divisiones por donde se desplazan los paneles de cristal, tres paneles recogiéndose los delanteros en el trasero que es fijo. Motor vía radio, con un mando.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Cerramiento frontal formado por puertas plegables serie CORVENT fabricadas en aluminio blanco y con cristal Climalit 4/14/4 de medidas 5100 de ancho por 2100 de alto. Siete hojas recogidas a un lado.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Cuña lateral en aluminio lacado en blanco y policarbonato de 16 mm.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Modificación de bajante de pluviales para la conducción de aguas hasta sumidero.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Verja de 1,50 m. de altura colocada sobre peto de obra.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Instalación de fontanería.</strong>\r\n                                            El proyecto de <strong>reformas en Zaragoza</strong> de este ático incluye nueva dotación de fontanería interior, con el siguiente detalle:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Para baño principal y para aseo con tres puntos de agua (inodoro, lavabo sencillo y ducha), realizada con polietileno reticulado (PE-X) para la red de agua fría y caliente\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Para cocina con cuatro puntos de agua (fregadero, lavavajillas, lavadora y terraza) realizado con el mismo material que baño y aseo.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Red interior de evacuación para cocina y baños con dotación para fregadero, desagüe para lavavajillas, desagüe para lavadora y caldera, realizada con tubo de PVC serie B para red de desagües.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Dotación y colocación de platos de ducha de resina Resigrés, incluso válvula de desagüe y grifería monomando.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Montaje de mamparas de ducha para baño y aseo, de perfilería de aluminio, serie GME Aktual.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Instalación de Calefacción.</strong>\r\n                                            La dotación de los elementos requeridos para la calefacción en este planteamiento integral de <strong>reformas en Zaragoza</strong> incluye la entrega y montaje de los siguientes componentes:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Un total de 7 radiadores de aluminio con distintos elementos cada uno (tres radiadores de 15 elementos, uno de 14, uno de 9, uno de 7 y uno de 5) para sistema bitubo, que incluye, llave, detentor, purgador, soportes, tapones y juntas.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Colector de 4 vías con válvulas de corte, caja empotrable y racores de conexióN.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Tubería de polietileno reticulado según requerimientos técnicos para para agua fria y agua caliente.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Instalación eléctrica.</strong>\r\n                                            En el proyecto de <strong>reformas en Zaragoza</strong> de este ático, se diseña e implementa la nueva red interna de distribución de electricidad, según especificaciones del cliente y necesidades de la obra, con el siguiente detalle (incluye el suministro y montaje de los distintos componentes):\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Derivación individual compuesta por cable de cobre según requerimientos técnicos.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Cuadro de mando y protección para vivienda de electrificación elevada, con caja empotrable de puerta opaca y especificidades concretas.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Circuito de alumbrado compuesto por cable de cobre de acuerdo a las especificaciones del proyecto.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Circuito de tomas de corriente de cocina y baños, y de usos varios a lo largo de todo el piso, establecida en cable de cobre y con las características dispuestas en la obra.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Varias de puntos de luz, enchufes y tomas para teléfono según se recoge en la memoria de obra.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Luminarias y halógenos varios.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Certificado de instalación eléctrica, memoria técnica de diseño y comunicación a Organismo de Centro Autorizado.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Nuevo sistema de climatización.</strong>\r\n                                            Para la instalación de aire acondicionado, dentro del <strong>proyecto de reformas</strong> en Zaragoza de este ático, se suministra e instala un split de pared modelo Mitsubishi MSZ-EF35VE Kirigamine Zen. Se incluyen los trabajos de albañilería necesarios.\r\n                                    </li>\r\n                                    <li>\r\n                                            <strong>Otros equipamientos.</strong>\r\n                                            Para completar la <strong>reforma en Zaragoza</strong> que os presentamos, se suministran e instalan otros equipamientos:\r\n                                            <ul class=\"default\" >\r\n                                                    <li>\r\n                                                            Columna de horno y microondas modelos Teka 435 y Teka 26 FY.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Diversas baldas fijadas a la pared para usos varios.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Púas anti-paloma fijadas con producto adhesivo en perímetro de terraza.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            aplique tendedor de pared de dos cuerdas, con blocaje individual por cuerda y recogida automática.\r\n                                                    </li>\r\n                                                    <li>\r\n                                                            Tendedero de pared con barras desplegables, en material plástico y acero.\r\n                                                    </li>\r\n                                            </ul>\r\n                                    </li>\r\n                            </ol>\r\n                    </p>\r\n                    <p>Accede aquí al resto de \r\n                    <a href=\"https://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-maria-lostal\" target=\"_blank\">\r\n                    fotografías del proyecto de reforma</a>\r\n                        </p>', '2017-05-23 15:32:42', '2017-05-23 15:32:42'),
(1205, 38472, 285, 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal | NZ Reformas', NULL, 'reforma-de-cocina-con-simulacion-3d-en-calle-portugal', '<p>\r\n                ¡Hola a todos! Hoy vamos a ver una reforma de cocina con la simulación 3d. En la \r\n                mayoría de proyectos que realizamos se realiza una recreación del estado final de la\r\n                reforma para ayudar a los clientes a imaginarse el resultado. Este tipo de recreaciones\r\n                también nos sirven a nosotros para trabajar los espacios. Hemos decidido mostrar este\r\n                caso por la similitud entre el modelo 3d y el resultado final. Lo más curioso de estas\r\n                imágenes, es que los 3ds son los mismos que se propusieron al cliente, y estos son \r\n                previos a la ejecución de la reforma.\r\n            </p>\r\n                <img src=\"/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/portugal-11-3D.jpg\" title=\"Muebles de cocina\" alt=\"Muebles de cocina\" />\r\n            <p>\r\n                Lo primero que hay que mencionar de esta reforma de cocina, es que se llevó a cabo\r\n                una ampliación de la misma por medio de la eliminación del tabique separador de la \r\n                habitación contigua. Como resultado tenemos una zona muy amplia que permite albergar \r\n                además de la cocina, comedor, una isla con barra para desayuno. Además del cambió de\r\n                distribución también se tapió el antiguo hueco de la puerta de la cocina hasta media\r\n                altura para colocar un fijo de vidrio translúcido. Lo que antes era la puerta de la \r\n                cocina ahora es una \"ventana\", y se usó la puerta de la habitación anexionada para \r\n                la nueva cocina.\r\n            </p>\r\n                <img src=\"/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/portugal-8-3D.jpg\" title=\"Isla con barra para desayuno\" alt=\"Isla con barra para desayuno\" />\r\n            <p>\r\n                Aprovechado la nueva distribución se cambiaron falsos techos, se adaptó el conducto \r\n                de aire acondicionado, se instaló iluminación LED, así como nuevas tomas de electricidad\r\n                e interruptores, y también se instaló un pavimento laminado con acabado de roble gris\r\n                a juego con el  mobiliario.             \r\n            </p>\r\n                <img src=\"/bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/portugal-10-3D.jpg\" title=\"Cocina con comedor\" alt=\"Cocina con comedor\" />\r\n            <p>\r\n                Los muebles de la cocina se dispusieron en forma de L con una isla en el centro de la \r\n                estancia. Dichos muebles se eligieron de color gris mate con tiradores integrados, y\r\n                encimera de cuarzo de color blanco. \r\n            </p>\r\n            <p>\r\n                En la página de <a href=\"https://www.nzreformas.es/proyectos/reformas-de-cocinas-zaragoza\">reformas de cocinas en Zaragoza</a> podéis encontrar más fotos de esta reforma de cocina. \r\n                Nos encantan los retos sobretodo con cocinas y baños, dado preguntar es gratis y \r\n                también<a href=\"https://www.nzreformas.es/pedir-presupuesto\" > pedir un presupuesto de reformas</a>, aquí\r\n                tenéis la página de contacto.\r\n            </p>', '2017-09-11 15:54:10', '2017-09-11 15:54:10'),
(1206, 38067, 285, 'Reforma integral de ático en Zaragoza (calle Miguel Servet)', 'Reforma integral de ático en Zaragoza (calle Miguel Servet) | NZ Reformas', '', 'reforma-integral-miguel-servet', '<p>\r\n				El proyecto de reforma para esta vivienda se plantea de manera integral.\r\n			<br>\r\n				Partimos de una configuración inicial consistente en recibidor, salón comedor, dos dormitorios dos baños, cocina y terraza descubierta.\r\n			<br>\r\n				El cliente quiere una nueva distribución, por lo que una vez se aprueba el proyecto, se procede con los trabajos de derribo y demolición, incluidos falsos techos, alicatados y pavimentos. Se procede a continuación con el levantamiento de tabiquería y cerramientos, tapiado de carpinterías exteriores, pavimentado, revestimientos y falsos techos.\r\n			<br>\r\n				La reforma incluye la sustitución de fontanería (en el baño y cocina) e instalación eléctrica. \r\n			<br>\r\n				También instalación de caldera.\r\n			<br>\r\n				Se han realizado también trabajos de impermeabilización.\r\n			</p>\r\n			<p>\r\n				Tanto la puerta de acceso al ático, como las puertas de paso interiores, se han adaptado a minusválidos, por lo que se han modificado los cabeceros y estructuras.\r\n			</p>\r\n			<p>\r\n				Existía de origen un desnivel en la vivienda, por lo que ha sido necesaria la demolición del pavimento y suelo elevado hasta llegar al forjado de la edificación, y a partir de ahí, se ha recrecido y nivelado para posteriormente proceder a la colocación del suelo laminado en pasillo, salón, cocina y habitaciones, incluido el rodapié, con resolución de esquinas, uniones y encuentros.\r\n			</p>\r\n			<p>\r\n				Se ha realizado el suministro y montaje de instalación interior de fontanería para cuarto de baño y cocina, con dotación para inodoro, lavabo sencillo y plato de ducha, así como fregadero, lavadora y lavavajillas.\r\n			</p>\r\n			<p>\r\n				También se ha realizado el montaje e instalación de calefacción, incluido el suministro de radiadores en la vivienda.\r\n			</p>\r\n			<p>\r\n				Ha sido necesaria la instalación de red eléctrica completa de distribución interior del piso, para recibidor, pasillo, dos dormitorios, salón, cocina, baño, aseo y terraza.\r\n			</p>\r\n			<p>\r\n				Para ocultar todas las instalaciones, se ha colocado, en toda la vivienda, un falso techo continuo de placas de escayola, con repaso de juntas e instalación de accesorios y medios auxiliares. \r\n			</p>\r\n			\r\n			<img src=\"http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/salon-2.jpg\" >\r\n			\r\n			<p>\r\n				Nada más acceder al ático, a mano derecha nos encontramos con uno de los espacios principales: el salón, con acceso a la terraza. Para lograr una estancia amplia y luminosa, se ha pintado el techo con pintura plástica lisa mate lavable en color blanco, y las paredes, una vez alisadas, se han pintado en un tono gris como elemento decorativo.\r\n			</p>\r\n			<p>\r\n				Para la carpintería exterior, tanto del salón como del resto del piso, se ha optado por la instalación de ventanas de aluminio anodizado con rotura de puente térmico y vidrio doble.\r\n			</p>\r\n			<p>\r\n				Como elemento de protección de entrada de lluvia, se ha formado un resalte en la puerta de acceso a la terraza. \r\n			</p>\r\n\r\n			<img src=\"http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/terraza-8.jpg\" >\r\n			\r\n			<p>\r\n				La terraza de origen era por completo abierta. Se ha practicado un cerramiento parcial de perfilería oculta, que ha requerido trabajo de albañilería e impermeabilización de cubierta inclinada. \r\n			</p>\r\n			<p>\r\n				Para una adecuada evacuación del agua de lluvia, se han creado pendientes con mortero de cemento, instalación de sumidero de aluminio y modificación de la bajante de las canales de las cubiertas superiores.\r\n			</p>\r\n			<p>\r\n				Para el solado de la terraza, se ha colocado baldosa para exterior antideslizante con mortero de cemento y arena de río, incluido el rodapié, de características similares a la baldosa colocada. \r\n			</p>\r\n\r\n			<img src=\"http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/cocina-1.jpg\" >\r\n			\r\n			<p>\r\n				A la cocina se accede a través del salón. Para lograr una máxima integración de ambas estancias y aprovechar espacios, se ha colocado una puerta corredera, mediante instalación de tabique auxiliar con estructura de armazón metálico con chapa grecada y malla metálica.\r\n			</p>\r\n\r\n			<img src=\"http://www.nzreformas.es/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/cocina-3.jpg\" >\r\n\r\n			<p>\r\n				En la cocina se ha buscado el efecto blanco/negro y alguna gama de gris, con líneas simples y puras para conseguir un efecto armonioso en coordinación con el salón.\r\n				<br>\r\n				El mobiliario lacado en blanco, hace destacar la encimera en color negro con brillo.\r\n				<br>\r\n				El alicatado de las paredes, previo rascado y alisado, se ha realizado con azulejo de gres esmaltado, incluido cortes, ingletes y piezas especiales.\r\n				<br>\r\n				Se han suministrado también los electrodomésticos y la grifería monomando.\r\n			</p>', '2017-04-25 15:52:10', '2017-04-25 15:52:10'),
(1207, 38451, 285, 'Presupuestos de reformas en Zaragoza para modificar nuestros espacios', 'Los mejores presupuestos de reformas en Zaragoza', 'Obtén los mejores presupuestos de reformas en Zaragoza para tus proyectos con total garantía de calidad y sin compromiso.', 'presupuestos-de-reformas-en-zaragoza', '<p>En toda remodelación o rehabilitación, ya sea de un negocio \r\n            particular o de una vivienda, es importante tener en cuenta algunos aspectos como el \r\n            volumen de inversión a realizar para contemplar realmente el coste que tendrá realizar \r\n            la adaptación de los espacios. Por ello es importante solicitar diversos <b>presupuestos de\r\n            reformas en Zaragoza</b>, para contrastar y así escoger el que mejor se adapte a nuestras \r\n            posibilidades.</p>\r\n\r\n            <p>Es por ello que en NZ Reformas, se realizan presupuestos de reformas en Zaragoza, \r\n            ajustados a las necesidades y posibilidades del cliente.  De esta manera podemos \r\n            realizar y convertir en realidad los proyectos constructivos de nuestros clientes, \r\n            sabiendo de antemano del espacio real que disponen y de todas las peticiones que desean \r\n            hacer sobre una estancia concreta. Así, de esta manera, se consigue convertir en \r\n            realidad la idea inicial que se encuentra en la mente de nuestros clientes. Mejorando \r\n            sus espacios y haciendo que todo ello acabe siendo un nuevo entorno.</p>\r\n\r\n            <p>En NZ Reformas, disponemos de todo lo necesario para convertir un espacio antiguo en \r\n            uno nuevo, realizando <a href=\"/pedir-presupuesto\">presupuestos de reformas en Zaragoza</a>, adaptando todo lo necesario \r\n            para que los espacios cumplan con los requisitos que desean los clientes. Y así poder \r\n            disfrutar de su nuevo hogar u oficina, con los nuevos materiales utilizados, \r\n            convirtiendo en realidad todos los requisitos que servirán para mejorar las necesidades \r\n            de nuestros usuarios para que desarrollen de una mejor manera sus actividades diarias, \r\n            tanto a nivel personal como profesional.</p>\r\n\r\n            <p>Si estás pensando en realizar una reforma, una rehabilitación o una modificación del \r\n            interiorismo para poder realizar un cambio en sus espacios, no dude en realizarnos su \r\n            petición a través de nuestra <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >\r\n            página de contacto</a>, correo electrónico (info@nzreformasintegrales.es) o teléfono \r\n            (976 56 55 24) y le proporcionaremos el presupuesto o presupuestos de reformas en \r\n            Zaragoza, así como el asesoramiento que pueda necesitar para proporcionarle todo lo que \r\n            nuestros clientes puedan requerir para conseguir su nuevo espacio de trabajo o personal.</p>', '2016-12-20 13:59:41', '2016-12-20 13:59:41');
INSERT INTO `article` (`id`, `image_id`, `category`, `name`, `title`, `description`, `slug`, `article`, `created`, `updated`) VALUES
(1208, 38442, 285, 'Cómo escoger baldosa para la reforma del hogar', 'Cómo escoger baldosa para la reforma del hogar | NZ Reformas', NULL, 'como-escoger-baldosa-para-la-reforma-del-hogar', '<p>¡Hola a todos! Hoy vamos a hablar de un tema muy importante en el mundo de las reformas, \r\n            que todo el mundo desconoce hasta que tiene que reformar la vivienda. Hablo nada más \r\n            y nada menos que de la baldosa. En este artículo vamos a repasar los tipos de baldosa más \r\n            importantes, y también daremos algunos consejos sobre la elección de baldosas que hemos \r\n            aprendido con el tiempo.</p>\r\n                         \r\n            <p>Lo primero de todo es conocer las características de las baldosas, esto nos ayudará a\r\n            diferenciar los tipos de baldosa. Estos no son todas y además se pueden organizar en torno\r\n            a otros factores, aquí solo citaremos las que nos serán útiles.</p>\r\n            <ul class=\"default\" >\r\n                <li>\r\n                    <b>Formato</b>: son las medidas de la baldosa, ancho y alto. Este es una de las \r\n                    características más importantes pues afecta al precio de las baldosas, su aspecto\r\n                    estético y colocación.\r\n                </li>\r\n                <li>\r\n                    <b>Canto</b>: tenemos tres tipos de cantos el \"normal\", el biselado y el rectificado. \r\n                    El primero es el más común el borde es redondeado de manera que suaviza la transición \r\n                    entre baldosas. El canto biselado tiene un corte a modo de chaflán de modo que los \r\n                    bordes están muy marcados. En las baldosas rectificadas encontramos un canto de \r\n                    ángulo recto. El canto no solo afecta a la parte estética de la baldosa, también \r\n                    a su colocación.\r\n                </li>\r\n                <li>\r\n                    <b>Material</b>: existen baldosas de multitud materiales, a nosotros realmente nos \r\n                    interesan las baldosas cerámicas, en concreto pasta blanca, pasta roja y porcelanato.\r\n                </li>\r\n                <li>\r\n                    <b>Acabado</b>: básicamente es el aspecto de la baldosa, color, dibujo, brillo y \r\n                    relieve, algunas veces es el acabado del material propio, y otras lo imitan. Para\r\n                    nosotros este es el aspecto más importante, te tiene que gustar la baldosa, \r\n                    se pueden encontrar baldosas con distintos materiales y aspecto muy similar. \r\n                </li>\r\n                <li>\r\n                    <b>Resistencia</b>: aunque este atributo podría dividirse en varios hemos decidido \r\n                    unificarlos para no aburrir con aspectos técnicos. Entre las cualidades más importantes \r\n                    se encuentran la resistencia al frio y al calor, dureza, grado absorción del agua, \r\n                    resistencia a agentes químicos y al fuego. Además de los factores anteriores se \r\n                    ve implicado de manera indirecta el mantenimiento de la baldosa.\r\n                </li>\r\n                <li>\r\n                    <b>Adherencia o resistencia al deslizamiento</b>: hemos separado este característica\r\n                    de la resistencia dada su importancia. La baldosa adecuada a nuestro proyecto \r\n                    dependerá en gran medida de este factor, pero es algo que veremos más adelante.\r\n                </li>\r\n                <li>\r\n                    <b>Precio</b>: aquí tenemos el factor más conocido por todos, todo el mundo lo tiene en \r\n                    cuenta a la hora de elegir baldosa. Para nosotros invertir en una baldosa de calidad \r\n                    es un acierto.\r\n                </li>\r\n            </ul>\r\n            <p>Como conclusión de las características vistas, tenemos el formato, el acabado y el \r\n            precio como las más importantes para los clientes. Vale, una vez citados las características \r\n            que posee la baldosa, veremos los dos grandes grupos, sobre todo nos vamos a centrar en \r\n            baldosa cerámica, ya que es lo más común:</p> \r\n            <ul class=\"default\" >\r\n                <li>\r\n                    <b>Gres esmaltado</b>: aquí podemos encontrar dos tipos de baldosa, pasta blanca \r\n                    y pasta roja. Ambas son baldosas de arcilla esmaltada, y básicamente se diferencian \r\n                    por el color de las arcillas que las componen, con mirar la zona posterior de la \r\n                    baldosa se pueden diferenciar. La ventaja de la pasta roja es su reducido precio, \r\n                    y la pasta blanca ofrece una mayor resistencia.\r\n                </li>\r\n                <li>\r\n                    Gres porcelánico: son baldosas hechas a partir de arcillas y feldespatos, en \r\n                    algunos casos también se añaden colorantes. Se cuece una pasta hecha con dichos \r\n                    materiales, y posteriormente se pule hasta alcanzar el acabado deseado. Este \r\n                    tipo de baldosas tiene muy poca absorción de agua y son muy resistentes, por lo \r\n                    que son ideales para exteriores y algunas zonas de la casa.\r\n                    </li>\r\n            </ul>\r\n            <p>Parece que ya tenemos un montón de datos pero todavía no sabemos qué baldosa necesitamos, \r\n            vale, vamos por pasos:</p>\r\n            <ol class=\"default\" >\r\n                <li><b>¿Suelo o pared?</b>, aunque en paredes no se vea tanto, si que se utiliza en \r\n                baños, cocinas, y locales comerciales. Dependiendo si se utiliza en suelos nos hará \r\n                falta una baldosa más resistente, y algunos formatos quedan mejor en paredes. ¿Y si \r\n                necesito una baldosa para suelo y paredes? Nuestra recomendación es utilizar baldosas \r\n                distintas, de esta manera podemos jugar con el diseño, y romper la monotonía del \r\n                espacio. Para las paredes está bien el gres esmaltado de pasta roja. Con los suelos \r\n                hay que tener más cuidado y lo veremos ahora.</li>\r\n            \r\n                <li>En el caso de que la baldosa sea para suelo <b>¿esta zona va a tener mucho transito?</b> \r\n                no es lo mismo el suelo de una tienda, que el baño de nuestra casa. En casos de mucho \r\n                transito recomendamos gres porcelánico dado que nos hará falta una baldosa más resistente, \r\n                como mucho utilizaremos pasta blanca si se tiene un presupuesto más reducido. En los \r\n                atributos de las baldosas hablamos de que la adherencia era muy importante, cuidado \r\n                con las baldosas anti-deslizantes, solo son recomendables en zonas dónde hace falta \r\n                mucho agarre, como en las zonas con piscina. Este tipo de baldosas no la recomendamos \r\n                en viviendas, parece una tontería pero fregar el suelo de un baño con baldosa anti-deslizante \r\n                puede ser una tarea titánica.</li>\r\n\r\n                <li><b>Exposición a los elementos</b>, si se va a colocar en una zona con agua, cambios \r\n                de temperatura, o exposición al sol, hace falta una baldosa más resistente, en estos \r\n                casos también se recomienda gres porcelánico.</li>\r\n                \r\n                <li>El <b>acabado</b>, para gustos colores, y lo mejor es buscar las baldosas que nos \r\n                atraigan, pues la veremos durante mucho tiempo, pero hay que tener en cuenta unos cuantos \r\n                detalles a la hora de elegir baldosa.</li>\r\n                <ul class=\"default\" >\r\n                    <li>Importante no mezclar tonos fríos con cálidos, como marrones y grises.</li>\r\n                    <li>También hay que  tener cuidado con los tonos de baldosa muy oscuros, pues si \r\n                    utilizamos una baldosa muy oscura en una zona amplia absorberá toda la luz, y por \r\n                    eso es mejor utilizarla en suelos, si puede ser zona pequeñas.</li>\r\n                    <li>Lo mismo va para tonos muy vivos, los colores vivos y brillantes cansan enseguida \r\n                    , los colores vivos en pequeñas dosis, yo evitaría cualquier color muy fuerte.</li>\r\n                </ul>\r\n                </li>\r\n            </ol>\r\n            <p>Vamos ver algunos ejemplos de combinación de baldosas</p>\r\n            <p>Un ejemplo de un <b>baño</b> con dos baldosas sería: <br>\r\n            Una baldosa cuadrada en suelo de tono oscuro, y en paredes un tono claro con formato \r\n            rectangular, incluso podríamos añadir otra baldosa en el frente de la ducha con un patrón \r\n            llamativo o un relieve, y de esta manera nos olvidamos de cenefas.</p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/bano-1-despues.jpg\" alt=\"Baño con tres baldosas\" title=\"Baño con tres baldosas\">\r\n            <p>Otro ejemplo pero con <b>cocina</b> podría ser:<br>\r\n            Baldosa cuadrada gris medio/oscuro en suelo, y en paredes baldosa blanca rectangular hasta \r\n            media altura rematada con un perfil metálico. Con esta combinación de baldosas ahorramos \r\n            dinero, es más barato hacer media altura y además en blanco, de esta manera podemos hacer \r\n            resaltar otro elemento de la cocina como los muebles.</p>\r\n            <p>Un ejemplo en <b>locales</b> podría ser:<br>\r\n            Gres porcelánico imitación madera, tiene las cualidades del gres (alta resistencia) y el \r\n            aspecto de la madera, esta baldosa se podría sacar mucho provecho aquí.</p>\r\n            <p>Para cualquier duda o consulta puedes ponerte en contacto con nosotros a través del \r\n            <strong>976 56 55 24</strong> , o si prefieres enviar un e-mail a <strong> info@nzreformas.es</strong>\r\n            , desde la <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" > página de contacto</a> o venir a nuestra \r\n            <a target=\"_blank\" href=\"https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es\" >\r\n             exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.</p>', '2017-10-02 16:44:45', '2017-10-02 16:44:45'),
(1209, 38441, 285, 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda | NZ Reformas', NULL, 'reforma-de-vivienda-en-gomez-de-avellaneda', '<p>\r\n                ¡Hola a todos! Hoy vamos a ver una reforma de vivienda con unos acabados sobrios y \r\n                limpios, propios del lado oscuro. En este proyecto se ha renovado: suelo, puertas, \r\n                pintura, climatización, cocina y baño.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/reforma-integral-gomez-avellaneda-16.jpg\"\r\n            alt=\"Baño con tres baldosas\" title=\"Baño con tres baldosas\" >\r\n            <p>\r\n                Lo primero que veremos es el suelo. Se ha colocado un pavimento laminado con acabado\r\n                roble junto a un rodapié lacado blanco a juego con las nuevas puertas. Se han alisado\r\n                paredes de distintas zonas que tenían estucado para dar un estilo acorde a la nueva \r\n                imagen de la vivienda.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/reforma-integral-gomez-avellaneda-13.jpg\"\r\n            alt=\"\" title=\"\" >\r\n            <p>\r\n                En cuanto instalaciones, además de la electricidad y la fontanería de la cocina y el\r\n                baño, también se ha renovado el sistema de aire acondicionado de toda la vivienda,\r\n                tanto conductos como maquinaría.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/reforma-integral-gomez-avellaneda-22.jpg\"\r\n            alt=\"\" title=\"\" >\r\n            <p>\r\n                El baño se ha reformado completamente, sanitarios, equipamiento, instalaciones y \r\n                revestimientos. Un detalle curioso de la ducha, es que hay total continuidad del suelo\r\n                de baldosa al plato de ducha, y que además la mampara solo se compone de un fijo de \r\n                cristal, no hay hoja corredera.\r\n            </p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/reforma-integral-gomez-avellaneda-20.jpg\"\r\n            alt=\"\" title=\"\" >\r\n            <p>\r\n                Ahora llegamos a lo bueno, la cocina. Esta es la única zona que se ha beneficiado de un \r\n                cambio de distribución. Gracias al espacio ganado de la habitación adyacente podemos\r\n                albergar cocina y comedor en la misma estancia, ambos separados por una isla con barra\r\n                para desayuno. Se han elegido muebles en blanco para dar luz a la cocina dado que \r\n                el suelo y la encimera son de tono oscuro. Un detalle llamativo es que en la isla \r\n                encontramos la vitro, de modo que se cocina en el centro de la misma. Si nos fijamos \r\n                en el suelo, cocina y baño comparten el mismo modelo de baldosa, dos espacios distintos\r\n                con un estilo similar de contrastes muy marcados.\r\n            <p>\r\n            <img src=\"/bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/reforma-integral-gomez-avellaneda-4.jpg\"\r\n            alt=\"\" title=\"\" >\r\n            <p> \r\n                Como conclusión tenemos un proyecto de reforma con unos resultados muy vistosos sin \r\n                ser una reforma completa, dónde a primado el buen gusto del cliente. Para ver más \r\n                fotos del proyecto podéis hacerlo desde <a href=\"http://www.nzreformas.es/proyectos/reformas-de-pisos/reforma-integral-en-gomez-de-avellaneda\"\r\n                target=\"_blank\" >aquí</a>, y para consultarnos cualquier duda puedes hacerlo desde \r\n                <a href=\"https://www.nzreformas.es/contacta-con-nosotros\" >página de contacto</a>.\r\n            </p>', '2017-10-25 12:38:40', '2017-10-25 12:38:40'),
(1212, 38432, 285, 'NZ Reformas mencionado en Interempresas', 'NZ Reformas mencionado en Interempresas', 'Interempresas habla de  NZ Reformas en su artículo sobre tendencias en la reforma de viviendas', 'nz-reformas-interempresas', '<p>\r\n¡Buenos días! El diario especializado en el sector industrial, Interempresas, ha publicado recientemente en su web un artículo en el que hablan sobre las tendencias en la reforma de viviendas en España. \r\n</p>\r\n<p>\r\nEn dicha publicación se nos menciona como empresa referente en el sector y se habla de tendencias que nosotros mismos aplicamos en nuestro día a día en las reformas que llevamos a cabo. La decoración y el interiorismo son sectores de gran volatilidad y son las empresas que saben detectar dichas tendencias las que ofrecen a sus clientes un servicio de calidad adaptado a sus necesidades. \r\n</p>\r\n<p>\r\nOs dejamos a continuación el enlace a la publicación de Interempresas para que podáis conocer dos de las corrientes con más demanda en los próximos meses. <a href=\"https://www.interempresas.net/Rehabilitacion/Articulos/204195-Tendencias-en-reformas-de-viviendas-que-buscamos-los-espanoles.html\" title=\"\" target=\"\" rel=\"nofollow\">Haz clic aquí para ir a la noticia</a>\r\n</p>', '2017-12-12 09:51:24', '2017-12-12 09:51:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `title`, `description`) VALUES
(285, 'Reformas', 'reformas', 'Interiorismo | Categoría', 'Categoría de artículos sobre diseño e interiorismo  y proyectos realizados por nuestra empresa NZ Reformas en Zaragoza y alrededores.'),
(286, 'Rehabilitación', 'rehabilitacion', NULL, NULL),
(287, 'Interiorismo', 'interiorismo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8_unicode_ci,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sent` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `body`, `subject`, `phone`, `sent`, `url`) VALUES
(34, 'Rosa Pérez', 'soyrosiki@gmail.com', 'Buenas tardes, soy la presidenta de C.P. de Navas de Tolosa 16. Queríamos pedir presupuesto de reparar un par de terrazas internas, creo que con filtraciones y revisar el tejado. Si tienen que pasar a ver como estan antes de dar presupuesto esta semana seria por la tarde, la proxima por la mañana. Muchas gracias', NULL, '876 16 14 00', '2016-01-26 18:53:48', ''),
(35, 'virginia lebas', 'virginia.l@ono.com', 'buenos dias,me gustaria reformar algunas estancias de la casa: cambiar puertas,suelos,cambiar plato de ducha,poner mamparas,hacer armario..... necesito un presupuesto mas bien ajustado.\r\nespero su llamada\r\nun saludo', NULL, '615447170', '2016-01-30 10:19:49', ''),
(36, 'Rebeca', 'rebecagloss@gmail.com', 'Buenas tardes;\r\nQueremos hacer una pequeña reforma en una comunidad de 8 vecinos.\r\nCambiar suelo de la entrada, forrar primer tramo de escaleras y pintar.\r\nNecesitariamos presupuesto, podamos pasarles medidas de espacio o que pasen a medir.\r\nQuedo en espera de sus noticias, atte.', NULL, '606214266', '2016-02-08 19:18:50', ''),
(37, 'Mohamed', 'mohamedtergo@hotmail.com', 'Hola para reformar la cocina', NULL, '632588557', '2016-02-13 15:23:35', ''),
(38, 'Julia', 'blanquiosmi@gmail.com', 'Me gustaría presupuesto sin compromiso de la reforma de un piso. Cocina , baño, puertas, ventanas y suelos así como diseño de espacios para ganar más cocina .', NULL, '665191518', '2016-02-16 22:10:24', ''),
(39, 'Rebeca', 'rcuencafer@gmail.com', 'He visto su pag web y me gustaría solicitar presupuesto, un saludo.', NULL, '662061286', '2016-03-03 11:41:37', ''),
(40, 'Mohamed', 'mohamedtergo@hotmail.com', 'Hola para reformar la cocina', NULL, '632588557', '2016-03-19 20:12:17', ''),
(44, 'maria jose pascual beltran', 'maria1pas@hotmail.com', 'presupuesto reforma cocina entera', NULL, '625874037', '2016-05-28 14:55:00', ''),
(46, 'Oscar Vicente', 'oscaratas@hotmail.com', 'Buenos días,\r\n\r\nAcabo de comprar un piso nuevo y necesito poner un armario debajo de la poza, ya que solo tengo la poza y la repisa ¿ realizáis este tipo de trabajos?? ¿ como podría recibir un presupuesto?\r\n\r\nUn saludo.', NULL, '699359395', '2016-07-12 11:37:18', ''),
(47, 'Juana', 'juanamarcellan@yahoo.es', 'También hacéis reformas en pisos fuera de Zaragoza ? En concreto Salou.', NULL, '629148024', '2016-07-16 15:38:46', ''),
(49, 'ANA FERNANDEZ MARIN', 'anafdezzgz@hotmail.com', 'QUISIERAMOS PRESUPESTO PARA REFORMAR NUESTRA COCINA', NULL, '636025576', '2016-08-26 11:50:43', ''),
(50, 'elizabeth moreno pineda', 'faces.cruz@hotmail.com', 'Hola, me gustaría saber cuanto sería el presupuesto de la reforma integral,de un piso de  de 95 metros , de cuatro habitaciones, dos baños, cocina y salón. Gracias', NULL, '645877802', '2016-08-30 17:37:24', ''),
(51, 'Margarita Casaus Díaz', 'diazycasaus@gmail.com', 'Me gustaria reformar la cocina', NULL, '625974282', '2016-08-30 17:57:29', ''),
(52, 'Manuel Aparcio Casado', 'manolin_ac@hotmail.com', 'Hola,estaría interesado en una reforma completa de mi cocina.', NULL, '636263508', '2016-08-30 22:35:36', ''),
(53, 'Carlos Minguell Hernandez', 'rmvbfilms@gmail.com', 'Buenos días. Estoy interesado en un presupuesto para una reforma integral de un piso de unos 97 metros cuadrados, incluye  cambio distribucion baño y cocina.', NULL, '644269247', '2016-09-05 13:28:07', ''),
(54, 'jose angel', 'jose.angel.calvo@renault-trucks.com', 'solicitor pptto de cambio de ventanas', NULL, '651396011', '2016-09-05 14:58:10', ''),
(55, 'Jessica', 'jessicamorcanales@gmail.com', 'Buenas tardes queríamos  saber cuando estarían disponibles si decidiesemos hacer una reforma con ustedes gracias', NULL, '630885299', '2016-09-12 18:32:07', ''),
(58, 'Ana Isabel', 'anais.cardona@hotmail.com', 'Buenos días, nos gustaría ampliar nuestro salón que mide 19 m2 con la terraza, se accede a ella a través de una doble ventana corredera, sería quitar esta ventana de puertas correderas, echar suelo pergo hasta el final, bajar techo de la terraza para igualarlo al del salón y cambiar los cristales de la terraza por unos buenos aislantes de PV, actualmente los cristales son con perfil de aluminio, la parte de arriba de ventanas correderas y la de abajo fija transparente, la parte de abajo nos gustaría que no fuera transparente para mayor intimidad, también habría que poner un taquique entre el final de la parde del salón hasta la terraza de aproximadamente 1,5 m2 que creo es la anchura de la terraza. Para cualquier duda me pueden llamar al móvil que les he facilitado anteriormente. Muchas gracias.', NULL, '639422034', '2016-09-16 10:22:04', ''),
(59, 'oscar', 'oscarvicentegiron@gmail.com', 'Me interesaria pedirles presupuesto para una reforma. Gracias...', NULL, '652835004', '2016-09-19 21:01:14', ''),
(60, 'Ruth Eunice', 'eunicebonita65@hotmail.com', 'wc marca cato 1216 el precio por favor', NULL, '5520214855', '2016-10-05 19:15:00', ''),
(61, 'Isabel', 'isabelruiz25yerai@gmail.com', 'Hola keria presepuesto para una cocina gracias', NULL, '671779201', '2016-10-06 19:45:17', ''),
(62, 'Isabel Sariñena', 'isacirach29@hotmail.com', 'Solicito presupuesto para reformar un apartamento de 48 metros cuadrados', NULL, '628485226', '2016-11-10 11:17:11', ''),
(63, 'Alberto Muñoz', 'amunoz1976@hotmail.com', 'Interesado en tener vuestro presupuesto de reforma de cocina y baño. Gracias', NULL, '648219406', '2016-11-16 21:13:41', ''),
(64, 'Esther', 'esthertxu1974@hotmail.es', 'Hace un año les pedí presupuesto para reforma integral de cocina, al final no la hice y quería retomarla de nuevo de manera diferente a la estudiada anteriormente. Sería para empezar el 13-14 de febrero\r\nGracias, un saludo', NULL, '655950422', '2016-11-29 01:08:24', ''),
(65, 'Pedro  montañez', 'pedro3035@hotmail.com', 'Quiero reformar el piso pero me urge presupuesto ya que trabajo dura y tengo poco tiempo. Para que lo miren y me digan  muchas gracias', NULL, '685351863', '2016-12-05 17:37:50', ''),
(66, 'josep maria.', 'jomacal74@gmail.com', 'reforma de un piso de 60 m2. en zaragoza ,  de instalación de electricidad, con cuadro nuevo, piuas, diferenciales, iga etc.,', NULL, '647849051', '2016-12-11 12:48:22', ''),
(67, 'jorge', 'biondi1976@hotmail.com', 'Hola, hace 3 años compramos una vivienda vieja, de mediados de los años 70, la reformamos, pusimos calefacción y ventanas de aluminio, y desde entonces todos los inviernos las ventanas de 2 dormitorios \"sudan\" mucho, se forman manchas de humadad en pared y techo así como moho en esos 2 dormitorios que dan a la fachada.Quisiera saber si pueden resolverme el problema.Gracias', NULL, '600236072', '2016-12-16 00:25:36', ''),
(68, 'Isabel', 'isacirach29@hotmail.com', 'Tengo un apartamento de 50 metros  y quiero reformarlo', NULL, '628485226', '2016-12-16 19:22:20', ''),
(71, 'VICTOR', 'victor82oc@gmail.com', 'Quiero ponerme suelo laminado en la vivienda. Además cambiar las 5 puertas de la casa (una de cocina) más la puerta blindada.\r\nSon 60m2 de suelo (ya me lo han medido varias veces)', NULL, '667806170', '2016-12-30 21:03:54', ''),
(72, 'Carmen Sorribas', 'mamensorribas@gmail.com', 'Necesito cambiar baño completo, con bañera, azulejos etc. También poner tarima , AC5, en toda la casa son 90 metros y cambiar 8 puertas', NULL, '976569007', '2017-01-02 09:19:17', ''),
(73, 'LAURA', 'lauracond81@hotmail.com', 'quería cambiar el suelo y pintar toda la vivienda. Arreglar carpintería. Modificar puntos de electricidad y  tomas antenas de salón y pasillo.', NULL, '635121907', '2017-01-08 21:45:54', ''),
(74, 'Patricia Martín', 'p.martinbel@gmail.com', 'Buenas tardes, querría saber el horario que tienen en la oficina de Duqesa Villahermosa. Quiero hacer rforma de mi piso pero necesito orientación y quería ir a consultarles pero mi horario de trabajo es partido, para saber si al mediodía están abiertos.\r\nGracias, un saludo.', NULL, '680567485', '2017-01-12 17:06:59', ''),
(75, 'Luz y Color 2000', 'lc@luzycolor2000.com', 'Buenos dias.\r\nLes presentamos nuestra empresa dedicada a la fabricación de productos de iluminación Led.\r\nEsperando sea de su interés y poder colaborar con ustedes.\r\nReciban un cordial saludo.\r\nwww.luzycolor2000.com', NULL, '918921045', '2017-01-17 11:04:15', ''),
(76, 'Alberto Miranda', 'jamiranda3@hotmail.com', 'Necesitamos reformar de forma integral una vivienda de 75 m2. adquirida recientemente  en calle Latassa de Zaragoza', NULL, '675440599', '2017-01-19 11:37:53', ''),
(77, 'Angeles', 'angeleshercar@gmail.com', 'Presupuesto reforma piso parque hispanidad', NULL, '671236156', '2017-01-20 16:13:29', ''),
(78, 'RAMON FERRER DELPON', 'ra_fe_de@hotmail.com', 'REFORMAR COCINA', NULL, '660502999', '2017-01-20 18:44:32', ''),
(79, 'lorenzo löpez', 'loli_lorenzo71@hotmail.com', 'Desearía presupuesto para renovar la cocina', NULL, '608659751', '2017-01-23 18:11:49', ''),
(80, 'Concha cubero', 'ccuberovextra@gmail.com', 'Me gustaría concertar una visita en mi domicilio para explicarles lo que me gustaría.', NULL, '607351397', '2017-01-24 07:44:53', ''),
(81, 'José Antonio Lacasa', 'ja.lacasa@hotmail.com', 'Suelo de gres con rodapiés para trastero de 4 m. de largo por 2 m. de ancho.', NULL, '628079420', '2017-01-28 22:34:16', ''),
(82, 'Vicenta', 'vicenta1616@gmail.com', 'Quiero un presupuesto para reformar mi casa en la Puebla de alfinden', NULL, '680730871', '2017-01-31 22:51:49', ''),
(83, 'Pilar', 'sivozpi@yahoo.es', 'Cambio de puertas, quitar estucado y cambio de bañera por plato de ducha.', NULL, '616786788', '2017-02-15 23:18:51', ''),
(84, 'Victor Marín', 'victormarin@sostecnia.com', 'Aislamientos, cerrar terraza, alisar paredes, lijar suelo parquet, modificar armarios...', NULL, '633312500', '2017-02-23 07:44:08', ''),
(85, 'Conchita', 'chbuisan82@gmail.com', 'Tengo unos cajones rotos .Y la mesa estropeada.', NULL, '665591359', '2017-02-23 11:56:30', ''),
(86, 'SUSANA LÓPEZ', 'dakinicontacto@gmail.com', 'Me es muy grato dirigirme a ustedes para ofrecerles servicios informáticos en la ciudad de Zaragoza, un mercado que no para de crecer y atraer a empresas, que posteriormente se convierten en excelentes clientes\r\n\r\nLe ofrezco:\r\n•         Mantenimiento y asistencia informática\r\n•         Desplazamiento a domicilio / empresa\r\n•         Soporte informático\r\n•         Reparación de ordenadores\r\n•         Creación y diseño de páginas web\r\n•         Instalación de dispositivos, periféricos y componentes\r\n•         Configuración de software y hardware\r\n•         Sistemas operativos\r\n•         Eliminación de virus, troyanos, spyware y rootkits\r\n•         Recuperación de datos\r\n•         Copias de seguridad\r\n•         Incompatibilidades\r\n•         Urgencias informáticas\r\n•         Consultas y formación\r\n\r\nDebe saber que una de mis principales características es la flexibilidad para llevar adelante su negocio contemplando todas sus necesidades y requerimientos\r\n\r\nSi está interesado en recibir mayor información sobre servicios que puedo ofrecerle, no dude en comunicarse con Dakini Servicios Informáticos\r\n\r\nEsperando que la información sea de su interés, atentamente reciban un saludo\r\n\r\nSUSANA LÓPEZ\r\n656640236\r\ndakinicontacto@gmail.com\r\nhttps://www.facebook.com/DakiniContacto/', NULL, '656640236', '2017-02-23 16:37:03', ''),
(87, 'Ignacio', 'Ignajimgo@hotmail.com', 'Vendo radiadores climastar bajo consumo tengo 4 de piedra nuevos a estrenar mando fotos nuevos cuestan 500 cada uno dejo los 4 por 600 por si les ave falta en alguna reforma sueltos 160 cada uno gracias', NULL, '616250393', '2017-02-28 15:55:15', ''),
(88, 'Pilar', 'jmca23@gmail.com', 'Quisiera presupuestto de refoma de la terraza.   Gracias', NULL, '630916149', '2017-02-28 17:55:03', ''),
(89, 'soufiane', 'maidsou@hotmail.com', 'reforma sulo del bano', NULL, '632665790', '2017-03-01 14:13:01', ''),
(90, 'Jose Manuel', 'josemluis18@gmail.com', 'DESEARIA PRESUPUESTO DE CAMBIAR BAÑERA POR DUCHA,MEDIDAS BAÑERA 1.67,ALIACATADO TODA BAÑERA  ALTURA 2.50,MAMPARA Y GRIFERIA', NULL, '675416379', '2017-03-03 12:13:48', ''),
(91, 'Manuel', 'macasicope@gmail.com', 'Hola, quisiera cambiar mi ducha por otra mas grande en Alagon', NULL, '618607502', '2017-03-03 18:31:26', ''),
(92, 'Jose Manuel Cacho', 'cachohuesca@hotmail.com', 'Mi domicilio esta en la calle Andrés gurpíde ,12.  La reforma consistiría en mover un tabique y todo lo que ello conlleva.  un saludo', NULL, '647655121', '2017-03-10 10:02:15', ''),
(93, 'pilar', 'jmca23@gmail.com', 'querria reformar la terraza', NULL, '630916149', '2017-03-10 11:39:11', ''),
(94, 'Jose Antonio Alcay Gustrán', 'toalgus@hotmail.com', 'Queria hacer una reforma en el baño, cambiar una bañera por un plato de ducha con mampara de 170 x 90, cortando una esquina 15x15 de un pilar', NULL, '658766140', '2017-03-13 09:35:12', ''),
(95, 'Cristian', 'papaleocar@hotmail.es', 'Quitar papel de pared piso  70 m2', NULL, '676004146', '2017-03-15 11:50:16', ''),
(96, 'Laura', 'laurika_lon@hotmail.com', 'Hola me gustaría cambiar el suelo del piso poner gres unos 70 metros serian', NULL, '685628259', '2017-03-20 15:17:33', ''),
(97, 'Paloma', 'paloma.deldiego@gmail.com', 'Por favor, quisiera solicitar presupuesto para reforma de cocina e instalación de parquet y cambio de puertas en vivienda sita en el bº de la Jota. Gracias.', NULL, '627233252', '2017-03-23 15:04:19', ''),
(98, 'Javier', 'fjmore73@gmail.com', 'Estamos estudiando como afrontar una reforma de uno de los baños de nuestra casa. Cambiar alicatado, tubería y saneamientos, e la disposición de algunos elementos como cambio de radiador de posición, o cambiar una puerta convencional por corredera. Hacerlo todo nuevo.\r\nSi necesitan alguna información, me indiquen.\r\nSaludos\r\nJavier', NULL, '610264175', '2017-03-26 11:47:51', ''),
(99, 'gonzalo olmo', 'golmocorrecher@gmail.com', 'Estaria interesado en cambiar una claraboya .\r\n\r\nEl piso esta al lado de su tienda duquesa villahermosa 157 zaragoza', NULL, '650434290', '2017-03-27 15:12:28', ''),
(100, 'marina', 'marinapitak@gmail.com', 'reforma cocina  completa con ventana .baño completo y puertas y ventanas y afrmario /s empotrados', NULL, '654341743', '2017-04-01 15:19:21', ''),
(101, 'Daniel', 'daniblascopellejero@gmail.com', 'Hola me pongo en contacto con ustedes para solicitarles un presupuesto aproximado para una reforma completa de un piso que voy a adquirir.la reforma consistiria en:\r\nPiso de 85 metros compuesto de 4 habitaciones cocina y baño:cambiar suelo,puertas y ventanas.electricidad cambiar interruptores y enchufes.reforma completa de baño y cocina con mobiliario incluido.pintar piso completo.ademas existiria la posibilidad de hacer un segundo cuarto de baño en la habitacion principal.ruego contesten a la mayor brevedad posible,gracias.', NULL, '659027169', '2017-04-02 18:20:22', ''),
(102, 'Zayra Gómez', 'zayra76@gmail.com', 'Cerramiento terraza de 20 metros, sobre muro de 1 metro.\r\nTipo celosia madera o verja con seto artificial.\r\nMuchas gracias', NULL, '636988132', '2017-04-03 19:39:23', ''),
(103, 'Jose Angel', 'ja_laganga@hotmail.com', 'Buenos días, necesitaría presupuesto para ampliar un terraza. Muchas gracias. Un saludo.', NULL, '646439535', '2017-04-08 10:50:15', ''),
(104, 'samuel', 'samuplay80@gmail.com', 'Hola, me gustaria saber el precio y plazo para poner una puerta corredera empotrada y con ello cambiar la entrada en la cocina', NULL, '617830285', '2017-04-10 20:05:18', ''),
(105, 'Javi', 'borobia74@hotmail.com', 'Buenas tardes,me llamo Javi y querría saber cuánto me costaría tirar una casa vieja y levantarla nuevo con proyecto de arquitecto y todo en condiciones', NULL, '617805591', '2017-04-11 18:30:45', ''),
(106, 'Fernando', 'feromesan@gmail.com', 'Queremos reformar toda la casa. Actur', NULL, '600932650', '2017-04-11 22:59:06', ''),
(107, 'Maria', 'mariareyesc@gmail.com', 'Buenas tardes. Necesitaría presupuesto de arreglos en cocina. Paredes, mobiliario,  fontanwria y electricidad', NULL, '647683588', '2017-04-15 18:11:36', ''),
(108, 'belinda', 'bld-1984@hotmail.com', 'Quisiera presupuesto para una reforma integral de cocina. Habria que tirar tabique y volver a hacer pared', NULL, '639860507', '2017-04-17 22:16:59', ''),
(109, 'Daniel Marco Fernandez', 'danielmarcof@gmail.com', 'Buenas tardes, mi nombre es Daniel Marco y quisiera reformar mi vivienda, vivo en una casa de una sola planta en el barrio la Jota  y había pensado en dos opciones, la primera es construir una segunda planta encima de la existente y realidad una reforma parcial de la de abajo y la segunda seria solamente la reforma parcial de la planta de abajo, todo dependería del precio y de la viabilidad del proyecto  a la hora de decidir. Como no se si la primera valoración del proyecto la hacen según la información que yo les aporte o si es directamente in situ, no especifico mas mi idea, si necesitan primero saber que tengo en mente me lo dicen y yo les aporto toda la información necesaria, muchas gracias de antemano  y reciban un cordial saludo,\r\n\r\nDani.', NULL, '658455896', '2017-04-18 18:47:17', ''),
(110, 'Natalia', 'nrd_89@hotmail.com', 'Piso de 54 metros, que precisa reforma integral (únicamente están cambiadas recientemente 5 ventanas, faltaria la ventana de la galería y la puerta de acceso a ella). \r\n- Eliminar alicatados de baño y cocina, sanitarios, puerta de galería, alisar paredes, estucar zonas de ventanas, y rozas realizadas, pintar vivienda.\r\n- Realizar rozas de electricidad\r\n- Eliminar puertas de interior (5) y colocar premarcos y puertas de interior (2 y 2 correderas, siendo una de ella doble), colocar puerta exterior blindada. \r\n- Alicatar suelo y paredes de baño y cocina\r\n- Instalacion de gas, electricidad y agua (radiadores, caldera y boletín)\r\n- Poner suelo laminado\r\n- Poner toallero, toma de TV y teléfono\r\n- Eliminar tabique entre cocina y salon y poner pared en forma de arco con barra y encimara (barra americana)\r\n- Cambiar fontaneria, instalar mampara, lavabo y espejo, griferia\r\n- Cocina con muebles, campana extractora, horno y vitroceramica\r\n- Colocar ventana de galera y puerta de acceso a ella.\r\n\r\nPodrían darme un presupuesto aproximado, incluyendo el IVA?? (y si alguna cosa se me hubiera olvidado, añadirla)\r\n\r\nMuchas gracias\r\n\r\nUn saludo', NULL, '672775141', '2017-04-26 20:13:24', ''),
(111, 'Marga', 'margatrufero@gmail.com', 'Queríamos cambiar la bañera por una ducha, pero sin  tener que cambiar todo el alicatado', NULL, '670669161', '2017-04-27 16:11:59', ''),
(112, 'Pavel', 'pavelvidinei@yahoo.es', 'Buenas tardes,queria preguntar si necesita personal a vuestra empresa ,soy albañil y hago todo tipo de trabajo reformas integrales con furgoneta propia ,gracias', NULL, '630266820', '2017-04-27 20:45:32', ''),
(113, 'Alejandro Serrano', 'Alex_serrano_93@hotmail.com', 'Tirar tabique de 2,37 metros por 3 metros de largo  para luego seguir con mas reforma del espacio que quede', NULL, '654317584', '2017-05-11 14:03:13', ''),
(114, 'marisa gonzalez izquierdo', 'marisagi410@hotmail.com', 'buenas tardes, me llamo marisa y no les envio estas letras para pedirles presupuesto, veran soy autonoma y me dedico a hacer  trabajos de limpiezas de fin de obra. no sabia como ponerme  en contacto con ustedes y aprovecho esta ventanita para darles conocer mi trabajo. me gustaria tener respuesta por su parte, les doy las gracias de antemano, reciban un saludo, marisa, tfn 685266675.', NULL, '685266675', '2017-05-15 17:14:14', ''),
(115, 'Cintia Torrea ayora', 'Cintia269_@hotmail.com', 'Para comunidad de vecinos necesaria presupuesto para terraza q pasa el agua al local y galería exterior en mal estado.  Muchas gracias', NULL, '620616181', '2017-05-23 16:34:54', ''),
(116, 'BEATRIZ ANDRES CHARLEZ', 'b.andrescharlez@gmail.com', 'Necesito presupuesto para cambiar la encimera de la cocina mide 4,40 mts en forma de L, con zócalo incluido y una zona más alta en la parte de la vitroceramica, hacía la campana 50 cmts. aprox,  el material en granito  y añadir un fregadero encastrado.', NULL, '625055525', '2017-05-24 17:42:57', ''),
(117, 'Jorge Guillermo gracia hernandez', 'jorjoan_92@hotmail.com', 'Soy el presidente de una comunidad de vecinos en villanueva de gallego, y me gustaria saber si tambien se dedican a cambiar cancelas y poner unas nuevos. Me gustaria hablar y decirles lo que necesitqmos exactamente', NULL, '677901899', '2017-05-31 17:31:29', ''),
(118, 'Inma', 'inma89@live.com', 'Deseamos realizar una reforma en un piso de 108m2, agrandar algunas habitaciones, cambiar suelos 10 puertas 7ventanas + 3 puertas balcón, alisar paredes , cocina y 2baños  completos y pintar y posiblemente cambiar una puerta de sitio y cambiar la distribución de radiadores .', NULL, '665513221', '2017-06-04 19:20:32', ''),
(119, 'Sandra', 'sandricius7@gmail.com', 'Buenos días, me gustaría concertar una cita esta semana para presupuestar una cocina con península.muchas gracias', NULL, '608777928', '2017-06-06 12:01:53', ''),
(120, 'claudia', 'claudiacm83@hotmail.com', 'quería solicitar presupuesto de reforma para la casa que les adjunto en el enlace es una reforma integral. En cuanto a la financiación como funcionan? Muchas gracias  http://www.fotocasa.es/vivienda/zaragoza-capital/aire-acondicionado-calefaccion-parking-ascensor-tenor-fleta-18-20-141124389', NULL, '630752941', '2017-06-08 14:34:06', ''),
(121, 'Roberto', 'rober1331@gmail.com', 'hola, quiero presupuesto para reformar vivienda, esta en un cuarto sin ascensor y hay que hacer suelos, puertas, en la cocina cambiarla y baño entero con alicatado, son 60m2.\r\nGracias', NULL, '687726614', '2017-06-09 20:51:11', ''),
(122, 'santiago', 'sanlizana@hotmail.com', 'Hola!\r\nEstaria interesado en realizar una pequeña reforma en la vivienda que consistiria en:\r\n- colocar suelo laminado para unos 55metros cuadrados con rodapie blanco.\r\n-cambiar puertas en color blanco (6, 1 corredera y el interior de la puerta de entrada)\r\n-colocar en el techo focos de led. Serian unos 15. (Pasillo y salon)\r\n-Cambiar en el baño un plato de ducha de 80x80 por uno rectangular de aprox 160x80 y colocar mampara\r\n-Pintar el piso de aprox 72m con techos en blanco y pared color claro (gris o a azul) reparacion de pequeños agujeros en techo de unas cortinas que habia.\r\nMe gustaria saber si hacen tambien reformas que no sean integrales y desde que precio se podia realizar una de estas caracteristicas. Buscamos algo economico pero no de mala calidad. \r\nSantiago\r\n651943256', NULL, '651943256', '2017-06-17 11:56:29', ''),
(123, 'Magdalena', 'magdii86.zgz@hotmail.com', 'Hola me gustaria saber si cambias ventanas en las comunidades nos interesa cambiar 4 ventanas de escalera tambien pintar la escalera y cambiar berendillas de los balcones .\r\nGracias por cualquier respuesta\r\nUn saludo, Magda', NULL, '650771722', '2017-06-18 14:23:22', ''),
(124, 'Asma', 'asmasakhi80@gmail.com', 'Hola necesito  saber  el presupuesto para hace una  reforma básica en me casa', NULL, '631570379', '2017-06-26 19:00:07', ''),
(125, 'Isabel', 'anacondisa@hotmail.com', 'Arreglo de cocina', NULL, '620903778', '2017-07-04 13:31:31', ''),
(126, 'Raquel', 'raque.llg@hotmail.com', 'Hacen trabajos en Tenerife ?', NULL, '628073963', '2017-07-05 17:11:05', ''),
(127, 'Mari', 'maryaguileraholgado43@gmail.com', 'Acabo de comprar un piso y me gustaría arreglar cocina y suelos .\r\nNecesito presupuesto es un piso de 75 metros', NULL, '697449108', '2017-07-06 22:08:30', ''),
(128, 'Francisco', 'frant80@hotmail.com', 'Solicito presupuesto para  quitar baldosas de fachada local', NULL, '676543721', '2017-07-10 19:33:44', ''),
(129, 'Noemí Gil Martinez', 'ngmleo@hotmail.com', 'Buenas tardes. Quisiera hacer unas pequeñas mejoras en mi piso. Muchas gracias', NULL, '653851593', '2017-07-11 16:55:34', ''),
(130, 'Alejandro Creo Rodriguez', 'info@the3dcube.es', 'buenos dias\r\nte invito a visitar mi web en la que ofrezco los servicios de infoarquitectura 3d, para arquitectos, diseñadores, interioristas, decoradores, ingenieros, construccion......representacion grafica de infografias 3d tanto en el campo de la arquitectura, como del diseño de interiores....acabados realistas y de calidad en la creacion de imagenes para catalogos de muebles y de interiores .\r\n\r\nCreacion de ambientes ficticios para la muestra de mobiliario.\r\n\r\nVisitas virtuales interactivas 360. \r\n\r\n \r\nwww.the3dcube.es\r\n \r\n \r\nAmplia experiencia con arquitectos, empresas de reformas e interioristas.\r\n \r\npuedes consultar presupuestos sin ningun problema.\r\n\r\nEn caso de colaboraciones continuas podemos llegar a un acuerdo mensual, como hago con otras empresas del sector.\r\n \r\nun saludo\r\nthe3dcube\r\n\r\n\r\nHi.\r\ni offer services of design 3d.\r\nI m an experienced 3d designer/inphography, working internationally.\r\ncheck my web www.the3dcube.es\r\nif you need my services, please, contact me.\r\n\r\nwe can make nice projects together.\r\n\r\nthank you\r\n\r\nRegards\r\nthe3dcube', NULL, '661019282', '2017-07-12 11:30:07', ''),
(131, 'DAPHNÉE MABIT', 'daphnee.mabit@hotmail.com', 'Buenos días: \r\nAcabamos de adquirir una casa independiente y nuestra intención es reformarla. Podrían aprovecharse algunos elementos en buen estado. Nos interesaría conseguir un presupuesto sin compromiso. \r\nGracias de antemano.', NULL, '653962519', '2017-07-16 13:29:03', ''),
(132, 'Natividad Alfranca Luengo', 'ricarllanes@gmail.com', 'Solicito presupuesto para arreglo de un baño. Un saludo.', NULL, '652967301', '2017-07-24 11:43:34', ''),
(133, 'diomar', 'diomar_90zgz@hotmail.com', 'Buenos dias:\r\nMe planteo cambiar el suelo de una casa de 90m2,seria quitar el parquet y poner tarima o algo economico, debajo hay baldosa.\r\nTambien quiero presupuesto de quitar gotele del gordo.\r\nUn saludo.', NULL, '687512292', '2017-07-25 11:32:49', ''),
(134, 'Monica', 'monicaprietomartinez@gmail.com', 'Reforma de piso, con optimización del espacio.Sector Romareda. Piso en propiedad en Agosto finales', NULL, '691091692', '2017-08-01 16:26:56', ''),
(135, 'ISED Formación', 'zaragoza@ised.es', 'Buenos días,\r\n\r\nSomos un centro de formación situado en la calle Burgos. Necesitaríamos que nos hicieran un presupuesto para cambiar el suelo de un despacho. Son 12 m2. Actualmente tiene parquet. Queremos poner algún tipo de baldosa que imite al parquet.\r\n\r\nMuchas gracias. Un saludo cordial.', NULL, '976234782', '2017-08-24 21:26:53', ''),
(137, 'Dario', 'darivsjf@hotmail.com', 'Reforma de piso en Ventura Rodríguez (60 m2)\r\nCocina 6,73m2\r\nBaño 4,4 m2.\r\nElectricidad\r\nFontanería\r\nAlisado paredes.', NULL, '659109529', '2017-09-13 09:48:09', ''),
(138, 'David jorro lasmarias', 'davidjolasmarias@gmail.com', 'Buenas tardes me acabo de comprar un piso y me gustaría reformarlo.Tiene unos 79 metros y me gustaría solicitar un presupuesto. Muchas gracias', NULL, '685838440', '2017-09-21 18:59:35', ''),
(139, 'Ramona', 'ramoramonciu@gmail.com', 'Necesito  un  presupuesto  para  la  reforma  de un  piso', NULL, '600860242', '2017-09-23 14:52:05', ''),
(140, 'Adrian', 'adrian@deseyo.es', 'Hola! Encantado de hablar con vosotros!. Somos una agencia de marketing, contamos con muy buenos profesionales del sector a precios muy económicos. ¿Queréis actualizar vuestra página web para poder ampliar clientes y llegar a más lugares, cualquier diseño gráfico o alguna otra cosa? Nos gustaría charlar con vosotros y ayudar a que consigáis vuestros objetivos marcados. \r\n\r\n¿Querrías algo más de información? También podéis visitarnos en www.deseyo.es\r\n\r\nMuchas gracias, un saludo muy grande.', NULL, '666933647', '2017-09-27 15:46:15', ''),
(141, 'test', 'aaron@nzreformas.es', 'asdasdas', NULL, '123456789', '2017-09-28 16:54:33', ''),
(142, 'Amelia', 'ochonueves@hotmail.com', 'Hola. Me gustaría ir reformando la casa .... y me gustaría empezar por bodega ( planta calle) y recibidor \r\nMuchas gracias', NULL, '675555503', '2017-10-02 13:07:34', ''),
(143, 'Carlos', 'carlosamplaries@gmail.com', 'Hola buenas tardes me gustaria pedir un presupuesto para una reforma integral para una vivienda.Llamar por la tarde.Saludos.', NULL, '646326293', '2017-10-02 17:47:41', ''),
(144, 'Estrella', 'estrellafrojas@gmail.com', 'Estaría interesada en presupuesto de una reforma integral', NULL, '650454704', '2017-10-03 11:50:46', ''),
(145, 'celia', 'celiabautist@yahoo.es', 'Buenos días querría presupuesto para cambiar el suelo de un piso de 50 m ahora tiene tarima y sería poner baldosa de la que imita a parquet gracias', NULL, '626616021', '2017-10-15 13:24:47', ''),
(146, 'David', 'cifuxri@hotmail.com', 'Quiero saber presupuesto para poner un suelo de baldosa sobre suelo de terrazo de aproximadamente 40 metros cuadrados en el camping Bohalar.', NULL, '654422722', '2017-10-24 19:03:15', ''),
(147, 'Cesar', 'xesarp_@msn.com', 'Buenas tardes,\r\n\r\nQueremos hacer una reforma integral y nos han gustado sus cocinas', NULL, '655931996', '2017-10-28 13:16:31', ''),
(148, 'María José Serrano', 'templarioszgza@gmail.com', 'Hola hemos cogido un bar en calle Ponzsno de unos 55 metros y nos gustaría arreglarlo un poquito. No hay que hacer demasiadas cosas, pero nos gustaría que echasen un vistazo y nos dieran presupuesto en función de lo que hay que hacer para acondicionarlo. Gracias', NULL, '605577555', '2017-10-30 13:46:56', ''),
(149, 'PILAR REVUELTO RIBES', 'pilarrevueltoribes@gmail.com', 'quisiera presupuesto para n piso de 60 mtrs una reforma integral', NULL, '657285808', '2017-10-31 20:37:36', ''),
(150, 'María Jesús', 'm.jperalta@hotmail.es', 'Buenas tardes,quiero pedir presupuesto para reformar la cocina.', NULL, '649213908', '2017-11-03 19:03:54', ''),
(151, 'Alejandro', 'acombalia@gmail.com', 'Reforma integral de una vivienda de 70m2 en Zaragoza.', NULL, '695395620', '2017-11-04 13:54:04', ''),
(152, 'AURORA CALAVIA SERRANO', 'samana.95@gmail.com', 'Presupuesto muebles cicina', NULL, '625176975', '2017-11-12 11:13:28', ''),
(153, 'JESUS MELERO', 'jfmamc@gmail.com', 'Reformar baño en Condes de Aragon 11', NULL, '976353965', '2017-11-14 18:26:09', ''),
(154, 'Luis', 'Coluccisgroup@gmail.com', 'Buenas tardes, gusto saludarles\r\n\r\nEscribo por cotización de reforma en local comercial en CC Gran Casa Zaragoza.', NULL, '645578271', '2017-11-15 19:32:32', ''),
(155, 'Luis miguel', 'cristobalfenero79@gmail.com', 'Pedir presupuesto para cocina y baño', NULL, '601287263', '2017-11-27 13:21:29', ''),
(156, 'luis', 'luis-paniagua@hotmail.com', 'necesito presupuesto para realizar reforma integral de un piso de 95 m2, situado en Zaragoza.La reforma consiste en : Modificar 2 baños, 1 cocina , cambio de carpintería interior, sustitución de ventanas y puertas exteriores, mover un tabique , instalación de aire acondicionado,...etc .\r\nActualmente vivo fuera de Zaragoza y me desplazo de forma esporádica a esta ciudad, por lo que podríamos quedar para ver la reforma y realizar presupuesto, los días : 15 de Diciembre ( a partir de las 18 horas ), días 26 y 27 de Diciembre, en horario a convenir. Espero confirmación.\r\nSaludos\r\n\r\nLuis', NULL, '609178758', '2017-11-27 17:09:41', ''),
(157, 'ALICIA RONDAN', 'alylucy19812@gmail.com', 'HOLA BUENAS TARDES,NECESITO PRESUPUESTO  DE REFORMA EN UNA PARCELA,EN EL SECTOR DE TORRERO,LA HE TENIDO ALQUILADA VARIAS VECES,PERO NO HAN TENIDO MANTENIMIENTO NINGUNO,LO QUE ME GUSTARIA HACERLE ES:ALISAR LAS PAREDES DE TODA LA CASA Y PATIO INTERIOR,PINTARLA DE BLANCO,TODO,Y CAMBIAR PUERTAS\r\nLA CASA ESTA DISTRIBUIDA EN 4 HABITACIONES MUY PEQUEÑAS,BAÑO Y COCINA,Y UN PATIO INTERIOR\r\nESPERO SU RESPUESTA\r\nUN SALUDO GRACIAS', NULL, '658759614', '2017-11-27 17:40:10', ''),
(158, 'Rubén', 'rubenze@hotmail.com', 'Hola, quería hacer un cambio de bañera, sería una por otra, la nueva de 170 x 70, la grifería sería la misma que entonces y las baldosas estoy pendiente de si la comunidad me proporciona o no.\r\nSi me pudieran dar un presupuesto estaría agradecido.\r\nUn saludo', NULL, '655600753', '2017-11-29 08:27:31', ''),
(159, 'Nadjette', 'nadjettekrazdi@gmail.com', 'Quiero reformar el baño', NULL, '667345935', '2017-11-30 14:48:53', ''),
(160, 'Marta', 'msalguero84@hotmail.com', 'Reforma de un baño', NULL, '665975670', '2017-11-30 21:58:29', ''),
(161, 'Francis', 'francisutrillass@outlook.es', 'Hola, sobre la oferta de empleo, me llamo Francis tengo 46 años , 28 años en el gremio de los cuales 15 de autónomo, me dedicado a obra, reforma y rehabilitación, también he trabajado 5 años de jefe de equipo, si queréis saber más de mi experiencia ponernos en contacto con migo.\r\nUn saludo y gracias', NULL, '630668130', '2017-12-07 09:30:31', ''),
(162, 'RUTH MELENDO', 'rmelendo@gmail.com', 'Me gustaría pedir presupuesto de tirar un tabique en un piso antiguo de las delicias que separa el salón de una habitación. Los techos están a la misma altura y no hay que tener cuidado con el suelo porque lo cambiaremos despues. No hay que tocar electricidad.', NULL, '655152220', '2017-12-12 17:27:18', ''),
(163, 'Fernando Viruete', 'prensa@fernandoviruete.es', 'Ofrezco mis servicios de gabinete de prensa, para publicar noticias de su empresa en Zaragoza y ámbito nacional www.fernandoviruete.es\r\nExperiencia\r\nGabinete de prensa y comunicación \r\nFernando Viruete   www.fernandoviruete.es \r\nCon una experiencia de 20 años en relación con medios de comunicación\r\nAlcanzando cobertura nacional en cientos de medios, Telecinco, TVE, Cadena Ser, Onda Cero, Radio Nacional de España, El Mundo, Diario Marca, Hola.com… Clientes como Televisión Española, Diario Marca, el Corte Ingles, Ayuntamiento de Barcelona, Federación de Alzheimer de Madrid…\r\n\r\nProyectos\r\n\r\nHe tenido arquitectos prestigiosos en ámbito mundial como Andy Backer fue mano derecha de William McDonough (pionero de la economía circular) sostenibilidad, arquitectos, de interiores, decoradores, paisajistas en ámbito nacional de primer orden.\r\n\r\nLlevando la imagen de grandes marcas nacionales, medianas y pequeñas a través de la organización de eventos segmentados a medida, entre tantos a través de uno de los realizadores jefe del programa de \r\n                                      \r\nTelecinco  y otros canales de televisión,  se puede apreciar la calidad del realizador, un spot que se está vendiendo marcas como Diario Marca a Televisión Española, Adidas….\r\n\r\nHe tenido en mis proyectos al cineasta Paco Cabezas, fue elegido por Nicolás Cage para dirigir la película Tokarev protagonizada por Nicolás Cage en Hollywood, el director Miguel Angel Lamata ha dirigido entre tantas Isi Disi 2 protagonizada por Santiago Segura, responsable de prensa y comunicación de Perceval fue elegido como corto al Festival de CANNES, promocionando la serie de Walking Dead de la Fox.\r\n\r\nDiseñadoras de moda internacionales, buffet de abogados, entrenadores personales ( entrenando a gente famosa de la sociedad española)\r\n\r\nHe sido responsable de proyectos dentro del Salón Internacional del Comic de Barcelona, responsable de campañas de salud en ámbito nacional, , proyectos deportivos con ex-jugadores del Real Madrid, Real Zaragoza, ex-selección española, medallistas olímpicos de renombre, participando en los eventos personas con relevancia en la sociedad española, periodistas importantes, todo tipo de eventos, desde ruedas de prensa, presentaciones, eventos a medida, ver mi web www.fernandoviruete.es\r\n\r\nprensa@fernandoviruete.es \r\n686 240 416', NULL, '686240416', '2017-12-18 17:26:37', ''),
(164, 'Montse', 'malcubierrezornoza@gmail.com', 'Puerta de exterior para cerrar una calle', NULL, '692046017', '2017-12-20 15:30:58', ''),
(165, 'sergio', 'sergiochomo7@hotmail.com', 'me gustaria saber si tienen  servicio para cambiar  ventanas  dela casa   y como es el tema de financiacion', NULL, '671933015', '2017-12-21 12:33:32', ''),
(166, 'Rodrigo', 'rodrigo_palazin@hotmail.com', 'Muy buenas\r\nQuiero hacer una reforma integral en una casa de planta baja. La superficie es de 82 m2 de vivienda y otros 80 de patio. Cambio de distribucion incluyendo 3 habitaciones, un servicio y un baño completo, cocina, salon, fontaneria, luz...todo. habria que tirar el tejado y hacer una terraza. Tambien considerar que actualmente la casa es de 60 m2 y para ampliarla a los 82 m2 que queremos hay que demoler un muro de carga y desplazarlo y asi ganar terreno al patio.\r\nMuchas gracias', NULL, '644772238', '2017-12-24 17:21:51', ''),
(167, 'Angel', 'angel.sisa91@gmail.com', 'Hola, me voy a comprar una casa próximamente y esta para hacer una reforma integral. Me gustaría que me explicarais como funcionan vuestras condiciones de financiación y un rango de precios en el que estaría la reforma integral de un piso de 60m. Un saludo. Muchas gracias.', NULL, '699576211', '2017-12-26 12:43:55', ''),
(168, 'MARTA ARNAL GARCIA', 'marta.ag90@gmail.com', 'Hola! \r\n\r\nBuenos días, escribo este correo para comentar mi situación, estoy buscando piso para reformar y tengo un par de inmuebles en el tintero\r\n\r\nSería una vivienda de unos 40-60 metros cuadrados, con una reforma integral (te pongo plano de una de las posibles ofertas), con opción de modificación de tabiques, luz, tuberías, alisado de paredes, suelos, cocina, baño... con calidades medias.\r\n\r\nNo tengo mucha idea de de los permisos que hay que pedir para realizar la reforma y si vosotros os harías cargo de ellos\r\n\r\nPor favor, podrías hacerme un presupuesto aproximado, entiendo que sin plano fijo pueda haber modificaciones una vez empecemos con el proyecto, pero me gustaría tener una idea aproximada para hacer mis cálculos \r\n\r\nMuchas gracias de antemano, me consta de vuestra profesionalidad por varias compañeras de trabajo que han contactado con vosotros\r\n\r\n\r\nUn saludo y miles de gracias\r\n\r\nimage1.jpeg\r\nMARTA ARNAL GARCIA\r\n675422507', NULL, '675422507', '2017-12-27 06:54:35', ''),
(169, 'Carolina', 'carolst83@gmail.com', 'Estamos interesados en que nos hagan presupuesto para arreglar/reparar grietas en paredes, chimenea agrietada, pared abombada y techo en cocina. Ruego urgencia', NULL, '676338642', '2017-12-30 12:43:53', ''),
(170, 'Alvaro Bermudez Gallego', 'a.bermudezgallego@gmail.com', 'Hola, estaría interesado en llevar a cabo una reforma integral en un piso comprado este año de alrededor de 100 metros útiles.', NULL, '605898056', '2017-12-30 15:18:02', ''),
(171, 'Mercedes', 'mterron71@yahoo.es', 'Hola,\r\nQuisiera reformar un piso de unos 50m2, aprovechando el espacio, reformando la cocina, lavabo, pintar, puertas...\r\nQuisiera un presupuesto.\r\nEspero su respuesta. Gracias', NULL, '658017666', '2018-01-02 00:30:09', ''),
(172, 'Manuel Gaona', 'Manuelmartingaona9@gmail.com', 'X favor me pueden ayudar con un trabj k necito trabj soy un chico muy responsable', NULL, '633862689', '2018-01-05 20:37:31', ''),
(173, 'ddgf', 'aaron@nzreformas.es', 'jgty+', NULL, '12344', '2018-01-08 15:21:04', ''),
(174, 'Lourdes salvador', 'lbubal25@gmail.com', 'Presupuesto rehabilitación de vivienda', NULL, '665633684', '2018-01-10 17:19:30', ''),
(175, 'Sergio Gutiérrez', 'sergio82guti@gmail.com', 'Quería reformar cocina y dormitorio:\r\nEl trabajo en cocina sería alicatar paredes y suelo\r\nY en el dormitorio una pared la quiero insonorizar con placas de yeso\r\nGracias.', NULL, '639036144', '2018-01-12 19:20:30', ''),
(176, 'Maitw Alomso', 'zztopb52@hotmail.com', 'Me gustaría que me hicieran presupuesto de cocina', NULL, '686077066', '2018-01-26 21:28:11', ''),
(177, 'Marta Abad', 'marta.abadlopez@gmail.com', 'Buenas tardes. Me pongo en contacto para solicitar presupuesto por cambiar la orientación de unas láminas de suelo en un tramo de pasillo. La superficie es de 0.88x1,9m. Si necesitáis más información no dudéis en consultarme. Saludos', NULL, '660833954', '2018-01-29 16:57:49', ''),
(178, 'Ana royo guiral', 'anaroyoguiral@gmsil.com', 'Quiero presupuesto para muebles de cocina', NULL, '678813841', '2018-01-30 13:24:43', ''),
(179, 'Ruben', 'rubenrh_18@hotmail.com', 'hola querría presupuesto para alisar unas paredes y un pilar', NULL, '626809351', '2018-02-01 21:35:59', ''),
(180, 'Antonio Cabrera olmo', 'cabrera122@hotmail.com', 'Hola sería una reforma del salón y cocina', NULL, '616576447', '2018-02-04 00:39:33', ''),
(181, 'kaitin', 'rgonzalez041@hotmail.com', 'solicitó presupuesto sin compromiso', NULL, '601189388', '2018-02-06 20:06:23', ''),
(182, 'kaitin', 'rgonzalez041@hotmail.com', 'solicitó presupuesto sin compromiso', NULL, '601189388', '2018-02-06 20:06:26', ''),
(183, 'Ester', 'ester.roycastillo@gmail.com', 'Buenos días. Me pongo en contacto con ustedes para solicitar un presupuesto de una reforma. Querríamos reformar un pasillo y un dormitorio de momento. Os puedo facilitar medidas de las dos estancias y las obras que sería necesario realizar en cada una de ellas. Por teléfono sólo puedo atenderos a partir de las 5 de la tarde. Por el correo electrónico os puedo contestar en cualquier momento. Muchas gracias y un saludo.', NULL, '876715122', '2018-02-07 11:31:20', ''),
(184, 'Juan Paolomo', 'hola@go.com', 'Cuidado que te estan tomando el pelo', NULL, '612345678', '2018-02-09 04:04:41', ''),
(185, 'Yunes', 'bassouyunes14@gmail.com', 'Quiero saber el precio para hacer una cocina', NULL, '699705401', '2018-02-11 13:09:39', ''),
(186, 'JOSE DOMINGO GARCIA', 'jdgarcia@prisaradio.com', 'Estimado amigo/a,\r\n\r\nSoy Jose Domingo García, director gerente de COMTIBA GLOBAL (comercializadora publicitaria de las emisoras de radio del grupo PRISA, CADENA SER, LOS 40 PRINCIPALES, CADENA DIAL, MÁXIMA FM, M80 y RADIOLE, actualmente lideres de audiencia)\r\n\r\nEl motivo del envío de este e-mail es para ponerme a su disposición y ofrecerle nuestros productos de publicidad.\r\n\r\nEn estos tiempos que corren es fundamental estar bien posicionado , dar a conocer lo que les diferencia de la competencia y potenciar su marca a través de los canales de radio que le ofrecemos.\r\n\r\nEn la actualidad contamos con grandes descuentos, paquetes y promociones para una semana, quincenas, meses y anuales.\r\n\r\nNo lo vea como un gasto, si no como una inversión, y con una repercusión de hasta casi 150.000 oyentes diarios.\r\n\r\nNos ajustamos a todos los presupuestos.\r\n\r\nSi estuviera interesado me agradaría mucho hacerles una visita para mostrarle nuestros productos, o si estuviera ocupado también podemos contactar vía e-mail o por teléfono.\r\n\r\nSi así fuera le atenderé en el teléfono 649913517 o en el e-mai: jdgarcia@prisaradio.com\r\n\r\nA la espera de su atenta respuesta, un saludo\r\n\r\n\r\nJOSÉ DOMINGO GARCÍA PÉREZ\r\nTlf.: 649913517', NULL, '649913517', '2018-02-13 13:15:59', ''),
(187, 'Mario Roig', 'roig.mario@yahoo.com', 'Me gustaría saber cuanto costaría pintar una pared de 6,50 por 2,40', NULL, '976225000', '2018-02-16 09:27:40', ''),
(188, 'Guadalupe', 'tukafraile@gmail.com', 'Reforma del baño', NULL, '630480112', '2018-02-17 15:37:15', ''),
(189, 'Marcos Roig', 'marcosroig@hotmail.es', 'Tengo que realizar la reforma de la fachada de un local según un proyecto y querría solicitar presupuesto para su realización', NULL, '659829127', '2018-02-19 23:44:19', ''),
(190, 'Aurora Royo', 'cucaroyo@gmail.com', 'Buenos días,\r\nQueremos llevar a cabo la reforma de nuestro piso en Paseo María Agustín y nos gustaría analizar con ustedes la posibilidad de realizar un presupuesto\r\nGracias y un saludo', NULL, '636865403', '2018-02-20 08:38:01', ''),
(191, 'Ricardo Almenara', 'ralmenara83@gmail.com', 'Buenas tardes,\r\n\r\nLes escribo para solicitar precio y plazo de ejecución de la reparación de una terraza comunitaria en Casetas. Es una terraza de unos 180 m2, en la que habría que levantar el pavimento de baldosa, reparar la impermeabilización y volver a colocar el pavimento.\r\n\r\nQuedo a las espera de sus noticias.\r\n\r\nUn cordial saludo,\r\n\r\nRicardo', NULL, '607628525', '2018-02-21 19:37:31', ''),
(192, 'ISABEL', 'ISABEL_AM89@HOTMAIL.COM', 'BUENOS DÍAS, ME GUSTARÍA SOLICITAR PRESUPUESTO DE REFORMA INTEGRAL DE UN PISO DE 93 METROS EN ZARAGOZA. MUCHAS GRACIAS', NULL, '616827059', '2018-02-22 09:47:29', ''),
(193, 'Paola', 'pao.lika@hotmail.com', 'Reforma integral , distribución distinta a ser posible', NULL, '659093205', '2018-03-10 10:07:45', ''),
(194, 'alicia blasco', 'aliziae@hotmail.com', 'Me gustaría presupuesto reforma', NULL, '696613146', '2018-03-13 15:09:50', ''),
(195, 'Angela', 'angelalaitalozano@gmail.com', '¡Buenas tardes! Me gustaría reformar mi piso: tirar un tabique con calefacción y aire acondicionado y cambiar puntos de luz del salón.\r\nEl piso está en Paseo Echegaray en Zaragoza.\r\n\r\nRuego se pongan en contacto conmigo\r\n\r\nMuchas gracias\r\n\r\nUn saludo', NULL, '636700430', '2018-03-14 17:49:04', ''),
(196, 'Maria de las Nieves Garcia Alonso', 'ngarcialonso@gmail.com', 'Acabo de comprar un piso en delicias. Necesitaría un presupuesto de una reforma casi integral. \r\nEspero se ponga en contacto, un saludo', NULL, '652638816', '2018-03-14 18:14:59', ''),
(197, 'Christopher Castro', 'chris@erdrig.com', 'Buenas tardes, quería solicitar un presupuesto para una cocina con los siguientes datos: \r\n\r\n- Cocina de unos 20 metros cuadrados. \r\n- Muebles, cocina, mesas de buena calidad. \r\n- Por un valor igual o superior a 5.000€\r\n- A nombre de Christopher Castro, NIE Y4216089L. \r\n\r\nGracias', NULL, '651934320', '2018-03-21 17:08:08', ''),
(198, 'Alberto Santisteban Lorente', 'santistebanlorente@hotmail.com', 'Hola, estuvisteis el dia 15 en la casa que quiero reformar en TENOR FLETA 60. No e recibido noticias vuestras, os dejo el e-mail y telefono por si ha habido algun error. Saludos.', NULL, '645523039', '2018-03-26 23:52:28', ''),
(199, 'LAURA', 'laurapastor87@hotmail.com', 'Buenos Días,\r\nMe gustaría preguntaros sobre precio aproximado para la reforma integral de un baño de calidades medias. Las medidas serían 2,35 de largo x 1.50 ancho x 2,05 alto. Un saludo.', NULL, '625562049', '2018-03-27 20:17:06', ''),
(200, 'Azucena Martínez', 'azumariba@hotmail.com', 'Buenas, quisiéramos tirar el tejado de nuestra casa y poner terraza. Es una parcela particular. Otro tfno contacto es 649283767 (Alberto). Un saludo', NULL, '653047745', '2018-04-13 14:04:00', ''),
(201, 'Arantxa', 'arantxa.millan@gmail.com', 'Quiero cambiar unas ventanas en un piso de Jaca.', NULL, '662085566', '2018-04-23 16:51:09', ''),
(202, 'Idoia', 'idoia.barot@gmail.com', '¡Buenas tardes!\r\n\r\nVoy a empezar a trabajar en un local de Zaragoza en breves y lo estoy adecuando. Hay varias cosas que me gustaría hacer en él y que se escapan de mis capacidades. No sé si vosotros hacéis obras/proyectos menores. En el caso de que así sea, me gustaría que me pudierais hacer un presupuesto. \r\n\r\n¡Muchas gracias!', NULL, '669158349', '2018-04-25 16:30:08', ''),
(203, 'carmen', 'carmen13@hotmail.es', 'presupuesto para reformar 1 baño cocina salon y dormitorio', NULL, '637322023', '2018-04-28 14:18:38', ''),
(204, 'Julia', 'juliarodriguezcantos@gmail.com', 'Reforma de piso completo. Me gustaría pedir presupuesto aproximado.', NULL, '647121234', '2018-05-01 10:43:59', ''),
(205, 'Elena', 'elenadelcorral73@gmail.com', 'Hola, buenas tardes,\r\nQuería solicitar presupuesto para la reforma integral de un baño de medidas aproximadas 2.18X154, con lavabo, bidé, echo y ducha con mampara.\r\nMuchas gracias', NULL, '656672280', '2018-05-02 17:59:41', ''),
(206, 'Daniel', 'Dannyptt@yahoo.com.ar', 'Quisiera saber cuanto cuestabalisar y pintar mi piso. Es de 60 mts cuadrados. 3 habitaciónes, un salón y pasillo. Gracias', NULL, '635462959', '2018-05-03 11:16:58', ''),
(207, 'Eva Carnicer Alcalde', 'eca85@hotmail.com', 'Hola, somos una pareja que nos gustaría reformar nuestra casa que se encuentra en vía hispanidad 142 y queremos que nos realicen un presupuesto.un saludo', NULL, '635858251', '2018-05-03 15:53:05', ''),
(208, 'Encarna Reina', 'ereina2006@yahoo.es', 'Deseo reformar: \r\nSuelo\r\nPuertas\r\nTirar dos tabiques\r\n2 baños\r\nCocina', NULL, '653827882', '2018-05-03 15:56:34', ''),
(209, 'Pilar', 'pilarfuentesnielfa@gmail.com', 'Presupuesto para pintar un salón grande una habitación, entrada de casa , baño', NULL, '630609697', '2018-05-08 09:39:47', ''),
(210, 'Gemma Sayas Etxezarraga', 'danissme@gmail.com', 'Hola buenas tardes.\r\nQueremos hacer una reforma en la vivienda y me gustaría que me hiciesen un presupuesto.\r\nGracias', NULL, '661335062', '2018-05-08 16:12:07', ''),
(211, 'Marivi', 'marivi.a60@hotmail.com', 'Para un piso ubicado en las fuentes, presupuesto de pintar, cambiar puertas', NULL, '658252668', '2018-05-12 07:54:15', ''),
(212, 'asdasd', 'aaron@nzreformas.es', 'asdasdas', NULL, '123123123', '2018-05-15 16:32:38', ''),
(213, 'Eva Álvaro', 'aldo.eva@gmail.com', 'Buenos días, deseamos realizar una reforma integral en una vivienda de Zaragoza para la cual ya disponemos de proyecto por realizado por parte de un arquitecto de la familia. Quisiéramos saber si ustedes podrían realizar la reforma partiendo de este proyecto y bajo su dirección y solicitar presupuesto para la misma Dispongo de los planos y el desglose de las partidas a presupuestar , que podría enviarles directamente por email. Un saludo', NULL, '667444932', '2018-05-21 10:48:47', ''),
(214, 'Raquel Cihuela pineda', 'Rakel79@hotmail.com', 'M gustaría saber el presupuesto de reforma de una vivienda q tenia visto y q según costará la reforma la adquirimos \r\nEs una casa de 66m y un patio de 24. Quiero reubicar las habitaciones para aprovechar el espacio...', NULL, '667460568', '2018-05-23 13:42:00', ''),
(215, 'Lara', 'costaduran@hotmail.es', 'Les quisiera adjuntar a modo de plano la reforma a realizar en una vivienda que hemos adquirido en el barrio de Miralbueno, zaragoza para que nos den presupuesto. Les ruego me remitan un correo a esta dirección y les adjunto plano original y reforma propuesta', NULL, '600000000', '2018-05-24 15:43:50', '');
INSERT INTO `enquiry` (`id`, `name`, `email`, `body`, `subject`, `phone`, `sent`, `url`) VALUES
(216, 'Luis Javier Peña Lainez', 'luisjavierpe@gmail.com', 'Solicitamos presupuesto para impermeabilización de tejado en edificio antiguo 50 años cerca del teatro de las cuatro esquinas. Es un edificio de cuatro alturas. superficie aproximada de 160/180 metros.', NULL, '699661635', '2018-05-27 10:54:19', ''),
(217, 'ana campos', 'ana@chimeneascampos.com', 'Buenos días,\r\nSomos una empresa de fabricación de chimeneas de leña, gas y etanol, y me gustaría mandarle nuestros catálogos  si me facilita un mail.\r\nMuchas gracias', NULL, '952407834', '2018-05-28 17:14:06', ''),
(218, 'Ana', 'anaperiz@hotmail.com', 'Buenos días, queríamos solicitar presupuesto para reformar cocina. Sería solo el mobiliario, no las baldosas. Poner lavavajillas y sacar caldera de gas a la galería, la caldera tb nueva. Se puedem poner en contacto conmigo para facilitarles más datos o quedar para tomar medidas.... gracias', NULL, '615320314', '2018-05-29 13:57:18', ''),
(219, 'Pilar', 'mpilarbb64@hotmail.com', 'Presupuesto patio y patios interiores gracias', NULL, '685817919', '2018-05-30 22:50:31', ''),
(220, 'Belén', 'bfjdiego@gmail.com', 'Reforma en piso', NULL, '687742390', '2018-06-01 18:24:05', ''),
(221, 'Fernando Moya', 'moyasaezfernando@gmail.com', 'Soy pintor decorador, y busco trabajo, realizo todo tipo de trabajos de aplicación de pintura y policromada, imitaciones y rotulacion', NULL, '687433183', '2018-06-03 11:08:12', ''),
(222, 'Pablo Gimenez', 'info@liceogoya.com', 'Buenos días, \r\n\r\nNos ponemos en contacto con ustedes ,ya que estamos buscando presupuestos sin compromiso, para pintar una academia en el mes de agosto. Esperamos su pronta respuesta \r\nUn saludo', NULL, '639744811', '2018-06-08 11:35:54', ''),
(223, 'Miriam Roche fajardo', 'miriam_roche@yahoo.com', 'Buenas tardes, deseamos hacer una reforma completa de un baño pequeño en casa de mis padres. Agradecería si pudieran ponerse en contacto para poder ver la necesidad y hacer presupuesto. Gracias y un cordial saludo, Miriam', NULL, '627953130', '2018-06-08 18:18:13', ''),
(224, 'Ana', 'anaperiz@hotmail.com', 'Buenas tardes, queremos solicitar presupuesto para reformar mobiliario de cocina ( no azulejos) y sacar caldera a terraza. Poner lavavajillas y todos electrodomésticos nuevos excepto lavadora. Si se pueden poner en contacto con nosotros...gracias', NULL, '615320314', '2018-06-09 15:26:55', ''),
(225, 'Aurelio Nuez', 'aurelionuezmartin@hotmail.com', 'Precisó impermeabilizar un tejado plano tipo terraza sobre baldosa de 30 metros cuadrados en Calamocha, calle Corona de Aragon 10', NULL, '606316692', '2018-06-09 16:00:26', ''),
(226, 'Ester', 'eceamanos@gmail.com', 'Mande un correo solicitando presupuesto, no he obtenido respuesta...me gustaría saber si  lo.van a hacer.\r\nUn saludo y muchas gracias', NULL, '699835264', '2018-06-10 02:39:34', ''),
(227, 'CARLOS', 'carliscarlangas@hotmail.com', 'Buenos dias tengo que cambiar un tejado en el pueblo de unos 200 metros cuadrados a dos aguas , quiero quitar la teja que hay y poner un nervometal con una capa de compresion encima onduline y teja mixta con espuma', NULL, '660596341', '2018-06-14 11:14:20', ''),
(228, 'Gudula Arroyo', 'juttarroyo@gmail.com', 'Estaría interesada en cambiar dos ventanas de 3 hojas cada una, por unas de aluminio con rotura de puente térmico y aislar con Pladur dos paredes. Gracias', NULL, '660612402', '2018-06-14 21:53:12', ''),
(229, 'SONIA GRACIA CURIEL', 'soniagraciacuriel@gmail.com', 'Buenas tardes, por favor contacten conmigo para hacer una consulta.\r\ngracias \r\nsonia', NULL, '977366509', '2018-06-15 15:12:19', ''),
(230, 'Oscar', 'osc.rodriguez@hotmail.com', 'Quiero cambiar plato de ducha. Hay que alicatar la zona del plato. Medidas 60cm ancho 70 cm largo. Mampara y alicatado. Altura 2.50', NULL, '605046552', '2018-06-15 18:18:23', ''),
(231, 'Ewa Fañanas', 'ewafananas@gmail.com', 'Hola! necesito un presupuesto para insonorizar un local en Zaragoza, barrio San Jose . gracias\r\nEwa', NULL, '693939845', '2018-06-18 12:17:35', ''),
(232, 'Ana Isabel Torralvo', 'anaitorralvo@gmail.com', 'Buenos días. Estoy intentando contactar con algún técnico para solicitar presupuesto para reforma integral en piso en Plaza Huesca (53 m2). Quedo a la espera de sus noticias', NULL, '651921158', '2018-06-19 09:35:19', ''),
(233, 'Adryana', 'aortin33@gmail.com', 'Presupuesto', NULL, '636698834', '2018-06-19 20:22:54', ''),
(234, 'Cristina Villadangos', 'cvilladangos@masquereforma.com', 'Buenos días, \r\nsomos un comparador web de presupuestos de obras y reformas, nos diferenciamos de nuestra competencia al ser nosotros quienes contratamos a los profesionales, es totalmente gratuito para vosotros, trabajamos tanto para particulares, instituciones, fundaciones, promotoras inmobiliarias...\r\nEn este momento estamos creando la base de datos de profesionales para cubrir las necesidades de los clientes de nuestra página web y estoy encantada con poder contar con vosotros ya que sólo busco trabajar con los mejores y vuestro C.V. lo acredita.\r\nTe invito a que visites nuestra página web y te des de alta como profesional. \r\nwww.masquereforma.com \r\nReciba un cordial saludo. \r\nCristina Villadangos García. \r\nCEO & Founder de www.masquereforma.com\r\nTlfno. 693 94 28 82.', NULL, '693942882', '2018-06-20 11:45:30', ''),
(235, 'Francisco Javier Gaudioso', 'frangaudioso6@gmail.com', 'Estaba interesado en rehabilitar la casa de mis abuelos y tirarlo todo. Me gustaría un presupuesto y vuestras ideas,me gustaría otra distribución de la casa. Muchas gracias.', NULL, '667876563', '2018-06-21 22:17:37', ''),
(236, 'Javier Sánchez', 'jojavisan@gmail.com', 'Cdad. De Propietarios Conde la Viñaza  30. 50017 Zaragoza.\r\nNecesitamos presupuesto pintar fachada Cdad. (8 vecinos, 4x2 + local) y colocar pinchos anti palomas en cornisa.', NULL, '637915114', '2018-06-22 12:53:33', ''),
(237, 'luis', 'eusebio1203@hotmail.com', 'quisiera cambiar mi bañera por ducha de 120x70', NULL, '664424316', '2018-06-22 13:00:58', ''),
(238, 'Julio Herrero', 'jurrellos@hotmail.com', 'Solicito presupuestos para la renovación de la fachada de la parcela (vivienda unifamiliar) en la Plaza de las Canteras 9 (C/Fray Julián Garcés 9) de Zaragoza. Aunque se puede ver y medir sin acceder a la vivienda, estaremos disponibles para comentar posibilidades el próximo miércoles día 27 de julio, concretando hora con antelación suficiente. Gracias', NULL, '693608965', '2018-06-24 14:05:53', ''),
(239, 'Virginia Arroyo', 'virac22@hotmail.com', 'Buenas tardes,\r\n\r\nHemos comprador un piso de 100m2 en Vía Hispanidad, del que probablemente no nos entregarán las llaves hasta septiembre.\r\nEs un piso viejísimo… Más de 40 años seguro.\r\nHay que reformarlo por completo: paredes, suelo, ventanas, puertas, suelo de la terraza, baño (del que nos gustaría ver si se pueden sacar baño + aseo), cocina y armarios empotrados.\r\nTambién hay que cambiar radiadores y ocultar los tubos de calefacción que están a la vista.\r\nAdemás es calefacción central y según tengo entendido, actualmente es necesario poner un contador y termostato individual, no?\r\n\r\nEl problema es que no se me ocurre cómo poder calcular la inversión ya que no tenemos planos ni forma de pedirlos (el piso pertenece al Estado) hasta que nos los den.\r\n\r\nSé que es complicado, pero podría obtener un precio aproximado?\r\n\r\nGracias de antemano.', NULL, '615188118', '2018-06-26 16:13:17', ''),
(240, 'asd', 'aaron@nzreformas.es', 'dcz', NULL, '135', '2018-06-28 13:56:03', ''),
(241, 'asdas', 'aaron@nzreformas.es', 'dgdfgh', NULL, '1231231', '2018-06-28 13:56:34', ''),
(242, 'Fernando Lorente', 'fernandolorente@msn.com', 'cambiar bañera por ducha', NULL, '630851982', '2018-06-29 14:04:57', ''),
(243, 'Pascual Tejero Ibáñez', 'blancarina2014@gmail.com', 'Reforma suelo,pintura,cocina,ventanas piso.Un Saludo', NULL, '601130544', '2018-07-01 22:02:35', ''),
(244, 'ISED Formación', 'zaragoza@ised.es', 'Buenas tardes, Somos un centro de formación. Necesitamos presupuesto para cambiar el suelo de un despacho de 12 m2. Actualmente tiene suelo de parquet y queremos poner algun tipo de baldosa que imite al parquet. Muchas gracias. Un saludo cordial', NULL, '976234782', '2018-07-03 15:42:23', ''),
(245, 'ISED Formación', 'zaragoza@ised.es', 'Buenas tardes, Somos un centro de formación. Necesitamos presupuesto para cambiar el suelo de un despacho de 12 m2. Actualmente tiene suelo de parquet y queremos poner algun tipo de baldosa que imite al parquet. Muchas gracias. Un saludo cordial', NULL, '976234782', '2018-07-03 15:42:24', ''),
(246, 'Juan Bautista Pueyo', 'borytat@gmail.com', 'Substituir bañera de fibra por plato de ducha antideslizante, adecuar azulejos tras el cambio y colocar mampara de cristal y columna de ducha.', NULL, '696114020', '2018-07-04 19:46:33', ''),
(247, 'Rodrigo Cerrato', 'rodrigo.cerrato@cadlan.com', 'Buenas tardes, Busco una empresa contratista para una reforma de un local en Cuarte de Huerva. Los trabajos a desarrollar serían pladur, techos, solados, pinturas y ayudas a las instalaciones. \r\nUn saludo,', NULL, '649956612', '2018-07-05 16:38:40', ''),
(248, 'Luis Antonio Guillen Fernandez', 'lagf692015@gmail.com', 'Buenos dias , queriamos nos hicieran presupuesto de reformar los 2 baños completos , gracias', NULL, '693428780', '2018-07-06 08:19:00', ''),
(249, 'Pilar Dominguez', 'dobene@hotmail.com', 'Quería solicitar presupuesto de reforma integral de piso', NULL, '630809462', '2018-07-06 21:07:50', ''),
(250, 'Pilar Veamonte Serrano', 'pilarvea@gmail.com', 'Buenos días, estoy interesada en reformar un baño y un aseo, asi como las dos terrazas de la vivienda de aproximadamente 20 m2.', NULL, '696805338', '2018-07-08 09:56:08', ''),
(251, 'Leticia', 'leancla@gmail.com', 'Buenas tardes, estoy interesada en pedir presupuesto. Gracias.', NULL, '677874405', '2018-07-09 22:52:17', ''),
(252, 'jose miguel', 'miguelmorenoalonso6@gmail.com', 'buenos dias. necesito reformar el baño con financiaccion .un saludo.', NULL, '640059094', '2018-07-10 05:50:46', ''),
(253, 'Amparo Lagunas Soler', 'alsoler@hotmail.es', 'Reforma parcial de piso de 80m.\r\nSuelos, puertas\r\nBaño,cambiar bañera por ducha,muebles, fontaneria,suelo, alicatado,pintura,sanitarios\r\nCocina,suelo,alicatado,fontaneria,muebles,electrodomesticos', NULL, '695907620', '2018-07-10 16:42:25', ''),
(254, 'María', 'maudera23@gmail.com', 'Buenos días:\r\n\r\nEstamos valorando la compra de un piso que necesita reforma integral y nos gustaría nos pudieran dar presupuesto. \r\n\r\nMuchas gracias, un saludo', NULL, '722684595', '2018-07-15 13:42:56', ''),
(255, 'David García Martínez', 'lossuper30@hotmail.com', 'reforma cocina 12 metros cuadrados', NULL, '655797795', '2018-07-16 18:37:36', ''),
(256, 'Andres Gonzalez', 'agonzalezlo@gmail.com', 'Estoy interesado en realizar una reforma parcial en un piso de 99 m2 en Rosales del Canal. Redistribucion (en base planos esquematicos) + Sustitucion de suelo de gres existente por parquet + Cocina. Necesito presupuesto orientativo y plazos. Gracias.', NULL, '976000000', '2018-07-17 16:55:05', ''),
(257, 'María', 'mjrivasgomez@hotmail.com', 'Solicitar presupuesto de cocina', NULL, '670467964', '2018-07-21 10:49:33', ''),
(258, 'Javier', 'javi_mlkr@hotmail.com', 'Buenas. Estaba interesado en tirar una pared del piso y unir las dos habitaciones en uno. Estaba interesado en saber si es posible y pasos a seguir, presupuesto de tirar y dejar los dos cuartos homogeneos.\r\n\r\nSaludos!', NULL, '628788497', '2018-07-21 16:41:45', ''),
(259, 'Araceli Aguilar', 'araceliaguilar@cocinasnasa.com', 'Buenas tardes, desde la empresa Cocinas Nasa nos gustaría poder visitarle y mostrarle nuestro producto. Somos fabricantes del mueble integral de cocina, nos ubicamos en Lucena (Córdoba) y la semana próxima, en concreto el martes estaremos mi compañero y yo por la zona. Nos gustaría poder concretar una cita y ofreceros nuestro producto. Sin más quedo a la espera por si os interesa, organizar agenda. \r\nMuchas gracias\r\nUn saludo.\r\nAraceli Aguilar', NULL, '666322464', '2018-07-24 14:47:03', ''),
(260, 'Miguel Ángel', 'ayj2010@hotmail.com', 'Hola buenas tardes quiero poner una cocina. La cocina es pequeña mide 2,13 de ancho x 2,25 de alto. Contando que de derecha a izquierda va: el horno de 60, la lavadora de 60, el lavavajillas de 45 y una poza de 50. Que se podría hacer', NULL, '680203368', '2018-07-24 16:09:49', ''),
(261, 'Jose Maria ferrer gimeno', 'champical@hotmail.com', 'Interesado en presupuesto integral reforma parcela', NULL, '602328081', '2018-07-26 13:30:19', ''),
(262, 'Jesus', 'espiza1970@hotmail.com', 'Pintar piso sobre 55m2 en blanco satinado gracias', NULL, '661783149', '2018-07-28 14:34:29', ''),
(263, 'Olga', 'olbaib@gmail.com', 'Hola, estamos estudiando la compra de un piso en zaragoza para segunda residencia y nos interesaría conocer aproximadamente el coste de la reforma para un piso de 70 metros y 3 habitaciones.   Baño, aseo, cocina, puertas, ventanas, persianas y suelo de parquet .  Gracias.', NULL, '977211928', '2018-07-29 10:32:07', ''),
(264, 'ali', 'reformashispanica@hotmail.com', 'hola ,somos dos albañiles profesionales con muchos años de experiencia en reformas de hogar y obras nuevas ,realizamos todo tipo de reformas ,albañilería ,fontanería ,electricidad , rehabilitaciones de fachadas y tejados ,construcciones metálicas ,cocinas y baños , mantenimiento de comunidades  y mucho mas.\r\n\r\nofrecemos para trabajar con ustedes como autónomos (con todos los papeles en regla ) ,trabajamos por presupuesto o por horas .\r\n\r\nmi teléfono de contacto es 632 178928 .\r\n\r\nesperamos su respuesta pronto . gracias \r\n\r\nsaludos.', NULL, '632178928', '2018-08-01 11:55:55', ''),
(265, 'Marta', 'ducatycat@hotmail.com', 'Reforma integral de casa de 100 metros tejado baños cocina paredes suelos fontanería calefacción electricidad fachada', NULL, '617373741', '2018-08-01 14:43:11', ''),
(266, 'Pedro Arias Jimenez', 'pedroariasjimenez@hemail.com', 'reforma de entrada al patio y  puerta para minusvalidos', NULL, '976499677', '2018-08-06 17:28:44', ''),
(267, 'Diana', 'diana.martelesaragues@gmail.com', 'Queremos reformar una casa de campo de 175m2 de los años 70. Necesitamos cambiar tuberías, reforma completa de cocina y baño, una caldera nueva y hacer un tabique nuevo para tener una habitación más. Nos gustaría tener cierta idea de cuánto puede costar y cómo se podría hacer.', NULL, '622192365', '2018-08-07 00:00:50', ''),
(268, 'JESSICA ALVEAR PILAGUANO', 'jalvearpilaguano@gmail.com', 'Hola estoy interesada en saber si me podréis hacer un presupuesto', NULL, '640789985', '2018-08-07 17:40:44', ''),
(269, 'Dailos', 'dailosfm@hotmail.com', 'Necesito cambiar el suelo del pasillo de un piso que tiene instalación de tarima en toda la casa, salvo en baños y cocina. Con esta es la tercera vez que, debido a una fuerte tormenta, mi piso sufre inundaciones, echando a perder la tarima del pasillo. Había pensado en cambiarla por gres imitación madera, en caso de que el gres me aguanta el agua. Un saludo.', NULL, '654092311', '2018-08-09 17:51:41', ''),
(270, 'Samir serrano', 'serranoooo6@gmail.com', 'Hola me gustaria saber cuanto cuesta reformar un piso mas o menos es de unos 50m con dos habitaciones me gustaria quitar una habitacion y hacer el salon un poco mas grande y el baño enano nose si se podria ampliar de alguna manera gracias.', NULL, '664820499', '2018-08-15 19:26:23', ''),
(271, 'Esther Elorza', 'mevalasesores@gmail.com', 'soy comercial/instaladora de alarmas para Securitas Direct. Me gustaría poder reunirme con ustedes en la segunda semana de septiembre para poder hablar de una posible colaboración comercial.\r\n\r\nSin mas, reciban un cordial saludo', NULL, '690829181', '2018-08-16 11:53:54', ''),
(272, 'Ana', 'pamploanuski@gmail.com', 'Buenos días\r\nDesearía presupuesto aprox sobre la pintura de mi futura casa de 145 m \r\nEsta amueblada \r\nSon dos plantas\r\nY la tendríamos aprox en 2 meses\r\nPintura de color y techos blancos es la idea inicial\r\n\r\nNecesitamos idea porque ahora mismo desconocemos en absoluto un coste aproximado de pintarla y necesitamos saberlo para valorarlo\r\n\r\nGracias\r\n\r\nRuego contacto vía mail o whatsapp', NULL, '658199360', '2018-08-20 12:01:53', ''),
(273, 'test', 'aaron@nzreformas.es', 'asdasdas', NULL, '123456789', '2018-08-21 10:07:33', 'https://www.nzreformas.es/contacta-con-nosotros?page=contacto'),
(274, 'test2', 'aaron@nzreformas.es', 'tgsdfgsdfg', NULL, '123456789', '2018-08-21 10:07:56', 'https://www.nzreformas.es/contacta-con-nosotros'),
(275, 'test', 'aaron@nzreformas.es', 'asdasdasd', NULL, '12312345', '2018-08-21 10:15:06', 'https://www.nzreformas.es/contacta-con-nosotros'),
(276, 'Rosa', 'rosabaqueda@hotmail.com', 'Me gustaría presupuesto para pintar un piso de 50m en barrio de las Fuentes', NULL, '650665839', '2018-08-22 11:31:49', 'https://www.nzreformas.es/contacta-con-nosotros'),
(277, 'Elena', 'glontz84@gmail.com', 'Presupuesto baño', NULL, '643145641', '2018-08-25 10:18:17', 'https://www.nzreformas.es/contacta-con-nosotros'),
(278, 'Teresa Garces Baquero', 'ETC@EQUIPOETC.COM', 'Necesito presupuesto para la pintura de un piso en Zaragoza, de unos 80 m2, con muebles y en buen estado.', NULL, '670287549', '2018-08-26 11:09:27', 'https://www.nzreformas.es/contacta-con-nosotros?page=contacto'),
(279, 'José Manuel Portoles', 'josemanuelportoles@gmail.com', 'Quisiera reformar una cocina.Desearia proyecto de ello', NULL, '629760686', '2018-08-27 19:40:12', 'https://www.nzreformas.es/contacta-con-nosotros?page=contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `uploaded` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `image_id`, `project_id`, `uploaded`, `name`, `slug`, `description`, `content`, `path`) VALUES
(2419, 37945, 395, '2017-03-17 00:00:00', 'Reforma integral en paseo Ruiseñores', 'reforma-integral-en-paseo-ruisenores', 'Reforma integral de piso dónde prácticamentese ha renovado todo. Cambio de distribución con renovación de instalaciones e iluminación, sustitución de ventanas por nuevas de aluminio motorizadas y aislamiento termico en el perímetro. También se han renovado al completo los dos baños y la cocina. Además se han alisado y pintado paredes y techo, cambiado de puertas, y colocado un suelo de madera de roble de gran formato. Por último en toda la casa se han colocado armarios empotrados a medida. ', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores'),
(2420, 37982, 395, '2017-01-25 00:00:00', 'Reforma integral Viñedo Viejo', 'reforma-integral-vinedo-viejo', 'Reforma integral de vivienda con renovación total de instalaciones\r\n            de fontanería y electricidad, así como iluminación LED, sustitución de ventanas y puertas,\r\n            y retirada del hilo musical existente. También se han reformado los dos baños, alicatado, \r\n            mobiliario, sanitarios, griferia, ducha con plato de resina y mampara de cristal. Reforma\r\n            de la cocina con alicatado nuevo, mobiliario con tirador integrado, encimera, grifería, \r\n            fregadero y electrodomésticos. Embaldosado con porcelánico en toda la vivienda.', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo'),
(2421, 38008, 396, '2016-08-20 00:00:00', 'Reforma de baño Sainz de Varanda', 'reforma-de-bano-sainz-de-varanda', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/'),
(2422, 38025, 395, '2015-10-23 00:00:00', 'Reforma integral Océano Atlántico', 'reforma-integral-oceano-atlantico', '', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/'),
(2423, 38069, 395, '2016-04-25 00:00:00', 'Reforma integral Miguel Servet', 'reforma-integral-miguel-servet', 'Reforma de piso integral con modificación de la distribución, además se aprovechó para nivelar la vivienda, impermeabilizar la terraza y renovar las instalaciones de fontanería y electricidad. La reforma incluye alisado y pintado, de paredes y techos, así como la sustitución de puertas y ventanas. También se instaló suelo laminado en toda la vivienda excepto en baño y cocina, donde además se sustituyó mobiliario y equipamiento.', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/'),
(2424, 38094, 397, '2015-04-11 00:00:00', 'Reforma de cocina Anselmo Clavé', 'reforma-de-cocina-anselmo-clave', '', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/'),
(2425, 38107, 397, '2016-03-23 00:00:00', 'Reforma de cocina Almagro', 'reforma-de-cocina-almagro', '', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/'),
(2426, 38112, 397, '2016-11-07 00:00:00', 'Reforma de cocina y baño Isla Graciosa', 'reforma-de-cocina-y-bano-isla-graciosa', '<p>Realizamos la <a href=\"https://www.nzreformas.es/proyectos/reformas-de-cocinas-zaragoza\">reforma de una cocina moderna</a> en Isla Graciosa. La reforma ha consistido en un rediseño de la disposición de las estructuras. Hemos utilizado primeras calidades, encimeras de mármol, una campana moderna e iluminación para la mesa de cocina</p>\r\n<p> En <a href=\"/\">NZ Reformas Zaragoza</a> trabajamos de forma profesional para dar el mejor servicio a nuestros clientes, preocupándonos siempre por garantizar el cumplimiento de los tiempos acordados y un <a href=\"/pedir-presupuesto\">presupuesto de reformas</a> cerrado</p>', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/'),
(2427, 38467, 397, '2016-11-28 00:00:00', 'Reforma de cocina Condes de Aragón', 'reforma-de-cocina-condes-de-aragon', 'Reforma de cocina con cerramiento al comedor. Se trata de una reforma dónde se ha respetado el alicatado original hasta media altura y se ha pintado el resto de paramentos. También se ha instalado un suelo vinílico con propiedades hidrófugas con acabado en roble. En cuanto a los muebles se ha elegido una combinación en tonos mate claros a juego con el resto de conjunto. Lo más llamativo de esta <a href=\"https://www.nzreformas.es/proyectos/reformas-de-cocinas-zaragoza\"> reforma de cocina en Zaragoza</a> es la apertura del hueco en la pared que comunica cocina y salón, en la que posteriormente se ha colocado un cerramiento de forja con fijos de cristal.', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/'),
(2428, 38143, 397, '2016-03-21 00:00:00', 'Reforma de cocina Dato', 'reforma-de-cocina-dato', '', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/'),
(2429, 38161, 396, '2016-03-29 00:00:00', 'Cambio de bañera por ducha Alcalá de la selva', 'cambio-de-banera-por-ducha-alcala-de-la-selva', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/'),
(2430, 38169, 396, '2015-10-23 00:00:00', 'Reforma de baño Oceáno Atlántico', 'reforma-de-bano-oceano-atlantico', '', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/'),
(2431, 38179, 396, '2015-04-10 00:00:00', 'Reforma de baño Anselmo Clavé', 'reforma-de-bano-anselmo-clave', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/'),
(2432, 38186, 396, '2016-03-21 00:00:00', 'Reforma de baño Dato', 'reforma-de-bano-dato', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/'),
(2433, 38193, 396, '2015-04-27 00:00:00', 'Reforma de baño María Lostal', 'reforma-de-bano-maria-lostal', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/'),
(2434, 38199, 396, '2016-04-25 00:00:00', 'Reforma de baño Miguel Servet', 'reforma-de-bano-miguel-servet', '', NULL, 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/'),
(2435, 38205, 397, '2016-04-25 00:00:00', 'Reforma de cocina Miguel Servet', 'reforma-de-cocina-miguel-servet', '<p>Reformamos una cocina en Miguel Servet. Muy satisfechos con el resultado obtenido en esta amplia cocina, donde la luminosidad de la estancia aporta mucho gusto. Hemos trabajado con materiales claros y modernos para conseguir una magnífica <a href=\"https://www.nzreformas.es/proyectos/reformas-de-cocinas-zaragoza\">reforma de cocina</a></p>', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/'),
(2436, 38211, 397, '2015-10-23 00:00:00', 'Reforma de cocina Oceáno Atlántico', 'reforma-de-cocina-oceano-atlantico', '', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/'),
(2437, 38226, 395, '2016-03-21 00:00:00', 'Reforma intregral Dato', 'reforma-intregral-dato', '', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/'),
(2438, 38247, 395, '2014-08-03 00:00:00', 'Reforma de suelo y puertas Juan Carlos I', 'reforma-de-suelo-y-puertas-juan-carlos-i', '', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/'),
(2439, 38261, 395, '2016-03-30 00:00:00', 'Reforma integral Luis Oro Giral', 'reforma-integral-luis-oro-giral', '', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/'),
(2440, 38289, 395, '2015-04-27 00:00:00', 'Reforma integral María Lostal', 'reforma-integral-maria-lostal', 'Reforma integral de piso con renovación de instalaciones, sustitución de suelo, puertas y ventanas. Cabe destacar la instalación de la puerta corredera doble de paso al salón, y la luz perimetral en el techo del mismo. Además en ambos baños de la vivienda se aplicó microcemento, tanto suelo como paredes.', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/'),
(2441, 38306, 395, '2016-03-23 00:00:00', 'Reforma integral Almagro', 'reforma-integral-almagro', '', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/'),
(2442, 38464, 395, '2017-09-29 00:00:00', 'Reforma integral en Gómez de Avellaneda', 'reforma-integral-en-gomez-de-avellaneda', 'Reforma de vivienda dónde se ha renovado: suelo, puertas, pintura, climatización, cocina y baño. Cabe descatacar el cambio de distribución en la cocina para ampliación de la misma. Se ha conseguido mantener un estilo uniforme pese a no realizar cambios de toda la vivienda, predominando un imagen sobria y de  contrastes muy marcados.', NULL, ''),
(2443, 38352, 397, '2016-06-01 00:00:00', 'Reforma de cocina Portugal', 'reforma-de-cocina-portugal', 'El cliente nos pidió <a href=\"https://www.nzreformas.es/proyectos/reformas-de-cocinas-zaragoza\">reformar una cocina</a> con unión a la habitación contigua. Gracias a la ampliación obtenemos cocina y comedor en un mismo espacio, ambos separados por una isla con barra de desayuno. En la cocina se han escogido muebles grises con tirador integrado y encimera blanca. Además de los tonos claros predominantes podemos encontrar toques de azul que destacan sobre los grises y el suelo imitación madera.', NULL, 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/'),
(2444, 38367, 394, '2013-03-03 00:00:00', 'Rehabilitación de fachada edificio Layes', 'rehabilitacion-de-fachada-edificio-layes', '', NULL, ''),
(2445, 38381, 394, '2015-03-03 00:00:00', 'Reforma de patio Galán Bergua', 'reforma-de-patio-galan-bergua', '', NULL, ''),
(2446, 38389, 394, '2014-03-03 00:00:00', 'Bajada del ascensor a cota cero Uncastillo', 'bajada-del-ascensor-a-cota-cero-uncastillo', '', NULL, ''),
(2447, 38400, 396, '2016-03-23 00:00:00', 'Reforma de baño Almagro', 'reforma-de-bano-almagro', '', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery_images`
--

CREATE TABLE `gallery_images` (
  `gallery_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gallery_images`
--

INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES
(2419, 37946),
(2419, 37947),
(2419, 37948),
(2419, 37949),
(2419, 37950),
(2419, 37951),
(2419, 37952),
(2419, 37953),
(2419, 37954),
(2419, 37955),
(2419, 37956),
(2419, 37957),
(2419, 37958),
(2419, 37959),
(2419, 37960),
(2419, 37961),
(2419, 37962),
(2419, 37963),
(2419, 37964),
(2419, 37965),
(2419, 37966),
(2419, 37967),
(2419, 37968),
(2419, 37969),
(2419, 37970),
(2419, 37971),
(2419, 37972),
(2419, 37973),
(2419, 37974),
(2419, 37975),
(2419, 37976),
(2419, 37977),
(2419, 37978),
(2419, 37979),
(2419, 37980),
(2419, 37981),
(2420, 37983),
(2420, 37984),
(2420, 37985),
(2420, 37986),
(2420, 37987),
(2420, 37988),
(2420, 37989),
(2420, 37990),
(2420, 37991),
(2420, 37992),
(2420, 37993),
(2420, 37994),
(2420, 37995),
(2420, 37996),
(2420, 37997),
(2420, 37998),
(2420, 37999),
(2420, 38000),
(2420, 38001),
(2420, 38002),
(2420, 38003),
(2420, 38004),
(2420, 38005),
(2420, 38006),
(2420, 38007),
(2421, 38009),
(2421, 38010),
(2421, 38011),
(2421, 38012),
(2421, 38013),
(2421, 38014),
(2421, 38015),
(2422, 38026),
(2422, 38027),
(2422, 38028),
(2422, 38029),
(2422, 38030),
(2422, 38031),
(2422, 38032),
(2422, 38033),
(2422, 38034),
(2422, 38035),
(2422, 38036),
(2422, 38037),
(2422, 38038),
(2422, 38039),
(2422, 38040),
(2422, 38041),
(2422, 38042),
(2422, 38043),
(2422, 38044),
(2422, 38045),
(2422, 38046),
(2422, 38047),
(2422, 38048),
(2422, 38049),
(2422, 38050),
(2422, 38051),
(2422, 38052),
(2422, 38053),
(2422, 38054),
(2422, 38055),
(2422, 38056),
(2422, 38057),
(2422, 38058),
(2422, 38059),
(2422, 38060),
(2422, 38061),
(2422, 38062),
(2422, 38063),
(2422, 38064),
(2423, 38070),
(2423, 38071),
(2423, 38072),
(2423, 38073),
(2423, 38074),
(2423, 38075),
(2423, 38076),
(2423, 38077),
(2423, 38078),
(2423, 38079),
(2423, 38080),
(2423, 38081),
(2423, 38082),
(2423, 38083),
(2423, 38084),
(2423, 38085),
(2423, 38086),
(2423, 38087),
(2423, 38088),
(2423, 38089),
(2423, 38090),
(2423, 38091),
(2423, 38092),
(2423, 38093),
(2424, 38095),
(2424, 38096),
(2424, 38097),
(2424, 38098),
(2424, 38099),
(2424, 38100),
(2424, 38101),
(2424, 38102),
(2424, 38103),
(2424, 38104),
(2424, 38105),
(2424, 38106),
(2425, 38108),
(2425, 38109),
(2425, 38110),
(2425, 38111),
(2426, 38113),
(2426, 38114),
(2426, 38115),
(2426, 38116),
(2426, 38117),
(2426, 38118),
(2426, 38119),
(2426, 38120),
(2426, 38121),
(2426, 38122),
(2427, 38124),
(2427, 38125),
(2427, 38126),
(2427, 38127),
(2427, 38128),
(2427, 38129),
(2427, 38130),
(2427, 38131),
(2427, 38132),
(2427, 38133),
(2427, 38134),
(2427, 38135),
(2427, 38136),
(2427, 38137),
(2427, 38138),
(2427, 38139),
(2427, 38140),
(2427, 38141),
(2427, 38142),
(2428, 38144),
(2428, 38145),
(2428, 38146),
(2428, 38147),
(2428, 38148),
(2428, 38149),
(2428, 38150),
(2428, 38151),
(2428, 38152),
(2428, 38153),
(2428, 38154),
(2428, 38155),
(2428, 38156),
(2428, 38157),
(2428, 38158),
(2428, 38159),
(2428, 38160),
(2429, 38162),
(2429, 38163),
(2429, 38164),
(2429, 38165),
(2429, 38166),
(2429, 38167),
(2429, 38168),
(2430, 38170),
(2430, 38171),
(2430, 38172),
(2430, 38173),
(2430, 38174),
(2430, 38175),
(2430, 38176),
(2430, 38177),
(2430, 38178),
(2431, 38180),
(2431, 38181),
(2431, 38182),
(2431, 38183),
(2431, 38184),
(2431, 38185),
(2432, 38187),
(2432, 38188),
(2432, 38189),
(2432, 38190),
(2432, 38191),
(2432, 38192),
(2433, 38194),
(2433, 38195),
(2433, 38196),
(2433, 38197),
(2433, 38198),
(2434, 38200),
(2434, 38201),
(2434, 38202),
(2434, 38203),
(2434, 38204),
(2435, 38206),
(2435, 38207),
(2435, 38208),
(2435, 38209),
(2435, 38210),
(2436, 38212),
(2436, 38213),
(2436, 38214),
(2436, 38215),
(2436, 38216),
(2436, 38217),
(2436, 38218),
(2436, 38219),
(2436, 38220),
(2436, 38221),
(2436, 38222),
(2436, 38223),
(2436, 38224),
(2436, 38225),
(2437, 38227),
(2437, 38228),
(2437, 38229),
(2437, 38230),
(2437, 38231),
(2437, 38232),
(2437, 38233),
(2437, 38234),
(2437, 38235),
(2437, 38236),
(2437, 38237),
(2437, 38238),
(2437, 38239),
(2437, 38240),
(2437, 38241),
(2437, 38242),
(2437, 38243),
(2437, 38244),
(2437, 38245),
(2437, 38246),
(2438, 38248),
(2438, 38249),
(2438, 38250),
(2438, 38251),
(2438, 38252),
(2438, 38253),
(2438, 38254),
(2438, 38255),
(2438, 38256),
(2438, 38257),
(2438, 38258),
(2438, 38259),
(2438, 38260),
(2439, 38262),
(2439, 38263),
(2439, 38264),
(2439, 38265),
(2439, 38266),
(2439, 38267),
(2439, 38268),
(2439, 38269),
(2439, 38270),
(2439, 38271),
(2439, 38272),
(2439, 38273),
(2439, 38274),
(2439, 38275),
(2439, 38276),
(2439, 38277),
(2439, 38278),
(2439, 38279),
(2439, 38280),
(2439, 38281),
(2439, 38282),
(2439, 38283),
(2439, 38284),
(2439, 38285),
(2439, 38286),
(2439, 38287),
(2439, 38288),
(2440, 38290),
(2440, 38291),
(2440, 38292),
(2440, 38293),
(2440, 38294),
(2440, 38295),
(2440, 38296),
(2440, 38297),
(2440, 38298),
(2440, 38299),
(2440, 38300),
(2440, 38301),
(2440, 38302),
(2440, 38303),
(2440, 38304),
(2440, 38305),
(2441, 38307),
(2441, 38308),
(2441, 38309),
(2441, 38310),
(2441, 38311),
(2441, 38312),
(2441, 38313),
(2441, 38314),
(2441, 38315),
(2441, 38316),
(2441, 38317),
(2441, 38318),
(2441, 38319),
(2441, 38320),
(2441, 38321),
(2441, 38322),
(2441, 38323),
(2441, 38324),
(2441, 38325),
(2442, 38327),
(2442, 38328),
(2442, 38329),
(2442, 38330),
(2442, 38331),
(2442, 38332),
(2442, 38333),
(2442, 38334),
(2442, 38335),
(2442, 38336),
(2442, 38337),
(2442, 38338),
(2442, 38339),
(2442, 38340),
(2442, 38341),
(2442, 38342),
(2442, 38343),
(2442, 38344),
(2442, 38345),
(2442, 38346),
(2442, 38347),
(2442, 38348),
(2442, 38349),
(2442, 38350),
(2442, 38351),
(2443, 38353),
(2443, 38354),
(2443, 38355),
(2443, 38356),
(2443, 38357),
(2443, 38358),
(2443, 38359),
(2443, 38360),
(2443, 38361),
(2443, 38362),
(2443, 38363),
(2443, 38364),
(2443, 38365),
(2443, 38366),
(2444, 38368),
(2444, 38369),
(2444, 38370),
(2444, 38371),
(2444, 38372),
(2444, 38373),
(2444, 38374),
(2444, 38375),
(2444, 38376),
(2444, 38377),
(2444, 38378),
(2444, 38379),
(2444, 38380),
(2445, 38382),
(2445, 38383),
(2445, 38384),
(2445, 38385),
(2445, 38386),
(2445, 38387),
(2445, 38388),
(2446, 38390),
(2446, 38391),
(2446, 38392),
(2446, 38393),
(2446, 38394),
(2446, 38395),
(2446, 38396),
(2446, 38397),
(2446, 38398),
(2446, 38399),
(2447, 38401),
(2447, 38402),
(2447, 38403),
(2447, 38404),
(2447, 38405),
(2447, 38406);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `format` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `file`, `path`, `title`, `alt`, `description`, `format`) VALUES
(37937, 'reformas-de-comunidades.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/', 'Reformas de comunidades', 'Reformas de comunidades', NULL, NULL),
(37938, '', 'bundles/app/images/proyectos/reformas-de-pisos/', 'Reformas de pisos', 'Reformas de pisos', NULL, NULL),
(37939, 'reformas-de-banos.jpg', 'bundles/app/images/proyectos/reformas-de-banos/', 'Reformas de baños', 'Reformas de baños', NULL, NULL),
(37940, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(37941, '', 'bundles/blog/images/articles/', 'Reforma de cocina en Condes de Aragón', 'Reforma de cocina en Condes de Aragón', NULL, NULL),
(37943, '', 'bundles/blog/images/articles/', 'Descubre una de las mejores empresas de reformas en Zaragoza', 'Descubre una de las mejores empresas de reformas en Zaragoza', NULL, NULL),
(37944, '', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', NULL, NULL),
(37945, 'reforma-integral-ruiseñores.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en paseo Ruiseñores', 'Reforma integral en paseo Ruiseñores', NULL, NULL),
(37946, 'baño-1_1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma baño 1 en ruiseñores - 1', 'Reforma baño 1 en ruiseñores - 1', NULL, NULL),
(37947, 'baño-1_2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma baño 1 en ruiseñores - 2', 'Reforma baño 1 en ruiseñores - 2', NULL, NULL),
(37948, 'baño-2_1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma baño 2 en ruiseñores - 1', 'Reforma baño 2 en ruiseñores - 1', NULL, NULL),
(37949, 'baño-2_2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma baño 2 en ruiseñores - 2', 'Reforma baño 2 en ruiseñores - 2', NULL, NULL),
(37950, 'cocina_1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 1', 'Reforma cocina en ruiseñores - 1', NULL, NULL),
(37951, 'cocina_2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 2', 'Reforma cocina en ruiseñores - 2', NULL, NULL),
(37952, 'cocina_3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 3', 'Reforma cocina en ruiseñores - 3', NULL, NULL),
(37953, 'cocina_4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 4', 'Reforma cocina en ruiseñores - 4', NULL, NULL),
(37954, 'cocina_5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 5', 'Reforma cocina en ruiseñores - 5', NULL, NULL),
(37955, 'cocina_6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 6', 'Reforma cocina en ruiseñores - 6', NULL, NULL),
(37956, 'cocina_7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 7', 'Reforma cocina en ruiseñores - 7', NULL, NULL),
(37957, 'cocina_8.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 8', 'Reforma cocina en ruiseñores - 8', NULL, NULL),
(37958, 'cocina_9.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma cocina en ruiseñores - 9', 'Reforma cocina en ruiseñores - 9', NULL, NULL),
(37959, 'reforma-ruiseñores_0.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 0', 'Reforma integral en ruiseñores - 0', NULL, NULL),
(37960, 'reforma-ruiseñores_1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 1', 'Reforma integral en ruiseñores - 1', NULL, NULL),
(37961, 'reforma-ruiseñores_2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 2', 'Reforma integral en ruiseñores - 2', NULL, NULL),
(37962, 'reforma-ruiseñores_3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 3', 'Reforma integral en ruiseñores - 3', NULL, NULL),
(37963, 'reforma-ruiseñores_4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 4', 'Reforma integral en ruiseñores - 4', NULL, NULL),
(37964, 'reforma-ruiseñores_5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 5', 'Reforma integral en ruiseñores - 5', NULL, NULL),
(37965, 'reforma-ruiseñores_6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 6', 'Reforma integral en ruiseñores - 6', NULL, NULL),
(37966, 'reforma-ruiseñores_7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 7', 'Reforma integral en ruiseñores - 7', NULL, NULL),
(37967, 'reforma-ruiseñores_8.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 8', 'Reforma integral en ruiseñores - 8', NULL, NULL),
(37968, 'reforma-ruiseñores_9.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 9', 'Reforma integral en ruiseñores - 9', NULL, NULL),
(37969, 'reforma-ruiseñores_10.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 10', 'Reforma integral en ruiseñores - 10', NULL, NULL),
(37970, 'reforma-ruiseñores_11.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 11', 'Reforma integral en ruiseñores - 11', NULL, NULL),
(37971, 'reforma-ruiseñores_12.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 12', 'Reforma integral en ruiseñores - 12', NULL, NULL),
(37972, 'reforma-ruiseñores_13.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 13', 'Reforma integral en ruiseñores - 13', NULL, NULL),
(37973, 'reforma-ruiseñores_14.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 14', 'Reforma integral en ruiseñores - 14', NULL, NULL),
(37974, 'reforma-ruiseñores_15.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 15', 'Reforma integral en ruiseñores - 15', NULL, NULL),
(37975, 'reforma-ruiseñores_16.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 16', 'Reforma integral en ruiseñores - 16', NULL, NULL),
(37976, 'reforma-ruiseñores_17.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 17', 'Reforma integral en ruiseñores - 17', NULL, NULL),
(37977, 'reforma-ruiseñores_18.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 18', 'Reforma integral en ruiseñores - 18', NULL, NULL),
(37978, 'reforma-ruiseñores_19.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 19', 'Reforma integral en ruiseñores - 19', NULL, NULL),
(37979, 'reforma-ruiseñores_20.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 20', 'Reforma integral en ruiseñores - 20', NULL, NULL),
(37980, 'reforma-ruiseñores_21.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 21', 'Reforma integral en ruiseñores - 21', NULL, NULL),
(37981, 'reforma-ruiseñores_22.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-ruiseñores/', 'Reforma integral en ruiseñores - 22', 'Reforma integral en ruiseñores - 22', NULL, NULL),
(37982, 'reforma-integral-viñedo-viejo.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Reforma integral Viñedo Viejo', 'Reforma integral Viñedo Viejo', NULL, NULL),
(37983, 'baño-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño 1', 'Baño 1', NULL, NULL),
(37984, 'baño-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño 2', 'Baño 2', NULL, NULL),
(37985, 'baño-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño 3', 'Baño 3', NULL, NULL),
(37986, 'baño-dormitorio-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño dormitorio 1', 'Baño dormitorio 1', NULL, NULL),
(37987, 'baño-dormitorio-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño dormitorio 2', 'Baño dormitorio 2', NULL, NULL),
(37988, 'baño-dormitorio-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Baño dormitorio 3', 'Baño dormitorio 3', NULL, NULL),
(37989, 'cocina-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 1', 'Cocina 1', NULL, NULL),
(37990, 'cocina-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 2', 'Cocina 2', NULL, NULL),
(37991, 'cocina-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 3', 'Cocina 3', NULL, NULL),
(37992, 'cocina-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 4', 'Cocina 4', NULL, NULL),
(37993, 'cocina-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 5', 'Cocina 5', NULL, NULL),
(37994, 'cocina-7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Cocina 7', 'Cocina 7', NULL, NULL),
(37995, 'comedor-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 1', 'Comedor 1', NULL, NULL),
(37996, 'comedor-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 2', 'Comedor 2', NULL, NULL),
(37997, 'comedor-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 3', 'Comedor 3', NULL, NULL),
(37998, 'comedor-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 4', 'Comedor 4', NULL, NULL),
(37999, 'comedor-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 5', 'Comedor 5', NULL, NULL),
(38000, 'comedor-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Comedor 6', 'Comedor 6', NULL, NULL),
(38001, 'dormitorio.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Dormitorio', 'Dormitorio', NULL, NULL),
(38002, 'pasillo.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Pasillo', 'Pasillo', NULL, NULL),
(38003, 'habitacion-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Habitación 1', 'Habitación 1', NULL, NULL),
(38004, 'habitacion-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Habitación 2', 'Habitación 2', NULL, NULL),
(38005, 'habitacion-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Habitación 3', 'Habitación 3', NULL, NULL),
(38006, 'habitacion-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Habitación 4', 'Habitación 4', NULL, NULL),
(38007, 'entrada.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-viñedo-viejo/', 'Entrada', 'Entrada', NULL, NULL),
(38008, 'bano-sainz-de-varanda.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño Sainz de Varanda', 'Reforma de baño Sainz de Varanda', NULL, NULL),
(38009, 'bano-sainz-de-varanda-1.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 1', 'Baño Sainz de varanda 1', NULL, NULL),
(38010, 'bano-sainz-de-varanda-2.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 2', 'Baño Sainz de varanda 2', NULL, NULL),
(38011, 'bano-sainz-de-varanda-3.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 3', 'Baño Sainz de varanda 3', NULL, NULL),
(38012, 'bano-sainz-de-varanda-4.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 4', 'Baño Sainz de varanda 4', NULL, NULL),
(38013, 'bano-sainz-de-varanda-5.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 5', 'Baño Sainz de varanda 5', NULL, NULL),
(38014, 'bano-sainz-de-varanda-6.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 6', 'Baño Sainz de varanda 6', NULL, NULL),
(38015, 'bano-sainz-de-varanda-7.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Baño Sainz de varanda 7', 'Baño Sainz de varanda 7', NULL, NULL),
(38016, '', 'bundles/blog/images/articles/', 'Exposición de reformas en Zaragoza', 'Exposición de reformas en Zaragoza', NULL, NULL),
(38017, '', 'bundles/blog/images/articles/', 'Un elegante ático en la calle Miguel Servet', 'Un elegante ático en la calle Miguel Servet', NULL, NULL),
(38018, '', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL),
(38019, '', 'bundles/blog/images/articles/', 'Reformas de pisos en Zaragoza', 'Reformas de pisos en Zaragoza', NULL, NULL),
(38020, '', 'bundles/blog/images/articles/', 'Reformas en Zaragoza mucho más que un proyecto constructivo', 'Reformas en Zaragoza mucho más que un proyecto constructivo', NULL, NULL),
(38021, '', 'bundles/blog/images/articles/', 'Empresa de rehabilitación de fachadas en Zaragoza', 'Empresa de rehabilitación de fachadas en Zaragoza', NULL, NULL),
(38022, '', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Viñedo Viejo', 'Reforma de piso integral en paseo Viñedo Viejo', NULL, NULL),
(38023, '', 'bundles/blog/images/articles/', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', 'Reformas de comunidades en Zaragoza con técnicos profesionales', NULL, NULL),
(38024, '', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Ruiseñores', 'Reforma de piso integral en paseo Ruiseñores', NULL, NULL),
(38025, 'reforma-integral-oceano-atlantico.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Reforma integral Océano Atlántico', 'Reforma integral Océano Atlántico', NULL, NULL),
(38026, 'entrada-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada antes de la reforma 1', 'Entrada antes de la reforma  1', 'Antes', NULL),
(38027, 'entrada-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada antes de la reforma 2', 'Entrada antes de la reforma  2', 'Antes', NULL),
(38028, 'entrada-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada después de la reforma 1', 'Entrada después de la reforma  1', 'Después', NULL),
(38029, 'entrada-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada después de la reforma 2', 'Entrada después de la reforma  2', 'Después', NULL),
(38030, 'pasillo-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Pasillo antes de la reforma', 'Pasillo antes de la reforma', 'Antes', NULL),
(38031, 'pasillo-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Pasillo después de la reforma', 'Pasillo después de la reforma', 'Después', NULL),
(38032, 'salon-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Salón antes de la reforma', 'Salón antes de la reforma', 'Antes', NULL),
(38033, 'salon-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Salón después de la reforma', 'Salón después de la reforma', 'Después', NULL),
(38034, 'armario-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Armario antes de la reforma', 'Armario antes de la reforma', 'Antes', NULL),
(38035, 'armario-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Armario después de la reforma', 'Armario después de la reforma', 'Después', NULL),
(38036, 'entrada-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada antes de la reforma 1', 'Entrada antes de la reforma  1', 'Antes', NULL),
(38037, 'entrada-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada antes de la reforma 2', 'Entrada antes de la reforma  2', 'Antes', NULL),
(38038, 'entrada-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada después de la reforma 1', 'Entrada después de la reforma 1', 'Después', NULL),
(38039, 'entrada-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Entrada después de la reforma 2', 'Entrada después de la reforma 2', 'Después', NULL),
(38040, 'habitacion-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Habitación antes de la reforma 1', 'Habitación antes de la reforma  1', 'Antes', NULL),
(38041, 'habitacion-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Habitación antes de la reforma 2', 'Habitación antes de la reforma  2', 'Antes', NULL),
(38042, 'habitacion-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Habitación después de la reforma 1', 'Habitación después de la reforma 1', 'Después', NULL),
(38043, 'habitacion-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Habitación después de la reforma 2', 'Habitación después de la reforma 2', 'Después', NULL),
(38044, 'cocina-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina antes de la reforma 1', 'Cocina antes de la reforma  1', 'Antes', NULL),
(38045, 'cocina-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina antes de la reforma 2', 'Cocina antes de la reforma  2', 'Antes', NULL),
(38046, 'cocina-3-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina antes de la reforma 3', 'Cocina antes de la reforma  3', 'Antes', NULL),
(38047, 'cocina-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 1', 'Cocina después de la reforma 1', 'Después', NULL),
(38048, 'cocina-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 2', 'Cocina después de la reforma 2', 'Después', NULL),
(38049, 'cocina-3-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 3', 'Cocina después de la reforma 3', 'Después', NULL),
(38050, 'cocina-4-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 4', 'Cocina después de la reforma 4', 'Después', NULL),
(38051, 'cocina-5-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 5', 'Cocina después de la reforma 5', 'Después', NULL),
(38052, 'cocina-6-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 6', 'Cocina después de la reforma 6', 'Después', NULL),
(38053, 'cocina-7-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Cocina después de la reforma 7', 'Cocina después de la reforma 7', 'Después', NULL),
(38054, 'dormitorio-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Dormitorio antes de la reforma 1', 'Dormitorio antes de la reforma  1', 'Antes', NULL),
(38055, 'dormitorio-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Dormitorio antes de la reforma 2', 'Dormitorio antes de la reforma  2', 'Antes', NULL),
(38056, 'dormitorio-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Dormitorio después de la reforma 1', 'Dormitorio después de la reforma 1', 'Después', NULL),
(38057, 'dormitorio-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Dormitorio después de la reforma 2', 'Dormitorio después de la reforma 2', 'Después', NULL),
(38058, 'bano-1p-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño antes de la reforma, desde pasillo 1', 'Baño antes de la reforma, desde pasillo 1', 'Antes', NULL),
(38059, 'bano-2p-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño antes de la reforma, desde pasillo 2', 'Baño antes de la reforma, desde pasillo 2', 'Antes', NULL),
(38060, 'bano-1p-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño después de la reforma, desde pasillo 1', 'Baño después de la reforma, desde pasillo 1', 'Después', NULL),
(38061, 'bano-2p-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño después de la reforma, desde pasillo 2', 'Baño después de la reforma, desde pasillo 2', 'Después', NULL),
(38062, 'bano-2i-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño antes de la reforma, desde izquierda 2', 'Baño antes de la reforma, desde izquierda 2', 'Antes', NULL),
(38063, 'bano-2i-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño después de la reforma, desde izquierda 2', 'Baño después de la reforma, desde izquierda 2', 'Después', NULL),
(38064, 'bano-2d-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-oceano-atlantico/', 'Baño después de la reforma, desde derecha 2', 'Baño después de la reforma, desde derecha 2', 'Después', NULL),
(38065, '', 'bundles/blog/images/articles/', 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal', 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal', NULL, NULL),
(38066, '', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38067, 'bano-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Reforma integral de ático en Zaragoza (calle Miguel Servet)', 'Reforma integral de ático en Zaragoza (calle Miguel Servet)', NULL, NULL),
(38068, '', 'bundles/blog/images/articles/', 'Presupuestos de reformas en Zaragoza para modificar nuestros espacios', 'Presupuestos de reformas en Zaragoza para modificar nuestros espacios', NULL, NULL),
(38069, 'reforma-integral-miguel-servet.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Reforma integral Miguel Servet', 'Reforma integral Miguel Servet', NULL, NULL),
(38070, 'pasillo-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Pasillo 1', 'Pasillo 1', NULL, NULL),
(38071, 'pasillo-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Pasillo 2', 'Pasillo 2', NULL, NULL),
(38072, 'pasillo-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Pasillo 3', 'Pasillo 3', NULL, NULL),
(38073, 'pasillo-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Pasillo 4', 'Pasillo 4', NULL, NULL),
(38074, 'salon-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Salón 1', 'Salón 1', NULL, NULL),
(38075, 'salon-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Salón 2', 'Salón 2', NULL, NULL),
(38076, 'bano-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Baño 1', 'Baño 1', NULL, NULL),
(38077, 'bano-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Baño 2', 'Baño 2', NULL, NULL),
(38078, 'bano-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Baño 3', 'Baño 3', NULL, NULL),
(38079, 'bano-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Baño 4', 'Baño 4', NULL, NULL),
(38080, 'bano-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Baño 5', 'Baño 5', NULL, NULL),
(38081, 'terraza-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 1', 'Terraza 1', NULL, NULL),
(38082, 'terraza-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 2', 'Terraza 2', NULL, NULL),
(38083, 'terraza-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 3', 'Terraza 3', NULL, NULL),
(38084, 'terraza-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 4', 'Terraza 4', NULL, NULL),
(38085, 'terraza-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 5', 'Terraza 5', NULL, NULL),
(38086, 'terraza-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 6', 'Terraza 6', NULL, NULL),
(38087, 'terraza-7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 7', 'Terraza 7', NULL, NULL),
(38088, 'terraza-8.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Terraza 8', 'Terraza 8', NULL, NULL),
(38089, 'cocina-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Cocina 1', 'Cocina 1', NULL, NULL),
(38090, 'cocina-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Cocina 2', 'Cocina 2', NULL, NULL),
(38091, 'cocina-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Cocina 3', 'Cocina 3', NULL, NULL),
(38092, 'cocina-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Cocina 4', 'Cocina 4', NULL, NULL),
(38093, 'cocina-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-miguel-servet/', 'Cocina 5', 'Cocina 5', NULL, NULL),
(38094, 'reforma-cocina-anselmo-clave.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Reforma de cocina Anselmo Clavé', 'Reforma de cocina Anselmo Clavé', NULL, NULL),
(38095, 'cocina-antes-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina antes de la reforma 1', 'Cocina antes de la reforma 1', NULL, NULL),
(38096, 'cocina-antes-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina antes de la reforma 2', 'Cocina antes de la reforma 2', NULL, NULL),
(38097, 'cocina-antes-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina antes de la reforma 3', 'Cocina antes de la reforma 3', NULL, NULL),
(38098, 'cocina-antes-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina antes de la reforma 4', 'Cocina antes de la reforma 4', NULL, NULL),
(38099, 'cocina-despues-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 1', 'Cocina después de la reforma 1', NULL, NULL),
(38100, 'cocina-despues-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 2', 'Cocina después de la reforma 2', NULL, NULL),
(38101, 'cocina-despues-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 3', 'Cocina después de la reforma 3', NULL, NULL),
(38102, 'cocina-despues-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 4', 'Cocina después de la reforma 4', NULL, NULL),
(38103, 'cocina-despues-5.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 5', 'Cocina después de la reforma 5', NULL, NULL),
(38104, 'cocina-despues-6.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 6', 'Cocina después de la reforma 6', NULL, NULL),
(38105, 'cocina-despues-7.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 7', 'Cocina después de la reforma 7', NULL, NULL),
(38106, 'cocina-despues-8.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-anselmo-clave/', 'Cocina después de la reforma 8', 'Cocina después de la reforma 8', NULL, NULL),
(38107, 'reforma-cocina-almagro.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/', 'Reforma de cocina Almagro', 'Reforma de cocina Almagro', NULL, NULL),
(38108, 'cocina-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/', 'Cocina 1 antes', 'Cocina 1 antes', NULL, NULL),
(38109, 'cocina-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/', 'Cocina 2 antes', 'Cocina 2 antes', NULL, NULL),
(38110, 'cocina-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/', 'Cocina 2 despues', 'Cocina 2 despues', NULL, NULL),
(38111, 'cocina-3-despues.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-almagro/', 'Cocina 3 despues', 'Cocina 3 despues', NULL, NULL),
(38112, 'cocina-y-bano-isla-graciosa.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Reforma de cocina y baño Isla Graciosa', 'Reforma de cocina y baño Isla Graciosa', NULL, NULL),
(38113, 'cocina-isla-graciosa-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 1', 'Cocina Isla Graciosa 1', NULL, NULL),
(38114, 'cocina-isla-graciosa-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 2', 'Cocina Isla Graciosa 2', NULL, NULL),
(38115, 'cocina-isla-graciosa-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 3', 'Cocina Isla Graciosa 3', NULL, NULL),
(38116, 'cocina-isla-graciosa-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 4', 'Cocina Isla Graciosa 4', NULL, NULL),
(38117, 'cocina-isla-graciosa-5.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 5', 'Cocina Isla Graciosa 5', NULL, NULL),
(38118, 'cocina-isla-graciosa-6.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 6', 'Cocina Isla Graciosa 6', NULL, NULL),
(38119, 'cocina-isla-graciosa-7.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Cocina Isla Graciosa 7', 'Cocina Isla Graciosa 7', NULL, NULL),
(38120, 'bano-isla-graciosa-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Baño Isla Graciosa 1', 'Baño Isla Graciosa 1', NULL, NULL),
(38121, 'bano-isla-graciosa-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Baño Isla Graciosa 2', 'Baño Isla Graciosa 2', NULL, NULL),
(38122, 'bano-isla-graciosa-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-y-bano-isla-graciosa/', 'Baño Isla Graciosa 3', 'Baño Isla Graciosa 3', NULL, NULL),
(38123, '', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Reforma de cocina Condes de Aragón', 'Reforma de cocina Condes de Aragón', NULL, NULL),
(38124, 'cocina-condes-de-aragon-antes-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina antes de la reforma 1', 'Cocina antes de la reforma 1', NULL, NULL),
(38125, 'cocina-condes-de-aragon-antes-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina antes de la reforma 2', 'Cocina antes de la reforma 2', NULL, NULL),
(38126, 'cocina-condes-de-aragon-antes-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina antes de la reforma 3', 'Cocina antes de la reforma 3', NULL, NULL),
(38127, 'cocina-condes-de-aragon-antes-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina antes de la reforma 4', 'Cocina antes de la reforma 4', NULL, NULL),
(38128, 'cocina-condes-de-aragon-antes-5.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina antes de la reforma 5', 'Cocina antes de la reforma 5', NULL, NULL),
(38129, 'cocina-condes-de-aragon-despues-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 1', 'Cocina después de la reforma 1', NULL, NULL),
(38130, 'cocina-condes-de-aragon-despues-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 2', 'Cocina después de la reforma 2', NULL, NULL),
(38131, 'cocina-condes-de-aragon-despues-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 3', 'Cocina después de la reforma 3', NULL, NULL),
(38132, 'cocina-condes-de-aragon-despues-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 4', 'Cocina después de la reforma 4', NULL, NULL),
(38133, 'cocina-condes-de-aragon-despues-5.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 5', 'Cocina después de la reforma 5', NULL, NULL),
(38134, 'cocina-condes-de-aragon-despues-6.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 6', 'Cocina después de la reforma 6', NULL, NULL),
(38135, 'cocina-condes-de-aragon-despues-7.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 7', 'Cocina después de la reforma 7', NULL, NULL),
(38136, 'cocina-condes-de-aragon-despues-8.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 8', 'Cocina después de la reforma 8', NULL, NULL),
(38137, 'cocina-condes-de-aragon-despues-9.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 9', 'Cocina después de la reforma 9', NULL, NULL),
(38138, 'cocina-condes-de-aragon-despues-10.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 10', 'Cocina después de la reforma 10', NULL, NULL),
(38139, 'cocina-condes-de-aragon-despues-11.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 11', 'Cocina después de la reforma 11', NULL, NULL),
(38140, 'cocina-condes-de-aragon-despues-12.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 12', 'Cocina después de la reforma 12', NULL, NULL),
(38141, 'cocina-condes-de-aragon-despues-13.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 13', 'Cocina después de la reforma 13', NULL, NULL),
(38142, 'cocina-condes-de-aragon-despues-14.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Cocina después de la reforma 14', 'Cocina después de la reforma 14', NULL, NULL),
(38143, 'reforma-cocina-dato.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Reforma de cocina Dato', 'Reforma de cocina Dato', NULL, NULL),
(38144, '1-cristalera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cristalera', 'Cristalera', NULL, NULL),
(38145, '1-cristalera-fuera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cristalera fuera', 'Cristalera fuera', NULL, NULL),
(38146, '2-horno-micro.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Horno y micro', 'Horno y micro', NULL, NULL),
(38147, '3-isla.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Isla', 'Isla', NULL, NULL),
(38148, '3-zoom-isla.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Zoom isla', 'Zoom isla', NULL, NULL),
(38149, '4-lateral.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Lateral cocina', 'Lateral cocina', NULL, NULL),
(38150, '5-cajones-cerrados.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cajones cerrados', 'Cajones cerrados', NULL, NULL),
(38151, '6-cajones-isla.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cajones de la isla', 'Cajones de la isla', NULL, NULL),
(38152, '7-cajones-vitro.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cajones bajo la vitrocerámica', 'Cajones bajo la vitrocerámica', NULL, NULL),
(38153, '8-estanteria.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Estantería', 'Estantería', NULL, NULL),
(38154, '9-led.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Luz led', 'Luz led', NULL, NULL),
(38155, '10-campana-horno-micro.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Conjunto campana horno y micro', 'Conjunto campana horno y micro', NULL, NULL),
(38156, '11-campana.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Campana', 'Campana', NULL, NULL),
(38157, '12-encimera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Encimera', 'Encimera', NULL, NULL),
(38158, '13-grifo.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Grifo', 'Grifo', NULL, NULL),
(38159, '14-frontal.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Frontal', 'Frontal', NULL, NULL),
(38160, '15-cristalera-dentro.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-dato/', 'Cristalera desde dentro', 'Cristalera desde dentro', NULL, NULL),
(38161, 'cambio-banera-ducha-alcala-de-la-selva.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Cambio de bañera por ducha Alcalá de la selva', 'Cambio de bañera por ducha Alcalá de la selva', NULL, NULL),
(38162, 'banera-ducha-alcala-de-la-selva-1.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Estado anterior del baño', 'Estado anterior del baño', 'Estado anterior del baño', NULL),
(38163, 'banera-ducha-alcala-de-la-selva-2.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Retirada de la bañera', 'Retirada de la bañera', 'Retirada de la bañera', NULL),
(38164, 'banera-ducha-alcala-de-la-selva-3.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Plato de ducha con faldones', 'Plato de ducha con faldones', 'Plato de ducha con faldones', NULL),
(38165, 'banera-ducha-alcala-de-la-selva-4.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Sustitución por grifería nueva', 'Sustitución por grifería nueva', 'Sustitución por grifería nueva', NULL),
(38166, 'banera-ducha-alcala-de-la-selva-5.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Colocación de la mampara', 'Colocación de la mampara', 'Colocación de la mampara', NULL),
(38167, 'banera-ducha-alcala-de-la-selva-6.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Resultado final', 'Resultado final', 'Resultado final', NULL),
(38168, 'banera-ducha-alcala-de-la-selva-7.jpg', 'bundles/app/images/proyectos/reformas-de-banos/cambio-banera-ducha-alcala-de-la-selva/', 'Resultado final, mampara', 'Resultado final, mampara', 'Resultado final, mampara', NULL),
(38169, 'reforma-bano-oceano-atlantico.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Reforma de baño Oceáno Atlántico', 'Reforma de baño Oceáno Atlántico', NULL, NULL),
(38170, 'bano-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Baño 1 después de la reforma', 'Baño 1 después de la reforma', 'Después', NULL),
(38171, 'bano-1-puerta-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Puerta del baño 1 antes de la reforma', 'Puerta del baño 1 antes de la reforma', 'Antes', NULL),
(38172, 'bano-1-puerta-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Puerta del baño 1 después de la reforma', 'Puerta del baño 1 después de la reforma', 'Después', NULL),
(38173, 'bano-1-mueble-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Mueble del baño 1 antes de la reforma', 'Mueble del baño 1 antes de la reforma', 'Después', NULL),
(38174, 'bano-1-mueble-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Mueble del baño 1 después de la reforma', 'Mueble del baño 1 después de la reforma', 'Después', NULL),
(38175, 'bano-2-ducha-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Ducha del baño 2 antes de la reforma', 'Ducha del baño 2 antes de la reforma', 'Antes', NULL),
(38176, 'bano-2-ducha-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Ducha de l baño 2 después de la reforma', 'Ducha de l baño 2 después de la reforma', 'Después', NULL),
(38177, 'bano-2-puerta.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Puerta del baño 2', 'Puerta del baño 2', 'Después', NULL),
(38178, 'bano-2-suelo.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-oceano-atlantico/', 'Suelo del baño 2', 'Suelo del baño 2', 'Después', NULL),
(38179, 'reforma-bano-anselmo-clave.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Reforma de baño Anselmo Clavé', 'Reforma de baño Anselmo Clavé', NULL, NULL),
(38180, 'bano-antes-1.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño antes de la reforma 1', 'Baño antes de la reforma 1', NULL, NULL),
(38181, 'bano-antes-2.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño antes de la reforma 2', 'Baño antes de la reforma 2', NULL, NULL),
(38182, 'bano-despues-1.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño después de la reforma 1', 'Baño después de la reforma 1', NULL, NULL),
(38183, 'bano-despues-2.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño después de la reforma 2', 'Baño después de la reforma 2', NULL, NULL),
(38184, 'bano-despues-3.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño después de la reforma 3', 'Baño después de la reforma 3', NULL, NULL),
(38185, 'bano-despues-4.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-anselmo-clave/', 'Baño después de la reforma 4', 'Baño después de la reforma 4', NULL, NULL),
(38186, 'reforma-bano-dato.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Reforma de baño Dato', 'Reforma de baño Dato', NULL, NULL),
(38187, 'frontal-lavabo.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Frontal del lavabo', 'Frontal del lavabo', NULL, NULL),
(38188, 'lavabo.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Lavabo', 'Lavabo', NULL, NULL),
(38189, 'radiador-toallero.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Radiador toallero', 'Radiador toallero', NULL, NULL),
(38190, 'mampara.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Mampara', 'Mampara', NULL, NULL),
(38191, 'ducha.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Ducha', 'Ducha', NULL, NULL),
(38192, 'inodoro.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-dato/', 'Inodoro', 'Inodoro', NULL, NULL),
(38193, 'reforma-bano-maria-lostal.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Reforma de baño María Lostal', 'Reforma de baño María Lostal', NULL, NULL),
(38194, 'bano-1.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Baño 1', 'Baño 1', NULL, NULL),
(38195, 'bano-1-ropa.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Armario del bano 1', 'Armario del bano 1', NULL, NULL),
(38196, 'bano-2.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Baño 2', 'Baño 2', NULL, NULL),
(38197, 'bano-2-vater.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Váter del bano 2', 'Váter del bano 2', NULL, NULL),
(38198, 'bano-2-ducha.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-maria-lostal/', 'Ducha del bano 2', 'Ducha del bano 2', NULL, NULL),
(38199, 'reforma-bano-miguel-servet.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Reforma de baño Miguel Servet', 'Reforma de baño Miguel Servet', NULL, NULL),
(38200, 'entrada.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Entrada', 'Entrada', NULL, NULL),
(38201, 'bano.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Baño', 'Baño', NULL, NULL),
(38202, 'ducha.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Ducha', 'Ducha', NULL, NULL),
(38203, 'mampara-abierta.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Mampara abierta', 'Mampara abierta', NULL, NULL),
(38204, 'mampara-cerrada.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-miguel-servet/', 'Mampara cerrada', 'Mampara cerrada', NULL, NULL),
(38205, 'reforma-cocina-miguel-servet.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Reforma de cocina Miguel Servet', 'Reforma de cocina Miguel Servet', NULL, NULL),
(38206, 'frente-puerta-corredera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Puerta corredera de frente', 'Puerta corredera de frente', NULL, NULL),
(38207, 'puerta-corredera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Puerta corredera', 'Puerta corredera', NULL, NULL),
(38208, 'frente-cocina.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Frente de la cocina', 'Frente de la cocina', NULL, NULL),
(38209, 'encimera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Encimera', 'Encimera', NULL, NULL),
(38210, 'puerta.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-miguel-servet/', 'Puerta', 'Puerta', NULL, NULL),
(38211, 'reforma-cocina-oceano-atlantico.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Reforma de cocina Oceáno Atlántico', 'Reforma de cocina Oceáno Atlántico', NULL, NULL),
(38212, 'cocina.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Cocina', 'Cocina', NULL, NULL),
(38213, 'campana.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Campana extractora', 'Campana extractora', NULL, NULL),
(38214, 'encimera-muebles.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Encimera y muebles', 'Encimera y muebles', NULL, NULL),
(38215, 'encimera.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Encimera', 'Encimera', NULL, NULL);
INSERT INTO `image` (`id`, `file`, `path`, `title`, `alt`, `description`, `format`) VALUES
(38216, 'esquinero.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Esquinero', 'Esquinero', NULL, NULL),
(38217, 'esquinero-extraible.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Esquinero extraible', 'Esquinero extraible', NULL, NULL),
(38218, 'estanteria.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Estantería', 'Estantería', NULL, NULL),
(38219, 'grifo.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Grifo', 'Grifo', NULL, NULL),
(38220, 'grifo-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Grifo 2', 'Grifo 2', NULL, NULL),
(38221, 'mesa.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Mesa', 'Mesa', NULL, NULL),
(38222, 'mobiliario-electrodomesticos.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Mobiliario y electrodomésticos', 'Mobiliario y electrodomésticos', NULL, NULL),
(38223, 'mucha-luz.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'La cocina tiene mucha luz', 'La cocina tiene mucha luz', NULL, NULL),
(38224, 'muebles-cerrados.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Mobiliario cerrado', 'Mobiliario cerrado', NULL, NULL),
(38225, 'muebles-abiertos.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-oceano-atlantico/', 'Mobiliario abierto', 'Mobiliario abierto', NULL, NULL),
(38226, 'reforma-integral-dato.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Reforma intregral Dato', 'Reforma intregral Dato', NULL, NULL),
(38227, 'comedor-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Comedor 1', 'Comedor 1', NULL, NULL),
(38228, 'comedor-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Comedor 2', 'Comedor 2', NULL, NULL),
(38229, 'comedor-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Comedor 3', 'Comedor 3', NULL, NULL),
(38230, 'comedor-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Comedor 4', 'Comedor 4', NULL, NULL),
(38231, 'comedor-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Comedor 5', 'Comedor 5', NULL, NULL),
(38232, 'pasillo-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Pasillo 1', 'Pasillo 1', NULL, NULL),
(38233, 'pasillo-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Pasillo 2', 'Pasillo 2', NULL, NULL),
(38234, 'pasillo-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Pasillo 3', 'Pasillo 3', NULL, NULL),
(38235, 'pasillo-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Pasillo 4', 'Pasillo 4', NULL, NULL),
(38236, 'bano-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Baño 1', 'Baño 1', NULL, NULL),
(38237, 'bano-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Baño 2', 'Baño 2', NULL, NULL),
(38238, 'bano-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Baño 3', 'Baño 3', NULL, NULL),
(38239, 'bano-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Baño 4', 'Baño 4', NULL, NULL),
(38240, 'bano-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Baño 5', 'Baño 5', NULL, NULL),
(38241, 'cocina-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 1', 'Cocina 1', NULL, NULL),
(38242, 'cocina-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 2', 'Cocina 2', NULL, NULL),
(38243, 'cocina-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 3', 'Cocina 3', NULL, NULL),
(38244, 'cocina-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 4', 'Cocina 4', NULL, NULL),
(38245, 'cocina-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 5', 'Cocina 5', NULL, NULL),
(38246, 'cocina-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-dato/', 'Cocina 6', 'Cocina 6', NULL, NULL),
(38247, 'reforma-suelo-puertas-juan-carlos-i.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Reforma de suelo y puertas Juan Carlos I', 'Reforma de suelo y puertas Juan Carlos I', NULL, NULL),
(38248, 'puertas-suelo-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 1', 'Cambio de puertas y suelo 1', NULL, NULL),
(38249, 'puertas-suelo-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 2', 'Cambio de puertas y suelo 2', NULL, NULL),
(38250, 'puertas-suelo-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 3', 'Cambio de puertas y suelo 3', NULL, NULL),
(38251, 'puertas-suelo-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 4', 'Cambio de puertas y suelo 4', NULL, NULL),
(38252, 'puertas-suelo-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 5', 'Cambio de puertas y suelo 5', NULL, NULL),
(38253, 'puertas-suelo-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas y suelo 6', 'Cambio de puertas y suelo 6', NULL, NULL),
(38254, 'remate-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Remate en muebles 1', 'Remate en muebles 1', NULL, NULL),
(38255, 'remate-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Remate en muebles 2', 'Remate en muebles 2', NULL, NULL),
(38256, 'transicion-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Transición de suelos 1', 'Transición de suelos 1', NULL, NULL),
(38257, 'transicion-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Transición de suelos 2', 'Transición de suelos 2', NULL, NULL),
(38258, 'manillar.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Manillar de puertas', 'Manillar de puertas', NULL, NULL),
(38259, 'cocina.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de puertas en cocina', 'Cambio de puertas en cocina', NULL, NULL),
(38260, 'cocina-comedor.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-suelo-puertas-juan-carlos-i/', 'Cambio de suelo del comedor', 'Cambio de suelo del comedor', NULL, NULL),
(38261, 'reforma-integral-luis-oro-giral.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Reforma integral Luis Oro Giral', 'Reforma integral Luis Oro Giral', NULL, NULL),
(38262, '01-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38263, '02-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38264, '03-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38265, '04-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38266, '05-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38267, '06-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38268, '07-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38269, '08-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38270, '09-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38271, '10-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38272, '11-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38273, '12-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38274, '13-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Antes', 'Antes', 'Antes', NULL),
(38275, '01-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38276, '02-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38277, '03-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38278, '04-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38279, '05-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38280, '06-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38281, '07-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38282, '08-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38283, '09-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38284, '10-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38285, '11-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38286, '12-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38287, '13-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38288, '13_despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-luis-oro-giral/', 'Después', 'Después', 'Después', NULL),
(38289, 'reforma-integral-maria-lostal.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma integral María Lostal', 'Reforma integral María Lostal', NULL, NULL),
(38290, 'salon-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de salón 5', 'Reforma de salón 5', NULL, NULL),
(38291, 'bano-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en baño 1', 'Reforma en baño 1', NULL, NULL),
(38292, 'bano-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en baño 2', 'Reforma en baño 2', NULL, NULL),
(38293, 'bano-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en baño 3', 'Reforma en baño 3', NULL, NULL),
(38294, 'cocina-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en cocina 1', 'Reforma en cocina 1', NULL, NULL),
(38295, 'cocina-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en cocina 2', 'Reforma en cocina 2', NULL, NULL),
(38296, 'cocina-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en cocina 3', 'Reforma en cocina 3', NULL, NULL),
(38297, 'cocina-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en cocina 4', 'Reforma en cocina 4', NULL, NULL),
(38298, 'despacho-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en despacho 1', 'Reforma en despacho 1', NULL, NULL),
(38299, 'despacho-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma en despacho 2', 'Reforma en despacho 2', NULL, NULL),
(38300, 'dormitorio-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de dormitorio 1', 'Reforma de dormitorio 1', NULL, NULL),
(38301, 'dormitorio-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de dormitorio 2', 'Reforma de dormitorio 2', NULL, NULL),
(38302, 'salon-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de salón 1', 'Reforma de salón 1', NULL, NULL),
(38303, 'salon-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de salón 2', 'Reforma de salón 2', NULL, NULL),
(38304, 'salon-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de salón 3', 'Reforma de salón 3', NULL, NULL),
(38305, 'salon-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-maria-lostal/', 'Reforma de salón 4', 'Reforma de salón 4', NULL, NULL),
(38306, 'reforma-integral-almagro.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Reforma integral Almagro', 'Reforma integral Almagro', NULL, NULL),
(38307, 'bano-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño antes 1', 'Baño antes 1', 'Antes', NULL),
(38308, 'bano-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño antes 2', 'Baño antes 2', 'Antes', NULL),
(38309, 'bano-3-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño antes 3', 'Baño antes 3', 'Antes', NULL),
(38310, 'bano-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño después 1', 'Baño después 1', 'Después', NULL),
(38311, 'bano-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño después 2', 'Baño después 2', 'Después', NULL),
(38312, 'bano-3-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Baño después 3', 'Baño después 3', 'Después', NULL),
(38313, 'cocina-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Cocina antes 1', 'Cocina antes 1', 'Antes', NULL),
(38314, 'cocina-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Cocina antes 2', 'Cocina antes 2', 'Antes', NULL),
(38315, 'cocina-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Cocina después 1', 'Cocina después 1', 'Después', NULL),
(38316, 'cocina-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Cocina después 2', 'Cocina después 2', 'Después', NULL),
(38317, 'espacio-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 1', 'Espacio 1', NULL, NULL),
(38318, 'espacio-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 2', 'Espacio 2', NULL, NULL),
(38319, 'espacio-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 3', 'Espacio 3', NULL, NULL),
(38320, 'espacio-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 4', 'Espacio 4', NULL, NULL),
(38321, 'espacio-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 5', 'Espacio 5', NULL, NULL),
(38322, 'espacio-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 6', 'Espacio 6', NULL, NULL),
(38323, 'espacio-7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 7', 'Espacio 7', NULL, NULL),
(38324, 'espacio-8.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 8', 'Espacio 8', NULL, NULL),
(38325, 'espacio-9.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-almagro/', 'Espacio 9', 'Espacio 9', NULL, NULL),
(38326, '', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en Gómez de Avellaneda 1', 'Reforma integral en Gómez de Avellaneda', NULL, NULL),
(38327, 'reforma-integral-gomez-avellaneda-1.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 1', 'Reforma integral gomez-avellaneda 1', NULL, NULL),
(38328, 'reforma-integral-gomez-avellaneda-2.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 2', 'Reforma integral gomez-avellaneda 2', NULL, NULL),
(38329, 'reforma-integral-gomez-avellaneda-3.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 3', 'Reforma integral gomez-avellaneda 3', NULL, NULL),
(38330, 'reforma-integral-gomez-avellaneda-4.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 4', 'Reforma integral gomez-avellaneda 4', NULL, NULL),
(38331, 'reforma-integral-gomez-avellaneda-5.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 5', 'Reforma integral gomez-avellaneda 5', NULL, NULL),
(38332, 'reforma-integral-gomez-avellaneda-6.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 6', 'Reforma integral gomez-avellaneda 6', NULL, NULL),
(38333, 'reforma-integral-gomez-avellaneda-7.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 7', 'Reforma integral gomez-avellaneda 7', NULL, NULL),
(38334, 'reforma-integral-gomez-avellaneda-8.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 8', 'Reforma integral gomez-avellaneda 8', NULL, NULL),
(38335, 'reforma-integral-gomez-avellaneda-9.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 9', 'Reforma integral gomez-avellaneda 9', NULL, NULL),
(38336, 'reforma-integral-gomez-avellaneda-10.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 10', 'Reforma integral gomez-avellaneda 10', NULL, NULL),
(38337, 'reforma-integral-gomez-avellaneda-11.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 11', 'Reforma integral gomez-avellaneda 11', NULL, NULL),
(38338, 'reforma-integral-gomez-avellaneda-12.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 12', 'Reforma integral gomez-avellaneda 12', NULL, NULL),
(38339, 'reforma-integral-gomez-avellaneda-13.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 13', 'Reforma integral gomez-avellaneda 13', NULL, NULL),
(38340, 'reforma-integral-gomez-avellaneda-14.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 14', 'Reforma integral gomez-avellaneda 14', NULL, NULL),
(38341, 'reforma-integral-gomez-avellaneda-15.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 15', 'Reforma integral gomez-avellaneda 15', NULL, NULL),
(38342, 'reforma-integral-gomez-avellaneda-16.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 16', 'Reforma integral gomez-avellaneda 16', NULL, NULL),
(38343, 'reforma-integral-gomez-avellaneda-17.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 17', 'Reforma integral gomez-avellaneda 17', NULL, NULL),
(38344, 'reforma-integral-gomez-avellaneda-18.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 18', 'Reforma integral gomez-avellaneda 18', NULL, NULL),
(38345, 'reforma-integral-gomez-avellaneda-19.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 19', 'Reforma integral gomez-avellaneda 19', NULL, NULL),
(38346, 'reforma-integral-gomez-avellaneda-20.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 20', 'Reforma integral gomez-avellaneda 20', NULL, NULL),
(38347, 'reforma-integral-gomez-avellaneda-21.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 21', 'Reforma integral gomez-avellaneda 21', NULL, NULL),
(38348, 'reforma-integral-gomez-avellaneda-22.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 22', 'Reforma integral gomez-avellaneda 22', NULL, NULL),
(38349, 'reforma-integral-gomez-avellaneda-23.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 23', 'Reforma integral gomez-avellaneda 23', NULL, NULL),
(38350, 'reforma-integral-gomez-avellaneda-24.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 24', 'Reforma integral gomez-avellaneda 24', NULL, NULL),
(38351, 'reforma-integral-gomez-avellaneda-25.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en gomez-avellaneda 25', 'Reforma integral gomez-avellaneda 25', NULL, NULL),
(38352, 'reforma-cocina-portugal.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Reforma de cocina Portugal', 'Reforma de cocina Portugal', NULL, NULL),
(38353, 'portugal-1.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 1', 'Cocina Portugal 1', NULL, NULL),
(38354, 'portugal-2.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 2', 'Cocina Portugal 2', NULL, NULL),
(38355, 'portugal-3.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 3', 'Cocina Portugal 3', NULL, NULL),
(38356, 'portugal-4.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 4', 'Cocina Portugal 4', NULL, NULL),
(38357, 'portugal-5.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 5', 'Cocina Portugal 5', NULL, NULL),
(38358, 'portugal-6.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 6', 'Cocina Portugal 6', NULL, NULL),
(38359, 'portugal-7.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 7', 'Cocina Portugal 7', NULL, NULL),
(38360, 'portugal-8.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 8', 'Cocina Portugal 8', NULL, NULL),
(38361, 'portugal-8-3D.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 8 3D', 'Cocina Portugal 8 3D', NULL, NULL),
(38362, 'portugal-9.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 9', 'Cocina Portugal 9', NULL, NULL),
(38363, 'portugal-10.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 10', 'Cocina Portugal 10', NULL, NULL),
(38364, 'portugal-10-3D.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 10 3D', 'Cocina Portugal 10 3D', NULL, NULL),
(38365, 'portugal-11.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 11', 'Cocina Portugal 11', NULL, NULL),
(38366, 'portugal-12.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-portugal/', 'Cocina Portugal 12', 'Cocina Portugal 12', NULL, NULL),
(38367, 'rehabilitacion-fachada-edificio-layes.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Rehabilitación de fachada edificio Layes', 'Rehabilitación de fachada edificio Layes', NULL, NULL),
(38368, 'antes-rehabilitacion-1.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada antes de la rehabilitacion 1', 'Fachada antes de la rehabilitacion 1', NULL, NULL),
(38369, 'antes-rehabilitacion-2.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada antes de la rehabilitacion 2', 'Fachada antes de la rehabilitacion 2', NULL, NULL),
(38370, 'antes-rehabilitacion-3.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada antes de la rehabilitacion 3', 'Fachada antes de la rehabilitacion 3', NULL, NULL),
(38371, 'durante-rehabilitacion-1.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 1', 'Fachada durante de la rehabilitacion 1', NULL, NULL),
(38372, 'durante-rehabilitacion-2.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 2', 'Fachada durante de la rehabilitacion 2', NULL, NULL),
(38373, 'durante-rehabilitacion-3.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 3', 'Fachada durante de la rehabilitacion 3', NULL, NULL),
(38374, 'durante-rehabilitacion-4.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 4', 'Fachada durante de la rehabilitacion 4', NULL, NULL),
(38375, 'durante-rehabilitacion-5.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 5', 'Fachada durante de la rehabilitacion 5', NULL, NULL),
(38376, 'durante-rehabilitacion-6.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada durante de la rehabilitacion 6', 'Fachada durante de la rehabilitacion 6', NULL, NULL),
(38377, 'despues-rehabilitacion-1.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada después de la rehabilitacion 1', 'Fachada después de la rehabilitacion 1', NULL, NULL),
(38378, 'despues-rehabilitacion-2.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada después de la rehabilitacion 2', 'Fachada después de la rehabilitacion 2', NULL, NULL),
(38379, 'despues-rehabilitacion-3.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada después de la rehabilitacion 3', 'Fachada después de la rehabilitacion 3', NULL, NULL),
(38380, 'despues-rehabilitacion-4.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/rehabilitacion-fachada-edificio-layes/', 'Fachada después de la rehabilitacion 4', 'Fachada después de la rehabilitacion 4', NULL, NULL),
(38381, 'reforma-patio-galan-bergua.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Reforma de patio Galán Bergua', 'Reforma de patio Galán Bergua', NULL, NULL),
(38382, 'frente-portal.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Portal del patio', 'Portal del patio', NULL, NULL),
(38383, 'escalera-a.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Escalera izquierda', 'Escalera izquierda', NULL, NULL),
(38384, 'escalera-b.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Escalera derecha', 'Escalera derecha', NULL, NULL),
(38385, 'rampa-entrada.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Rampa del portal', 'Rampa del portal', NULL, NULL),
(38386, 'rampa-1.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Rampa del patio 1', 'Rampa del patio 1', NULL, NULL),
(38387, 'rampa-2.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Rampa del patio 2', 'Rampa del patio 2', NULL, NULL),
(38388, 'rampa-3.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/reforma-patio-galan-bergua/', 'Rampa del patio 3', 'Rampa del patio 3', NULL, NULL),
(38389, 'bajada-ascensor-cota-cero-uncastillo.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Bajada del ascensor a cota cero Uncastillo', 'Bajada del ascensor a cota cero Uncastillo', NULL, NULL),
(38390, 'escalera-derecha-antes.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Escalera derecha antes de la reforma', 'Escalera derecha antes de la reforma', 'Antes', NULL),
(38391, 'escalera-derecha-despues.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Escalera derecha después de la reforma', 'Escalera derecha después de la reforma', 'Después', NULL),
(38392, 'escalera-izquierda-antes.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Escalera izquierda antes de la reforma', 'Escalera izquierda antes de la reforma', 'Antes', NULL),
(38393, 'escalera-izquierda-despues.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Escalera izquieda después de la reforma', 'Escalera izquieda después de la reforma', 'Después', NULL),
(38394, 'rellano-izquierda-antes.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Rellano izquierda antes de la reforma', 'Rellano izquierda antes de la reforma', 'Antes', NULL),
(38395, 'rellano-izquierda-despues.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Rellano izquierda después de la reforma', 'Rellano izquierda después de la reforma', 'Después', NULL),
(38396, 'rellano-derecha-antes.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Rellano derecha antes de la reforma', 'Rellano derecha antes de la reforma', 'Antes', NULL),
(38397, 'rellano-derecha-despues.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Rellano derecha después de la reforma', 'Rellano derecha después de la reforma', 'Después', NULL),
(38398, 'ascensor-derecha.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Bajada ascensor derecha a cota 0', 'Bajada ascensor derecha a cota 0', NULL, NULL),
(38399, 'ascensor-izquierda.jpg', 'bundles/app/images/proyectos/reformas-de-comunidades/bajada-ascensor-cota-cero-uncastillo/', 'Bajada ascensor izquierda a cota 0', 'Bajada ascensor izquierda a cota 0', NULL, NULL),
(38400, 'reforma-bano-almagro.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Reforma de baño Almagro', 'Reforma de baño Almagro', NULL, NULL),
(38401, 'bano-1-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 1 antes de la reforma', 'Baño 1 antes de la reforma', 'Antes', NULL),
(38402, 'bano-1-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 1 después de la reforma', 'Baño 1 después de la reforma', 'Después', NULL),
(38403, 'bano-2-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 2 antes de la reforma', 'Baño 2 antes de la reforma', 'Antes', NULL),
(38404, 'bano-2-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 2 después de la reforma', 'Baño 2 después de la reforma', 'Después', NULL),
(38405, 'bano-3-antes.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 3 antes de la reforma', 'Baño 3 antes de la reforma', 'Antes', NULL),
(38406, 'bano-3-despues.jpg', 'bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/', 'Baño 3 después de la reforma', 'Ducha 3 después antes de la reforma', 'Después', NULL),
(38407, '', 'bundles/blog/images/articles/', 'Cómo escoger baldosa para la reforma del hogar', 'Cómo escoger baldosa para la reforma del hogar', NULL, NULL),
(38408, '', 'bundles/blog/images/articles/', 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda', NULL, NULL),
(38409, '', 'bundles/blog/images/articles/', 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda', NULL, NULL),
(38410, '', 'bundles/blog/images/articles/', 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda', NULL, NULL),
(38411, '', 'bundles/blog/images/articles/', 'Cómo escoger baldosa para la reforma del hogar', 'Cómo escoger baldosa para la reforma del hogar', NULL, NULL),
(38412, '', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL),
(38413, '', 'bundles/blog/images/articles/', 'Reforma de cocina en Condes de Aragón', 'Reforma de cocina en Condes de Aragón', NULL, NULL),
(38414, '', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Ruiseñores', 'Reforma de piso integral en paseo Ruiseñores', NULL, NULL),
(38415, '', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Viñedo Viejo', 'Reforma de piso integral en paseo Viñedo Viejo', NULL, NULL),
(38416, 'exposición-de-reformas-en-Zaragoza.jpg', 'bundles/blog/images/articles/', 'Exposición de reformas en Zaragoza', 'Exposición de reformas en Zaragoza', NULL, NULL),
(38417, 'reformas-zaragoza-una-reforma-de-calidad-en-la-calle-maria-lostal.jpg', 'bundles/blog/images/articles/', 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal', 'Reformas Zaragoza: una reforma de calidad en la calle María Lostal', NULL, NULL),
(38418, '', 'bundles/blog/images/articles/', 'Reformas en Zaragoza mucho más que un proyecto constructivo', 'Reformas en Zaragoza mucho más que un proyecto constructivo', NULL, NULL),
(38419, '', 'bundles/blog/images/articles/', 'Reformas de pisos en Zaragoza', 'Reformas de pisos en Zaragoza', NULL, NULL),
(38420, '', 'bundles/blog/images/articles/', 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda', NULL, NULL),
(38421, '', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38422, '', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38423, '', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38424, '', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38425, '', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL),
(38426, '', 'bundles/blog/images/articles/', 'Empresa de rehabilitación de fachadas en Zaragoza', 'Empresa de rehabilitación de fachadas en Zaragoza', NULL, NULL),
(38427, 'rehabilitacion-fachadas-zaragoza.jpg', 'bundles/blog/images/articles/', 'Empresa de rehabilitación de fachadas en Zaragoza', 'Empresa de rehabilitación de fachadas en Zaragoza', NULL, NULL),
(38428, '', 'bundles/blog/images/articles/', 'Descubre una de las mejores empresas de reformas en Zaragoza', 'Descubre una de las mejores empresas de reformas en Zaragoza', NULL, NULL),
(38429, '', 'bundles/blog/images/articles/', 'Descubre una de las mejores empresas de reformas en Zaragoza', 'Descubre una de las mejores empresas de reformas en Zaragoza', NULL, NULL),
(38430, 'reformas-de-pisos.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/', 'Reformas de pisos', 'Reformas de pisos', NULL, NULL),
(38431, '', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38432, 'NZ Reformas.jpg', 'bundles/blog/images/articles/', 'NZ Reformas en Interempresas', 'NZ Reformas', 'La empresa especializada en reformas NZ Reformas aparece en Interempresas en una publicación sobre tendencias en el diseño de interiores.', NULL),
(38433, '', 'bundles/blog/images/articles/', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', NULL, NULL),
(38434, '', 'bundles/blog/images/articles/', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', NULL, NULL),
(38435, '', 'bundles/blog/images/articles/', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', NULL, NULL),
(38436, '', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', NULL, NULL),
(38437, '', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', 'NZ Reformas es una empresas maña experta en la realización de reformas y rehabilitaciones. Si necesita impermeabilizar alguna estancia, terraza o techado no dude en ponerse en contacto con nosotros.', NULL),
(38438, '', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', NULL, NULL),
(38439, '', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', NULL, NULL),
(38440, '', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL),
(38441, 'reforma-de-vivienda-en-gomez-de-avellaneda.jpg', 'bundles/blog/images/articles/', 'Reforma de vivienda en Gómez de Avellaneda', 'Reforma de vivienda en Gómez de Avellaneda', NULL, NULL),
(38442, 'como-escoger-baldosa-para-la-reforma-del-hogar.jpg', 'bundles/blog/images/articles/', 'Cómo escoger baldosa para la reforma del hogar', 'Cómo escoger baldosa para la reforma del hogar', NULL, NULL),
(38443, '', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38444, '', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38445, 'reforma-de-cocina-en-condes-de-aragon.jpg', 'bundles/blog/images/articles/', 'Reforma de cocina en Condes de Aragón', 'Reforma de cocina en Condes de Aragón', NULL, NULL),
(38446, 'reforma-de-piso-integral-en-paseo-ruisenores.jpg', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Ruiseñores', 'Reforma de piso integral en paseo Ruiseñores', NULL, NULL),
(38447, 'reforma-integral-de-vivienda-en-vinedo-viejo.jpg', 'bundles/blog/images/articles/', 'Reforma de piso integral en paseo Viñedo Viejo', 'Reforma de piso integral en paseo Viñedo Viejo', NULL, NULL),
(38448, 'reforma-atico-zaragoza.jpg', 'bundles/blog/images/articles/', 'Un elegante ático en la calle Miguel Servet', 'Un elegante ático en la calle Miguel Servet', NULL, NULL),
(38449, 'impermeabilizaciones-zaragoza.jpg', 'bundles/blog/images/articles/', 'Impermeabilizaciones en Zaragoza', 'Impermeabilizaciones en Zaragoza', NULL, NULL),
(38450, 'empresa-de-reformas-en-zaragoza.jpg', 'bundles/blog/images/articles/', 'Descubre una de las mejores empresas de reformas en Zaragoza', 'Descubre una de las mejores empresas de reformas en Zaragoza', NULL, NULL),
(38451, 'presupuestos-reformas-zaragoza.jpg', 'bundles/blog/images/articles/', 'Presupuestos de reformas en Zaragoza para modificar nuestros espacios', 'Presupuestos de reformas en Zaragoza para modificar nuestros espacios', NULL, NULL),
(38452, 'reformas-de-comunidades-en-zaragoza.jpg', 'bundles/blog/images/articles/', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', 'Realiza reformas de comunidades en Zaragoza con técnicos profesionales', NULL, NULL),
(38453, 'reformas-zaragoza.jpg', 'bundles/blog/images/articles/', 'Reformas en Zaragoza mucho más que un proyecto constructivo', 'Reformas en Zaragoza mucho más que un proyecto constructivo', NULL, NULL),
(38454, 'reformas-pisos-zaragoza.jpg', 'bundles/blog/images/articles/', 'Reformas de pisos en Zaragoza', 'Reformas de pisos en Zaragoza', NULL, NULL),
(38455, '', 'bundles/app/images/proyectos/reformas-locales-zaragoza/', 'Reformas de locales en Zaragoza', 'Reformas de locales en Zaragoza', NULL, NULL),
(38456, '', 'bundles/app/images/proyectos/reformas-locales-zaragoza/', 'Reformas de locales en Zaragoza', 'Reformas de locales en Zaragoza', NULL, NULL),
(38457, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas cocinas Zaragoza', 'Reformas de cocinas', NULL, NULL),
(38458, '', 'bundles/app/images/proyectos/reformas-locales-zaragoza/', 'Reformas locales Zaragoza', 'Reformas de locales en Zaragoza', NULL, NULL),
(38459, 'Reformas de locales en Zaragoza.jpg', 'bundles/app/images/proyectos/reformas-locales-zaragoza/', 'Reformas de locales en Zaragoza', 'Reformas de locales en Zaragoza', NULL, NULL),
(38460, '', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38461, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(38462, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas en Zaragoza', 'Reformas cocinas zaragoza', NULL, NULL),
(38463, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(38464, 'reforma-integral-gomez-avellaneda.jpg', 'bundles/app/images/proyectos/reformas-de-pisos/reforma-integral-gomez-avellaneda/', 'Reforma integral en Gómez de Avellaneda', 'Reforma integral en Gómez de Avellaneda', NULL, NULL),
(38465, '', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Reforma de cocina Condes de Aragón', 'Reforma de cocina Condes de Aragón', NULL, NULL),
(38466, '', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Reforma de cocina Condes de Aragón', 'Reforma de cocina Condes de Aragón', NULL, NULL),
(38467, 'cocina-condes-de-aragon.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/reforma-cocina-condes-de-aragon/', 'Reforma de cocina Condes de Aragón', 'Reforma de cocina Condes de Aragón', NULL, NULL),
(38468, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(38469, '', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(38470, 'reformas-de-cocinas.jpg', 'bundles/app/images/proyectos/reformas-de-cocinas/', 'Reformas de cocinas', 'Reformas de cocinas', NULL, NULL),
(38471, '', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38472, 'reforma-de-cocina-con-simulacion-3d-en-calle-portugal.jpg', '/bundles/blog/images/articles/', 'Reforma de cocina con simulación 3D en calle Portugal', 'Reforma de cocina con simulación 3D en calle Portugal', NULL, NULL),
(38473, '', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL),
(38474, 'bano-sainz-de-varanda-7.jpg', '/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-sainz-de-varanda/', 'Reforma de baño con microcemento en Sainz de Varanda', 'Reforma de baño con microcemento en Sainz de Varanda', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id`, `image_id`, `name`, `slug`, `introduction`, `description`, `content`, `path`) VALUES
(394, 37937, 'Reformas de comunidades', 'reformas-de-comunidades', 'NZ Reformas es una de las empresas dedicadas a reformas de comunidades en Zaragoza con más recorrido. Además, un gran número de clientes nos avalan como empresa con un excelente servicio al cliente, puntuales y profesionales. Para consultas llámanos al ☎ 976 56 55 24', '<p>Además de dedicarnos a la reformas de viviendas, también realizamos proyectos de una escala mayor. NZ Reformas pertenece a Construcciones Navascués Zalaya S.L. una empresa de dedicada a obra mayor, y obra nueva. Desarrollamos desde grandes proyectos, a modificaciones y reparaciones sencillas.</p>\n\n<p>Asi que si se plantea la reforma de un negocio, reparación de un patio o la impermeabilización de una fachada en una comunidad de vecinos, sepa que no es un problema y que contamos con gran experiencia en el sector. Proponemos diferentes modelos de pago, conforme a las necesidades del cliente.</p>', NULL, 'bundles/app/images/proyectos/reformas-de-comunidades/'),
(395, 38430, 'Reformas de pisos en Zaragoza', 'reformas-de-pisos', 'Hacemos reformas de pisos en Zaragoza, y diseñamos espacios interiores. Planificamos el proyecto de reforma, realizando un estudio previo para sacar el mayor partido a la distribución del espacio. Para consultas llámanos al ☎ 976 56 55 24', '<p>En NZ Reformas nos preocupamos por la realización de cada \n            proyecto de forma que cada área desarrolle su máximo potencial. La reforma de una \n            vivienda puede variar desde intervenciones pequeñas, como puede ser un cambio de puertas\n            , hasta reformas de pisos integrales dónde se modifica toda la vivienda. Nuestra amplia experiencia en <b>reformas de pisos en Zaragoza</b>, así como las valoraciones de nuestros clientes, nos avalan en términos de calidad de servicio.</p>\n            \n            <p>Lo más importante en las reformas de pisos es la elección en la distribución de espacios\n            , un pequeño cambio en un tabique puede mejorar mucho la calidad de vida. Una vivienda \n            refleja la personalidad de las personas que viven en ella, y es importante a la hora de \n            realizar reformas la participación del cliente, la elección de cada variación bajo \n            nuestro asesoramiento.</p>', NULL, 'bundles/app/images/proyectos/reformas-de-pisos/'),
(396, 37939, 'Reformas de baños', 'reformas-de-banos', 'NZ Reformas, especialistas en la Reforma de baños en Zaragoza. Entra en nuestra página para ver algunos de nuestros últimos proyectos. Para consultas llámanos al ☎ 976 56 55 24', '<p>Tenemos muy en cuenta el diseño de espacios en reformas, sobre \n            todo en reformas de baños. Es en esta zona de las viviendas donde más hay que cuidar el \n            espacio, así que aportamos soluciones simples y diseños de banos modernos.</p>\n            \n            <p>Disponemos de gran variedad de firmas de sanitarios, acabados y complementos. Pero la \n            diferencia la marca, la selección de los más adecuados. Por supuesto la elección es del \n            cliente, y bajo nuestro asesoramiento se puede realizar el plan de reforma más acertado.\n            Planteando una idea, o partiendo de cero, el diseño del mobiliario junto al acabado, y \n            los materiales apropiados pueden hacer mucho.</p>', NULL, 'bundles/app/images/proyectos/reformas-de-banos/'),
(397, 38470, 'Reformas de cocinas Zaragoza', 'reformas-de-cocinas-zaragoza', 'Reformas de cocinas en Zaragoza, un trabajo completo hecho por especialistas. NZ Reformas, para cualquier duda llámanos al ☎ 976 56 55 24', '<p>Las reformas de cocinas son uno de los proyectos con más \r\n            repercusión sobre la vivienda. Plantear este tipo de reformas puede desalentar a muchos \r\n            clientes por el desconocimiento del coste aproximado de una cocina. La estimación de una\r\n            reforma de cocina sin una visita previa es complicada, hay que tener encuenta muchas \r\n            posibilidades, pero nuestro conocimiento y experiencia en el sector aportan una base \r\n            sólida para lograr los objetivos de nuestros clientes.</p>\r\n            \r\n            <p>Dado que cada <strong>reforma de cocina en Zaragoza</strong> es diferente, hay muchas opciones de configuración, ya \r\n            sea por la disposición del mobiliario y los electrodomésticos, o la selección de \r\n            materiales. Además de estudiar el diseño de la cocina, hay tener en cuenta su \r\n            funcionalidad, una cocina ha de ser tanto cómoda, como práctica. Por eso disponemos de \r\n            los mejores especialistas, y un amplia gama de materiales que escoger. Moldeamos su \r\n            cocina a su gusto.</p>', '<p>En NZ Reformas trabajamos para ofrecerle las mejores <i>reformas de cocinas en Zaragoza</i> y alrededores, y lo hacemos poniendo a su disposición un equipo de profesionales experimentados que le ayudarán con el diseño y la planificación para que finalmente tenga esa cocina que tanto desea. Tanto si quiere hacer un cambio total o parcial, tenemos lo que necesita. ¿Por qué confiar en NZ Reformas?</p>\r\n<p>- Asesoramiento 100% personalizado. Realizamos reformas a medida, haciendo realidad todas esas ideas y sueños que tiene en mente. Tratamos cada proyecto de forma distinta, adaptándonos al entorno y a nuestros clientes y ofreciéndoles consultas individualizadas.</p>\r\n<p>- Pre-proyecto. Tras tomar medidas de la estancia y determinar los cambios a realizar, trazamos un diseño para que pueda visualizar cómo quedará su cocina y tenga la oportunidad de modificarlo tantas veces como desee hasta que quede totalmente satisfecho.</p>\r\n<p>- Presupuestos detallados. Dejamos atrás las sorpresas. Una vez está formulado el proyecto, le presentamos un presupuesto ajustado en el que se especifican todas las modificaciones, materiales y posibles contingencias. Gracias a esto, nuestros clientes tienen confianza ciega en nosotros y en nuestro modo de trabajar.</p>\r\n<p>- Equipo cercano. Nuestro personal está siempre a su lado ayudándole en todo el proceso, con lo que no se sentirá al margen y tendrá la oportunidad de resolver dudas y hacer los cambios que crea necesarios.</p>\r\n<p>Pida ya su <a href=\"https://www.nzreformas.es/pedir-presupuesto\">presupuesto de reformas</a> y no deje pasar más el tiempo. Con nuestro servicio de reformas de cocinas en Zaragoza puede tener la cocina que siempre ha deseado con todas las facilidades.</p>', 'bundles/app/images/proyectos/reformas-de-cocinas/'),
(398, 38459, 'Reformas de locales en Zaragoza', 'reformas-locales-zaragoza', 'Reformas de locales en Zaragoza, proyectos a medida en cada negocio. En NZ no solo realizamos trabajos en comunidades y viviendas particulares, además llevamos a cabo proyectos en negocios, tanto del aspecto exterior como de las más inovadoras tendencias en interior para conseguir la imagen deseada en tu negocio. Para consultas llámanos al ☎ 976 56 55 24', '<p>\n                En NZ Reformas le ayudamos a conferirle a su local comercial el aspecto que necesita\n                para atraer a un número mayor de clientes y mejorar su imagen corporativa a través de\n                nuestro servicio de <b>reformas de locales en Zaragoza</b>. Nuestra compañía está formada por\n                auténticos profesionales del sector especializados en todos los ámbitos que trabajan\n                para cada cliente de manera personalizada y que ofrecen una atención y un trato cercano.\n            </p>\n            <p>\n                Somos conscientes de la importancia que tiene para un negocio contar con un local \n                acorde a su actividad, adaptado a las nuevas tendencias y que busque en todo momento\n                la mayor comodidad de los potenciales clientes que entren en él y de los propios \n                trabajadores. En la actualidad, ofrecer buenos servicios y productos no es lo único \n                que consigue fidelizar clientes, sino que el entorno se ha convertido en un factor \n                clave para decantarse por una compañía u otra. Nuestra máxima es trasladar a los \n                propietarios este concepto y trabajar junto a ellos mano a mano para lograr que sus \n                comercios muestren una imagen corporativa efectiva y acorde a su modelo de empresa.\n            </p>\n            <p>\n                Desde NZ Reformas nos aseguramos que su local esté en las mejores condiciones \n                posibles, le damos un aspecto que llame la atención de los viandantes y posibles \n                consumidores o compradores y nos preocupamos de que el branding de su empresa tenga \n                la importancia que merece en su comercio.\n            </p>\n            <p>\n                Algunos de los aspectos más importantes que deben renovarse para mejorar el aspecto \n                de un local comercial son:\n            <ul class=\"default\" >\n                <li>\n                    Fachada. Se trata del primer elemento que los potenciales clientes ven del negocio.\n                    Si no tiene un buen aspecto o no causa una buena primera impresión, difícilmente \n                    entrarán y confiarán en el lugar. Es imprescindible hacer un lavado de cara cada \n                    cierto tiempo y adaptarlo a las nuevas tendencias arquitectónicas y decorativas \n                    siempre que se pueda, tanto de la puerta como del escaparate, el rótulo y las paredes\n                    exteriores.\n                </li>\n                <li>\n                    Recepción o entrada. El primer impacto que sentimos cuando accedemos a un negocio\n                    decidirá en la gran mayoría de casos que sigamos teniendo interés en él y en sus\n                    productos o no. Añada una zona de espera confortable, incluya un espacio adaptado\n                    para atender y, en general, preste atención a la primera zona de su local si quiere\n                    que aquellos que entren en él se queden.\n                </li>\n                <li>\n                    Imagen corporativa. Jugar con los colores de la marca, con sus estampados y todos\n                    los elementos que puedan relacionarse con ella es importante para que los usuarios\n                    la interioricen durante su visita a su local y la recuerden cuando salgan de él. \n                    Una buena estrategia de marketing deberá incluir la adecuación de su espacio de \n                    trabajo.\n                </li>\n            </ul>\n            </p>\n            <p>\n                En caso de que esté interesado en mejorar la imagen de su local comercial, sea grande\n                o pequeño, no dude en solicitar información sobre nuestro servicio de reformas de \n                locales en Zaragoza. Todo el equipo que conforma NZ Reformas queda a su entera \n                disposición para asesorarle de manera personalizada y llevar a cabo su proyecto con\n                la máxima profesionalidad. Llámenos ahora al +34 976 56 55 24 y solicite un presupuesto\n                sin compromiso. \n            </p>', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`id`, `name`, `slug`, `title`, `description`) VALUES
(1996, 'Comunidad de vecinos', 'comunidad-de-vecinos', 'Etiqueta de Comunidad de vecinos | NZ Reformas', 'Información acerca de las comunidades de vecinos en nuestro blog de NZ Reformas. Artículos, noticias, proyectos y más!'),
(1997, 'Zaragoza', 'zaragoza', 'Etiqueta de Artículos en Zaragoza | NZ Reformas', NULL),
(1998, 'Patios', 'patios', 'Etiqueta de Patios | NZ Reformas', NULL),
(1999, 'Rehabilitación de fachadas', 'rehabilitacion-de-fachadas', 'Etiqueta de Rehabilitación de fachadas | NZ Reformas', NULL),
(2000, 'Ascensores', 'ascensores', 'Etiqueta de Ascensores | NZ Reformas', NULL),
(2001, 'Reparación edificio', 'reparacion-edificio', 'Etiqueta de Reparación de edificios | NZ Reformas', NULL),
(2002, 'Reforma vivienda', 'reforma-vivienda', 'Etiqueta de Reformas de viviendas | NZ Reformas', NULL),
(2003, 'Reforma piso', 'reforma-piso', 'Reformas de pisos | NZ Reformas', NULL),
(2004, 'Diseño de interiores', 'diseno-de-interiores', 'Etiqueta de diseño de interiores | NZ Reformas', NULL),
(2005, 'Presupuesto de reforma', 'presupuesto-de-reforma', 'Etiqueta de Presupuesto de reformas | NZ Reformas', NULL),
(2006, 'Precio de reforma', 'precio-de-reforma', 'Etiqueta de Precio de reformas | NZ Reformas', NULL),
(2007, 'Coste de reforma', 'coste-de-reforma', 'Etiqueta de Coste de reforma | NZ Reformas', NULL),
(2008, 'Inversión en el hogar', 'inversion-en-el-hogar', 'Inversión en el hogar | NZ Reformas', 'Información sobre la inversión que realizamos en el hogar.'),
(2009, 'Reforma local comercial', 'reforma-local-comercial', 'Etiqueta de reforma de local comercial | NZ Reformas', NULL),
(2010, 'Ahorro energético', 'ahorro-energetico', 'Etiqueta de Ahorro energético | NZ Reformas', NULL),
(2011, 'Subvenciones en comunidades', 'subvenciones-en-comunidades', 'Etiqueta de Subvenciones en comunidades | NZ Reformas', NULL),
(2012, 'Impermeabilización de cubiertas', 'impermeabilizacion-de-cubiertas', 'Etiqueta de Impermeabilizaciones de cubiertas | NZ Reformas', NULL),
(2013, 'Impermeabilización de terrazas', 'impermeabilizacion-de-terrazas', 'Etiqueta de Impermeabilizaciones de terrazas | NZ Reformas', NULL),
(2014, 'Impermeabilizar', 'impermeabilizar', 'Etiqueta de Impermeabilizar | NZ Reformas', NULL),
(2015, 'Filtraciones', 'filtraciones', 'Etiqueta de Filtraciones | NZ Reformas', NULL),
(2016, 'Humedades', 'humedades', 'Etiqueta de Humedades | NZ Reformas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_articles`
--

CREATE TABLE `tags_articles` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tags_articles`
--

INSERT INTO `tags_articles` (`article_id`, `tag_id`) VALUES
(1191, 1997),
(1191, 2002),
(1191, 2005),
(1191, 2008),
(1193, 1997),
(1193, 2002),
(1193, 2003),
(1193, 2004),
(1194, 1997),
(1194, 2001),
(1194, 2012),
(1194, 2013),
(1194, 2014),
(1194, 2015),
(1194, 2016),
(1195, 1997),
(1195, 2002),
(1195, 2005),
(1195, 2008),
(1196, 1997),
(1196, 2002),
(1196, 2005),
(1196, 2008),
(1197, 1997),
(1197, 2002),
(1197, 2005),
(1197, 2008),
(1198, 1997),
(1198, 2002),
(1198, 2003),
(1198, 2004),
(1199, 1997),
(1199, 2002),
(1199, 2004),
(1199, 2005),
(1199, 2009),
(1200, 1996),
(1200, 1999),
(1200, 2001),
(1200, 2009),
(1200, 2010),
(1200, 2011),
(1201, 1997),
(1201, 2002),
(1201, 2005),
(1201, 2008),
(1202, 1996),
(1202, 1997),
(1202, 1998),
(1202, 1999),
(1202, 2000),
(1202, 2001),
(1203, 1997),
(1203, 2002),
(1203, 2004),
(1203, 2005),
(1203, 2010),
(1204, 1997),
(1204, 2002),
(1204, 2005),
(1204, 2008),
(1205, 1997),
(1205, 2002),
(1205, 2005),
(1205, 2008),
(1206, 1997),
(1206, 2002),
(1206, 2005),
(1206, 2008),
(1207, 1997),
(1207, 2004),
(1207, 2005),
(1207, 2006),
(1207, 2007),
(1207, 2008),
(1208, 2002),
(1208, 2003),
(1208, 2006),
(1208, 2008),
(1208, 2009),
(1209, 1997),
(1209, 2002),
(1209, 2005),
(1209, 2008),
(1212, 1997),
(1212, 2002),
(1212, 2004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `$username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:simple_array)',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `$username`, `roles`, `email`, `password`, `salt`, `last`) VALUES
(159, 'Admin', 'ROLE_ADMIN', 'admin@nzreformas.es', 'sWE3mbW5R5f2+lWFVwjkF7UlCSxxiK9yVDOe1ReJ1kKGkm2zLeYbhX0F56R5ZJ4K2E3ri/gp+bY8/4x1+rekjA==', 'cc0ac5c5c492c09ca42926667d934c68', '2018-08-17 12:16:00'),
(160, 'opt-media', 'ROLE_USER', 'javier.morell@opt-media.net', 'Y7FLnxTkfVbtlSHnzmeSmMaMW9SXAMpsxFaR2BMPlNHEBH0FqDw0mpvMqMHI/YVqn3mMfFcKV+MKrFXBS3zumg==', '55069d1b076e1cef9c81caffbadabb7f', '2018-08-09 08:16:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acl_classes`
--
ALTER TABLE `acl_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`);

--
-- Indices de la tabla `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  ADD KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  ADD KEY `IDX_46C8B806EA000B10` (`class_id`),
  ADD KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  ADD KEY `IDX_46C8B806DF9183C9` (`security_identity_id`);

--
-- Indices de la tabla `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  ADD KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`);

--
-- Indices de la tabla `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  ADD KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  ADD KEY `IDX_825DE299C671CEA1` (`ancestor_id`);

--
-- Indices de la tabla `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`);

--
-- Indices de la tabla `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_23A0E665E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_23A0E663DA5256D` (`image_id`),
  ADD KEY `IDX_23A0E6664C19C1` (`category`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C7294869C` (`article_id`);

--
-- Indices de la tabla `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_472B783A3DA5256D` (`image_id`),
  ADD KEY `IDX_472B783A166D1F9C` (`project_id`);

--
-- Indices de la tabla `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`gallery_id`,`image_id`),
  ADD UNIQUE KEY `UNIQ_429C52C83DA5256D` (`image_id`),
  ADD KEY `IDX_429C52C84E7AF8F` (`gallery_id`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2FB3D0EE3DA5256D` (`image_id`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags_articles`
--
ALTER TABLE `tags_articles`
  ADD PRIMARY KEY (`article_id`,`tag_id`),
  ADD KEY `IDX_D54BAD717294869C` (`article_id`),
  ADD KEY `IDX_D54BAD71BAD26311` (`tag_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acl_classes`
--
ALTER TABLE `acl_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `acl_entries`
--
ALTER TABLE `acl_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2448;

--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38475;

--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;

--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Filtros para la tabla `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E663DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_23A0E6664C19C1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `FK_472B783A166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `FK_472B783A3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Filtros para la tabla `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `FK_429C52C83DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_429C52C84E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`);

--
-- Filtros para la tabla `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_2FB3D0EE3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Filtros para la tabla `tags_articles`
--
ALTER TABLE `tags_articles`
  ADD CONSTRAINT `FK_D54BAD717294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D54BAD71BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
