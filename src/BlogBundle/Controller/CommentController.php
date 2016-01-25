<?php

// src/BlogBundle/Controller/CommentController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Comment;
use BlogBundle\Form\CommentType;

/**
 * Comment controller.
 */
class CommentController extends Controller {

    public function newAction($slug) {
        $article = $this->getArticle($slug);

        $comment = new Comment();
        $comment->setArticle($article);
        $form = $this->createForm(new CommentType(), $comment);

        return $this->render('BlogBundle:Comment:form.html.twig', array(
                    'comment' => $comment,
                    'form' => $form->createView()
        ));
    }

    public function createAction($slug) {
        $article = $this->getArticle($slug);

        $comment = new Comment();
        $comment->setArticle($article);
        $request = $this->getRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($this->getRequest());

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                    ->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('blog_article_show', array(
                        'slug' => $comment->getArticle()->getSlug())) .
                        '#' . $comment->getId()
        );
        }

         return $this->render('BlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getArticle($slug) {
        
       $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BlogBundle:Article')->findOneBy(array('slug' => $slug));

        if (!$article) {
            throw $this->createNotFoundException('No se encuentra el artículo.');
        }
        return $article;
    }

}
