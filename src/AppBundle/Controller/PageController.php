<?php

// src/AppBundle/Controller/PageController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;

class PageController extends Controller {

    public function menuAction() {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('AppBundle:Project')->findAll();

        $response = $this->render('AppBundle::menu.html.twig', array(
            'projects' => $projects
        ));

        return $response;
    }

    public function footerAction() {

        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $response = $this->render('AppBundle::footer.html.twig', array(
                    'form' => $form->createView()
        ));

        return $response;
    }

    public function inicioAction() {

        $response = $this->render('AppBundle:Static:inicio.html.twig');

        return $response;
    }

    public function staticAction($page) {

        if (strcmp($page, "proyectos") == 0) {

            $em = $this->getDoctrine()->getManager();

            $projects = $em->getRepository('AppBundle:Project')->findAll();

            $response = $this->render('AppBundle:Static:proyectos.html.twig', array(
                'projects' => $projects));
        } elseif (strcmp($page, "contacto") == 0) {

            $enquiry = new Enquiry();
            $form = $this->createForm(new EnquiryType(), $enquiry);

            $response = $this->render('AppBundle:Static:contacto.html.twig', array(
                'form' => $form->createView()));
        } else {

            $response = $this->render('AppBundle:Static:' . $page . '.html.twig');
        }

        return $response;
    }

    public function projectAction($project) {

        $em = $this->getDoctrine()->getManager();

        $projectBySlug = $em->getRepository('AppBundle:Project')->findOneBySlug($project);

        if ($projectBySlug) {

            $response = $this->render('AppBundle:Static:proyecto.html.twig', array(
                'project' => $projectBySlug));

            return $response;
        }
    }

    public function galleryAction($gallery) {

        $em = $this->getDoctrine()->getManager();

        $galleryBySlug = $em->getRepository('AppBundle:Gallery')->findOneBySlug($gallery);

        if ($galleryBySlug) {

            $response = $this->render('AppBundle:Static:galeria.html.twig', array(
                'gallery' => $galleryBySlug));

            return $response;
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
                        ->setFrom($enquiry->getEmail())
                        ->setTo("info@nzreformas.es")
                        ->setCc("admin@nzreformas.es")
                        ->setBody($this->renderView('AppBundle:Static:contactEmail.txt.twig', array('enquiry' => $enquiry)));

                $this->get('mailer')->send($message);

                $em = $this->getDoctrine()->getManager();
                $em->persist($enquiry);
                $em->flush();

                return $this->redirect($this->generateUrl('app_static', array('page' => 'gracias')));
            }

            return $this->redirect($request->headers->get('referer'));
        }
    }

}
