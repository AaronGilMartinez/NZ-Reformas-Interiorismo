<?php

// src/BlogBundle/Controller/Tag
// Controller.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;

class TagController extends Controller {

    public function showAction($slug, $page) {
        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('BlogBundle:Tag')->findOneBy(array('slug' => $slug));

        if (!$tag) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta.');
        } else {

            $articles = $em->getRepository('BlogBundle:Article')->getArticlesForTag($tag, $page);

            if ($articles) {

                $paginador = new Paginador($articles['total_pages'], $articles['current_page']);

                return $this->render('BlogBundle:Blog:tag.html.twig', array(
                            'articles' => $articles['paginated'],
                            'tag' => $tag,
                            'paginador' => $paginador
                ));
            } else {
                throw $this->createNotFoundException('No se ha encontrado la etiqueta.');
            }
        }
    }

}
