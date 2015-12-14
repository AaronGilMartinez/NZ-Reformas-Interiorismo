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

        return $this->render('AppBundle::menu.html.twig', array(
                    'projects' => $projects
        ));
    }

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
        } elseif (strcmp($page, "proyectos") == 0) {

            $em = $this->getDoctrine()->getManager();

            $projects = $em->getRepository('AppBundle:Project')->findAll();

            return $this->render('AppBundle:Static:proyectos.html.twig', array(
                        'projects' => $projects
            ));
        } else {
            return $this->render('AppBundle:Static:' . $page . '.html.twig', array(
                        'page' => $page,
            ));
        }
    }

    public function projectAction($project) {

        $em = $this->getDoctrine()->getManager();

        $projectBySlug = $em->getRepository('AppBundle:Project')->findOneBySlug($project);

        if ($projectBySlug) {

            return $this->render('AppBundle:Static:proyecto.html.twig', array(
                        'project' => $projectBySlug,
            ));
        }
    }

    public function galleryAction($gallery) {

        $em = $this->getDoctrine()->getManager();

        $galleryBySlug = $em->getRepository('AppBundle:gallery')->findOneBySlug($gallery);

        if ($galleryBySlug) {

            return $this->render('AppBundle:Static:galeria.html.twig', array(
                        'gallery' => $galleryBySlug,
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
                        ->setFrom($enquiry->getEmail())
                        ->setTo(array("admin@nzreformas.es"))
                        ->setBody($this->renderView('AppBundle:Static:contactEmail.txt.twig', array('enquiry' => $enquiry)));

                $this->get('mailer')->send($message);

                $em = $this->getDoctrine()->getManager();
                $em->persist($enquiry);
                $em->flush();

                return $this->redirect($this->generateUrl('app_static', array('page' => 'gracias')));
            }

            return $this->render('AppBundle:Static:contacto.html.twig', array(
                        'form' => $form->createView()
            ));
        }
    }

}
