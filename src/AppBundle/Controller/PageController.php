<?php

// src/AppBundle/Controller/PageController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;

class PageController extends Controller {

    public function inicioAction() {
        return $this->render('AppBundle:Static:inicio.html.twig');
    }

    public function staticAction($page) {
        if (strcmp($page, "contacto") == 0) {

            $enquiry = new Enquiry();
            $form = $this->createForm(new EnquiryType(), $enquiry);

            return $this->render('AppBundle:Static:contacto.html.twig', array(
                        'form' => $form->createView()
            ));
        } else {
            return $this->render('AppBundle:Static:' . $page . '.html.twig', array(
                        'page' => $page
            ));
        }
    }

    public function contactAction() {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                        ->setSubject('Formulario de contacto de www.nzreformas.es')
                        ->setFrom("admin@nzreformas.es")
                        ->setTo(array("admin@nzreformas.es", "since1991a@gmail.com", "since-1991a@hotmail.com"))//$this->container->getParameter('pages.emails.contact_email'))
                        ->setBody($this->renderView('AppBundle:Static:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('msg', 'Su consulta se ha envaido exitosamente. Gracias por ponerse en contacto con nosotros.');

                return $this->redirect($this->generateUrl('Contact'));
            }

            return $this->render('AppBundle:Static:contacto.html.twig', array(
                        'form' => $form->createView()
            ));
        }
    }

    public function sitemapAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // Homepage
        $urls[] = array('loc' => $this->get('router')->generate('inicio'), 'changefreq' => 'weekly', 'priority' => '1.0');

        // Contact
        $urls[] = array('loc' => $this->get('router')->generate('contacto'), 'changefreq' => 'weekly', 'priority' => '9.0');

        // Company
        $urls[] = array('loc' => $this->get('router')->generate('empresa'), 'changefreq' => 'weekly', 'priority' => '7.0');

        // Frontpage Blog
        $urls[] = array('loc' => $this->get('router')->generate('portada_blog'), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Categories
        foreach ($em->getRepository('BlogBundle:Category')->findAll() as $category) {
            $urls[] = array('loc' => $this->get('router')->generate('categoría', array('categorySlug' => $category->getSlug())), 'priority' => '0.6');
        }

        // Tags
        foreach ($em->getRepository('BlogBundle:Tag')->findAll() as $tag) {
            $urls[] = array('loc' => $this->get('router')->generate('etiqueta', array('tagSlug' => $tag->getSlug())), 'priority' => '0.6');
        }

        // Blogs
        foreach ($em->getRepository('BlogBundle:Blog')->findAll() as $blog) {
            $urls[] = array('loc' => $this->get('router')->generate('blog', array('blogSlug' => $blog->getSlug())), 'priority' => '0.5');
        }

        return $this->render('AppBundle::sitemap.xml.twig', array(
                    'urls' => $urls,
                    'hostname' => $hostname
        ));
    }

}
