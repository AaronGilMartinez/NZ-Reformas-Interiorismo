<?php

// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Importa el nuevo espacio de nombres
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()
                ->getManager();

        $blogs = $em->getRepository('BlogBundle:Blog')
                ->getLatestBlogs();

        return $this->render('BlogBundle:Page:index.html.twig', array(
                    'blogs' => $blogs
        ));
    }

    public function contactAction() {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                $message = \Swift_Message::newInstance()
                        ->setSubject('Formulario de consulta de nzreformas.es')
                        ->setFrom('enquiries@symblog.co.uk')
                        ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                        ->setBody($this->renderView('BlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('blogger-notice', 'Tu consulta ha sido enviada exitosamente. Gracias!');

                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                return $this->redirect($this->generateUrl('BlogBundle_contact'));
            }
        }

        return $this->render('BlogBundle:Page:contact.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function sidebarAction() {
        $em = $this->getDoctrine()
                ->getManager();

        $tags = $em->getRepository('BlogBundle:Blog')
                ->getTags();

        $tagWeights = $em->getRepository('BlogBundle:Blog')
                ->getTagWeights($tags);

        $commentLimit = $this->container
                ->getParameter('blogger_blog.comments.latest_comment_limit');
        $latestComments = $em->getRepository('BlogBundle:Comment')
                ->getLatestComments($commentLimit);

        return $this->render('BlogBundle:Page:sidebar.html.twig', array(
                    'latestComments' => $latestComments,
                    'tags' => $tagWeights
        ));
    }

}
