<?php

// src/AppBundle/Controller/PageController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;

class PageController extends Controller {

    public function menuAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('AppBundle:Project')->findAll();

        $response = $this->render('AppBundle::menu.html.twig', array(
            'projects' => $projects
        ));

        return $response;
    }

    public function footerAction(Request $request, $contact = false) {

        $enquiry = new Enquiry();
        $form = $this->createForm(EnquiryType::class, $enquiry);

        $response = $this->render('AppBundle::footer.html.twig', array(
            'form' => $form->createView(),
            'contacto' => $contact
        ));

        return $response;
    }

    public function inicioAction(Request $request) {

        $response = $this->render('AppBundle:Static:inicio.html.twig');

        return $response;
    }

    public function staticAction(Request $request, $page) {

        if (strcmp($page, "proyectos") == 0) {
            $em = $this->getDoctrine()->getManager();
            $projects = $em->getRepository('AppBundle:Project')->findAll();
            $response = $this->render('AppBundle:Static:proyectos.html.twig', array('projects' => $projects));
        } elseif (strcmp($page, "oferta") == 0) {
            $enquiry = new Enquiry();
            $form = $this->createForm(EnquiryType::class, $enquiry);

            $response = $this->render('AppBundle:Static:oferta.html.twig', array(
                'form' => $form->createView()));
        } elseif (strcmp($page, "contacta-con-nosotros") == 0 || strcmp($page, "pedir-presupuesto") == 0) {
            $enquiry = new Enquiry();
            $form = $this->createForm(EnquiryType::class, $enquiry);

            $response = $this->render('AppBundle:Static:' . $page . '.html.twig', array(
                'form' => $form->createView()));
        } else {
            if ($this->get('templating')->exists('AppBundle:Static:' . $page . '.html.twig')) {
                $response = $this->render('AppBundle:Static:' . $page . '.html.twig');
            } else {
                throw $this->createNotFoundException('No se ha encontrado la página.');
            }
        }

        return $response;
    }

    public function expoAction(Request $request, $page) {
        return $this->render('AppBundle:Static/expo:' . $page . '.html.twig')->setCharset('UTF-8');
    }

    public function projectAction(Request $request, $project) {

        $em = $this->getDoctrine()->getManager();

        $projectBySlug = $em->getRepository('AppBundle:Project')->findOneBySlug($project);

        if ($projectBySlug) {
            $galleriesByDate = $em->getRepository('AppBundle:Gallery')->getGalleriesFromProjectByDate($projectBySlug);

            if (!$galleriesByDate) {
                $galleriesByDate = $projectBySlug->getGalleries();
            }

            $response = $this->render('AppBundle:Static:proyecto.html.twig', array(
                'project' => $projectBySlug,
                'orderedGalleries' => $galleriesByDate));

            return $response;
        } else {
            throw $this->createNotFoundException('No se ha encontrado la página.');
        }
    }

    public function galleryAction(Request $request, $gallery) {

        $em = $this->getDoctrine()->getManager();

        $galleryBySlug = $em->getRepository('AppBundle:Gallery')->findOneBySlug($gallery);

        if ($galleryBySlug) {
            $response = $this->render('AppBundle:Static:galeria.html.twig', array(
                'gallery' => $galleryBySlug));

            return $response;
        } else {
            throw $this->createNotFoundException('No se ha encontrado la página.');
        }
    }

    public function contactAction(Request $request) {
        $enquiry = new Enquiry();
        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                $enquiry->setUrl($request->getUri());
                $message = \Swift_Message::newInstance()
                        ->setSubject('Formulario de contacto de www.nzreformas.es')
                        ->setFrom($enquiry->getEmail())
                        ->setTo("presupuestos@nzreformas.es")
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

    public function backAction(Request $request) {
        $previousUrl = $request->getReferer();

        return $this->redirect($previousUrl);
    }

}
