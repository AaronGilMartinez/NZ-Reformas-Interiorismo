<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class sidebarController extends Controller {

    public function showAction() {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('BlogBundle:Tag')->findAll();

        $categories = $em->getRepository('BlogBundle:Category')->findAll(array('id' => 'ASC'));

        $articles = $em->getRepository('BlogBundle:Article')->getArticlesOrderedByDate();

        $commentLimit = $this->container->getParameter('blog.comments.latest_comment_limit');

        $latestComments = $em->getRepository('BlogBundle:Comment')->getLatestComments($commentLimit);

        return $this->render('BlogBundle:Layout:sidebar.html.twig', array(
                    'tags' => $tags,
                    'categories' => $categories,
                    'latestComments' => $latestComments,
                    'articles' => $articles
        ));
    }

}
