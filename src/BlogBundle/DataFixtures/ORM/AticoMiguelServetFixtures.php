<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class AticoMiguelServetFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Un elegante ático en la calle Miguel Servet | NZ Reformas');
        $article->setDescription('');
        $article->setName('Un elegante ático en la calle Miguel Servet');
        $article->setArticle('<p>Queremos presentaros hoy una nueva <b>reforma en Zaragoza</b>: un ático con mucha personalidad.</p>
<p>El cliente quería un proyecto sobrio y elegante, pero sobre todo que fuera una extensión de su propia personalidad, sin olvidar, por supuesto, esa calidez que hace de un piso un auténtico hogar. Un hogar donde tuvieran cabida sus vivencias y recuerdos, sus viajes y experiencias, que se insinúan claramente a través del mobiliario y decoración: un torbellino de colores que inunda las estancias en un claro alarde de exotismo y fuerza vital. Unos muebles que tienen vida y que respiran ese toque étnico y colonial, perfectamente integrado con objetos más antiguos que hacen verdaderamente única esta vivienda.</p>
<p>La conjugación de todas estas premisas, unida a la búsqueda de un hogar práctico y funcional, han sido las claves para el desarrollo de esta <b><a href="http://www.nzreformas.es">reforma integral en Zaragoza</a></b>.</p>
<p>Como suele ser habitual, el salón se convierte en el corazón de la vivienda. Para conseguir que los muebles y elementos decorativos destacaran, se ha buscado recrear en la reforma un ambiente sin estridencias, con acabados de calidad pero que no le quitaran protagonismo a la decoración. Las paredes se han pintado en un blanco roto, al igual que el techo, que previamente se ha cubierto con un falso techo de escayola de líneas rectas y depuradas.</p>
<p>Para la carpintería exterior se ha optado por grandes ventanales para aprovechar la potente luz natural que ilumina hasta el último rincón de la casa, con la parte interna y externa en blanco, en un claro propósito de buscar el máximo mimetismo con el conjunto.</p>
<p>Una elegante puerta corredera, en lacado blanco y con molduras rectas, separa el despacho del salón. A pesar de sus grandes dimensiones, y de ser un elemento rotundo, su integración dentro del tabique disimula su presencia cuando está abierta.</p>
<p>Lamas anchas en noble madera recubren el suelo de este ático. Para conseguir aportar ligereza al conjunto y no recargarlo visualmente, se ha elegido un tono claro para la tarima flotante, de gran resistencia al desgaste y tratada para conferirle ese aspecto de viejo que tan bien conjuga con el ambiente recreado.</p>
<p>Las puertas de paso interiores se han lacado también en blanco, y se han integrado en los dormitorios los armarios empotrados, con puertas correderas también en el mismo color que aprovechan el espacio y le dan todo el protagonismo a la decoración.</p>
<p>Mención aparte requiere el fabuloso vestidor, el sueño de todas las mujeres. Se instalaron baldas y colgadores para adecuar el espacio y aprovecharlo al máximo. La tarima flotante presente en el resto del piso se instaló también en el suelo del vestidor, y se instalaron halógenos en el techo para dotarlo de la máxima claridad.</p>
<p>Para los baños se ha recreado en suelo y paredes un revestimiento en imitación estucado veneciano. Se ha montado en ambos un plato de ducha imitación pizarra, habilitando una mampara corredera que aprovecha el espacio y facilita la entrada.</p>
<p>La cocina se ha revestido con un tipo de tarima resistente para estos ambientes, a la que se le ha aplicado un tratamiento superficial que evita el deterioro derivado de las salpicaduras y del propio uso en estas estancias. Con un mobiliario lacado en blanco y una encimera del mismo color, la única concesión se hace con la vitrocerámica, en negro, y con la nevera y columna de horno, en acero inoxidable.</p>
<p>Una reforma integral en Zaragoza que respira por los cuatro costados la personalidad de sus habitantes, y que consigue traspasar los pixeles de la pantalla de tu ordenador para conmover el gusto de los más sibaritas.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('reforma-atico-zaragoza.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('elegante-atico-zaragoza');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
         $article->setCreated(new \DateTime('2017-03-21 14:23:45'));
        $article->setUpdated(new \DateTime('2017-03-21 14:23:45'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
