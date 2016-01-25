<?php

// src/BlogBundle/Controller/CategoryController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;

class CatagController extends Controller {

    public function showAction($slug, $page) {

        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('BlogBundle:Category')->findOneBySlug($slug);

        $tag = $em->getRepository('BlogBundle:Tag')->findOneBySlug($slug);

        if (!$tag) {
            $catag = $category;
            $articles = $em->getRepository('BlogBundle:Article')->getArticlesForCategory($catag, $page);
        } else {
            $catag = $tag;
            $articles = $em->getRepository('BlogBundle:Article')->getArticlesForTag($catag, $page);
        }
        $paginador = new Paginador($articles['total_pages'], $articles['current_page']);

        return $this->render('BlogBundle:Blog:catag.html.twig', array(
                    'articles' => $articles['paginated'],
                    'catag' => $catag,
                    'paginador' => $paginador));
    }

}
