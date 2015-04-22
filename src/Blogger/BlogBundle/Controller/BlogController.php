<?php

// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controlador del Blog.
 */
class BlogController extends Controller {

    /**
     * Muestra una entrada del blog
     */
    public function showAction($slug, $comments) {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BlogBundle:Blog')->findOneBy(array('slug' => $slug));

        if (!$blog) {
            throw $this->createNotFoundException('No se ha encontrado el post.');
        }
        $comments = $em->getRepository('BlogBundle:Comment')
                ->getCommentsForBlog($blog->getId());

        return $this->render('BlogBundle:Blog:show.html.twig', array(
                    'blog' => $blog,
                    'comments' => $comments
        ));
    }

}
