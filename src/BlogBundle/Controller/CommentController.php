<?php

// src/BlogBundle/Controller/CommentController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $form = $this->createForm(CommentType::class, $comment);

        return $this->render('BlogBundle:Comment:form.html.twig', array(
                    'comment' => $comment,
                    'form' => $form->createView()
        ));
    }

    public function createAction(Request $request, $slug) {
        $article = $this->getArticle($slug);

        $comment = new Comment();
        $comment->setArticle($article);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            $message = \Swift_Message::newInstance()
                    ->setSubject('Comentario nuevo en www.nzreformas.es')
                    ->setFrom("admin@nzreformas.es")
                    ->setTo("admin@nzreformas.es")
                    ->setBody($this->renderView('BlogBundle:Comment:commentEmail.txt.twig', array('comment' => $comment)));

            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('blog_article_show', array(
                                'slug' => $slug)) . '#' . $comment->getId());
        }

        return $this->redirect($this->generateUrl('blog_article_show', array('slug' => $slug)));
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
