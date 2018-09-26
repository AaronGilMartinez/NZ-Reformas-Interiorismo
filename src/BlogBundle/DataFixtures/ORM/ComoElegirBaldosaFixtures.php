<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;
use AppBundle\Entity\Image;

class ComoElegirBaldosaFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article = new Article();
        $article->setTitle('Consejos para elegir baldosa | NZ Reformas');
        $article->setDescription('');
        $article->setName('Consejos para elegir baldosa');
        $article->setArticle('
            <p>¡Hola a todos! Hoy vamos a hablar de un tema muy importante en el mundo de las reformas,
            que todos desconocemos hasta que tenemos que reformar el baño o la cocina, hablo nada más
            y nada menos que de la baldosa. En este artículo vamos a repasar los tipos de baldosa más
            importantes, y también daremos algunos consejos sobre la elección de baldosas que hemos 
            aprendido con el tiempo. Todo lo que sigue a partir de aquí forma parte de nuestra opinión,
            y las opiniones son como los culos, todos tenemos el nuestro y todos huelen mal, pero si
            ves algo incorrecto o te gustaría dejar tu opinión estamos abiertos a cualquier sugerencia.</p>
                         
            <p>Lo primero de todo es conocer los atributos de las baldosas, que además enriquecer nuestro 
            lenguaje esto nos ayudará a diferenciar los tipos de baldosa. Estos no son todos las 
            propiedades de las baldosas, y además se pueden organizar en torno a otros factores, aquí
            solo citaremos los que nos serán útiles.</p>
            <ul class="default" >
                <li>
                    <b>Formato</b>: son las medidas de la baldosa, ancho y alto. Este es uno de los atributos 
                    más importantes pues afecta al precio de las baldosas, su aspecto estético y
                    colocación.
                </li>
                <li>
                    <b>Canto</b>: tenemos tres tipos de cantos el "normal", el biselado y el rectificado.
                    El primero es el más común el borde es redondeado de manera que suaviza la transición
                    entre baldosas. El canto biselado tiene un corte a modo de chaflán de modo que los
                    bordes están muy marcados. En las baldosas rectificadas encontramos un canto de
                    ángulo recto que aporta continuidad en la superficie. El canto no solo afecta a 
                    la parte estética de la baldosa, también a su colocación.
                </li>
                <li>
                    <b>Material</b>: existen baldosas de multitud materiales, A nosotros realmente nos
                    interesan las baldosas cerámicas, en concreto pasta blanca, pasta roja y porcelanato.
                </li>
                <li>
                    <b>Acabado</b>: básicamente es el aspecto de la baldosa, color, dibujo, brillo y relieve, 
                    algunas veces es el acabado del material propio, y otras imitan otro.
                    Para nosotros este es el aspecto más importante, te tiene que gustar la baldosa,
                    se pueden encontrar baldosas con distintos materiales y aspecto muy similar.
                </li>
                <li>
                    <b>Resistencia</b>: aunque este atributo podría dividirse en varios hemos decidido
                    unificarlos para no aburrir con aspectos técnicos. Entre las cualidades más importantes 
                    se encuentran la resistencia al frio y al calor, dureza, grado absorción del agua, 
                    resistencia a agentes químicos y al fuego. Además de los factores anteriores se 
                    ve implicado de manera indirecta el mantenimiento de la baldosa.
                </li>
                <li>
                    <b>Adherencia o resistencia al deslizamiento</b>: hemos separado este atributo de
                    la resistencia dada su importancia. La baldosa adecuada a nuestro proyecto dependerá
                    en gran medida de este factor.
                </li>
                <li>
                    <b>Precio</b>: aquí tenemos el factor más conocido por todos, todo el mundo lo tiene en 
                    cuenta a la hora de elegir baldosa. Para nosotros invertir en una baldosa de calidad
                    es un acierto.
                </li>
            </ul>
            <p>Como conclusión de los atributos vistos, tenemos el formato, el acabado y el precio como
            los más importantes para los clientes. Vale una vez citados los atributos que posee la baldosa,
            veremos los dos grandes grupos, sobre todo nos vamos a centrar en baldosa cerámica, ya 
            que es lo más común:</p> 
            <ul class="default" >
                <li>
                    <b>Gres esmaltado</b>: aquí podemos encontrar dos tipos de baldosa, pasta blanca 
                    y pasta roja. Ambas son baldosas de arcilla esmaltada, y básicamente se diferencian
                    por el color de las arcillas que las componen, con mirar la zona posterior de la
                    baldosa se pueden diferenciar. La ventaja de la pasta roja es su reducido precio,
                    y la pasta blanca ofrece una mayor resistencia.
                </li>
                <li>
                    Gres porcelánico: son baldosas hechas a partir de arcillas y feldespatos, en 
                    algunos casos también se añaden colorantes. Se cuece una pasta hecha con dichos 
                    materiales, y posteriormente se pule hasta alcanzar el acabado deseado. Este
                    tipo de baldosas tiene muy poca absorción de agua y son muy resistentes, por lo 
                    que son ideales para exteriores y algunas zonas de la casa.
                    </li>
            </ul>
            <p>Parece que ya tenemos un montón de datos pero todavía no sabemos qué baldosa necesitamos,
            vale, vamos por pasos:</p>
            <ol class="default" >
                <li><b>¿Suelo o pared?</b>, aunque en paredes no se vea tanto, si que se utiliza en baños, cocinas
                , y locales comerciales. Dependiendo si se utiliza en suelos nos hará falta una baldosa 
                más resistente, y algunos formatos quedan mejor en paredes. ¿Y si necesito una 
                baldosa para suelo y paredes? Nuestra recomendación es utilizar baldosas distintas, de 
                esta manera podemos jugar con el diseño, y romper la monotonía del espacio. Para las paredes
                está bien el gres esmaltado de pasta roja. Con los suelos hay que tener más cuidado 
                y lo veremos ahora.</li>
            
                <li>En el caso de que la baldosa sea para suelo <b>¿esta zona va a tener mucho transito?</b> no 
                es lo mismo el suelo de una tienda, que el baño de nuestra casa. En casos de mucho transito
                recomendamos gres porcelánico dado que nos hará falta una baldosa más resistente, como
                mucho utilizaremos pasta blanca si se tiene un presupuesto más reducido. En los atributos
                de las baldosas hablamos de que la adherencia era muy importante, cuidado con las baldosas
                anti-deslizantes, solo son recomendables en zonas dónde hace falta mucho agarre, como
                en las zonas con piscina. Este tipo de baldosas no la recomendamos en viviendas, parece
                una tontería pero fregar el suelo de un baño con baldosa anti-deslizante puede ser una
                tarea titánica.</li>

                <li><b>Exposición a los elementos</b>, si se va a colocar en una zona con agua, cambios de 
                temperatura, o exposición al sol, hace falta una baldosa más resistente, en estos 
                casos también se recomienda gres porcelánico.</li>
                
                <li>El <b>acabado</b>, para gustos colores, y lo mejor es buscar las baldosas que nos 
                atraigan, pues la veremos durante mucho tiempo, pero hay que tener en cuenta unos cuantos
                detalles a la hora de elegir baldosa.</li>
                <ul class="default" >
                    <li>Importante no mezclar tonos fríos con cálidos, como marrones y grises.</li>
                    <li>También hay que  tener cuidado con los tonos de baldosa muy oscuros, pues si
                    utilizamos una baldosa muy oscura en una zona amplia absorberá toda la luz, y por
                    eso es mejor utilizarla en suelos, si puede ser zona pequeñas.</li>
                    <li>Lo mismo va para tonos muy vivos, los colores vivos y brillantes cansan enseguida
                    , los colores vivos en pequeñas dosis, yo evitaría cualquier color muy fuerte.</li>
                </ul>
                </li>
            </ol>
            <p>Vamos ver algunos ejemplos de combinación de baldosas</p>
            <p>Un ejemplo de un <b>baño</b> con dos baldosas sería: <br>
            Una baldosa cuadrada en suelo de tono oscuro, y en paredes un tono claro con formato 
            rectangular, incluso podríamos añadir otra baldosa en el frente de la ducha con un patrón
            llamativo o un relieve, y de esta manera nos olvidamos de cenefas.</p>
            <img src="/bundles/app/images/proyectos/reformas-de-banos/reforma-bano-almagro/bano-1-despues.jpg" alt="Baño con tres baldosas" title="Baño con tres baldosas">
            <p>Otro ejemplo pero con <b>cocina</b> podría ser:<br>
            Baldosa cuadrada gris medio/oscuro en suelo, y en paredes baldosa blanca rectangular hasta
            media altura rematada con un perfil metálico. Con esta combinación de baldosas ahorramos
            dinero, es más barato hacer media altura y además en blanco, de esta manera podemos hacer
            resaltar otro elemento de la cocina como los muebles.</p>
            <p>Un ejemplo en <b>locales</b> podría ser:<br>
            Gres porcelánico imitación madera, tiene las cualidades del gres (alta resistencia) y el
            aspecto de la madera, esta baldosa se podría sacar mucho provecho aquí.</p>
            <p>Para cualquier duda o consulta puedes ponerte en contacto con nosotros a través del 
            <strong>976 56 55 24</strong> , o si prefieres enviar un e-mail a <strong> info@nzreformas.es</strong>
            , desde la <a href="www.nzreformas.es" > página de contacto</a> o venir a nuestra 
            <a target="_blank" href="https://www.google.com/maps/place/Exposici%C3%B3n+de+reformas+en+Zaragoza/@41.673397,-0.9515177,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x176c9b4f4dfbc9ea!8m2!3d41.673397!4d-0.949329?hl=es" >
             exposición de reformas en el Polígono el Portazgo</a> , junto a la rotonda de Pikolín.</p>');
        $imagen = new Image();
        $imagen->setPath('bundles/blog/images/articles/');
        $imagen->setFile('consejos-para-elegir-baldosa.jpg');
        $imagen->setTitle($article->getName());
        $imagen->setAlt($article->getName());
        $article->setImage($imagen);
        $article->setSlug('consejos-para-elegir-baldosa');
        $article->setCategory($this->getReference('reformas'));
        $article->addTag($this->getReference('reforma-vivienda'));
        $article->addTag($this->getReference('presupuesto-de-reforma'));
        $article->addTag($this->getReference('inversion-en-el-hogar'));
        $article->addTag($this->getReference('zaragoza'));
        $article->setCreated(new \DateTime('2017-09-07 15:54:10'));
        $article->setUpdated(new \DateTime('2017-09-07 15:54:10'));

        $manager->persist($article);

        $manager->flush();
    }

    public function getOrder() {
        return 3;
    }

}
