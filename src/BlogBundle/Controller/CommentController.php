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

    public function newAction($article_id) {
        $article = $this->getArticle($article_id);

        $comment = new Comment();
        $comment->setArticle($article);
        $form = $this->createForm(new CommentType(), $comment);

        return $this->render('BlogBundle:Comment:form.html.twig', array(
                    'comment' => $comment,
                    'form' => $form->createView()
        ));
    }

    public function createAction($article_id) {
        $article = $this->getArticle($article_id);

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

            return $this->redirect($this->generateUrl('BlogBundle_article_show', array(
                        'slug' => $comment->getArticle()->getSlug())) .
                        '#comment-' . $comment->getId()
        );
        }

         return $this->render('BlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getArticle($article_id) {
        $em = $this->getDoctrine()
                ->getManager();

        $article = $em->getRepository('BlogBundle:Article')->find($article_id);

        if (!$article) {
            throw $this->createNotFoundException('No se encuentra el post.');
        }

        return $article;
    }

}
