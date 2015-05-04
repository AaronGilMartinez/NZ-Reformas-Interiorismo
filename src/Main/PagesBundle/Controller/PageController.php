<?php

// src/Main/PagesController/Controller/PageController.php

namespace Main\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\PagesBundle\Entity\Enquiry;
use Main\PagesBundle\Form\EnquiryType;

class PageController extends Controller {

    public function homeAction() {
        return $this->render('MainPagesBundle:Default:home.html.twig');
    }

    public function staticAction($page) {
        if (strcmp($page, "contacto") == 0) {

            $enquiry = new Enquiry();
            $form = $this->createForm(new EnquiryType(), $enquiry);

            return $this->render('MainPagesBundle:Default:contacto.html.twig', array(
                        'form' => $form->createView()
            ));
        } else {
            return $this->render('MainPagesBundle:Default:' . $page . '.html.twig', array(
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
                        ->setTo(array("admin@nzreformas.es", "since1991a@gmail.com", "since-1991a@hotmail.com"))//$this->container->getParameter('main_pages.emails.contact_email'))
                        ->setBody($this->renderView('MainPagesBundle:Default:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('msg', 'Su consulta se ha envaido exitosamente. Gracias por ponerse en contacto con nosotros.');

                return $this->redirect($this->generateUrl('Main_pages_contact'));
            }

            return $this->render('MainPagesBundle:Default:contacto.html.twig', array(
                        'form' => $form->createView()
            ));
        }
    }

}
