<?php

// src/AppBundle/Controller/PageController.php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {

    public function inicioAction() {
        $em = $this->getDoctrine()->getManager();

        // Projects
        $projects = $em->getRepository('AppBundle:Project')->findAll();

        // Galleries
        $galleries = $em->getRepository('AppBundle:Gallery')->getGalleriesOrderedByDate(5);

        // Category
        $categories = $em->getRepository('BlogBundle:Category')->findAll();

        // Article
        $articles = $em->getRepository('BlogBundle:Article')->getArticlesOrderedByDate(5);

        // Enquiries
        $enquiries = $em->getRepository('AppBundle:Enquiry')->getEnquiriesOrderedByDate(5);


        $response = $this->render('BackendBundle::home.html.twig', array(
            'projects' => $projects,
            'galleries' => $galleries,
            'categories' => $categories,
            'articles' => $articles,
            'enquiries' => $enquiries
        ));

        return $response;
    }

}
