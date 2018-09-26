<?php
// src/BlogBundle/Controller/ArticleController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller {

    /**
     * Muestra un artículo del blog
     */
    public function showAction($slug, $comments) {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('BlogBundle:Article')->findOneBy(array('slug' => $slug));

        if (!$article) {
            throw $this->createNotFoundException('No se ha encontrado el artículo.');
        } else {

            $tags = $article->getTags();
            
            $category = $article->getCategory();

            $comments = $em->getRepository('BlogBundle:Comment')->getCommentsForArticle($article->getId());

            return $this->render('BlogBundle:Blog:article.html.twig', array(
                        'article' => $article,
                        'comments' => $comments,
                        'category' => $category,
                        'tags' => $tags
            ));
        }
    }

}
