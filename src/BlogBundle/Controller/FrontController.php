<?php

// src/BlogBundle/Controller/FrontController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;

// Importa el nuevo espacio de nombres

class FrontController extends Controller {

    public function indexAction($page=1) {
        $em = $this->getDoctrine()
                ->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->getLatestArticles($page,5);
        
        $paginador = new Paginador($articles['total_pages'], $articles['current_page']);
        
        return $this->render('BlogBundle:Layout:index.html.twig', array(
                    'articles' => $articles['paginated'],
                    'paginador' => $paginador,
                    
        ));
    }

}
