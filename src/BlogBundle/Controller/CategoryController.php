<?php
// src/BlogBundle/Controller/CategoryController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;

class CategoryController extends Controller {

    public function showAction($slug, $page) {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('BlogBundle:Category')->findOneBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('No se ha encontrado la categoría.');
        } else {

            $articles = $em->getRepository('BlogBundle:Article')->getArticlesForCategory($category, $page);

            $paginador = new Paginador($articles['total_pages'], $articles['current_page']);

            return $this->render('BlogBundle:Blog:category.html.twig', array(
                        'articles' => $articles['paginated'],
                        'category' => $category,
                        'paginador' => $paginador
            ));
        }
    }

}
