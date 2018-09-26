<?php

// src/AppBundle/Controller/SitemapController.php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitemapController extends Controller {

    public function sitemapAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $urls = array();
        $hostname = $request->getHost();

        // Inicio
        $urls[] = array('loc' => $this->get('router')->generate('app_homepage'), 'changefreq' => 'weekly', 'priority' => '1.0');

        // Servicios
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'servicios')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Projects
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'proyectos')), 'changefreq' => 'weekly', 'priority' => '0.7');

        // Gallery
        foreach ($em->getRepository('AppBundle:Project')->findAll() as $project) {
            $urls[] = array('loc' => $this->get('router')->generate('app_project', array('project' => $project->getSlug())), 'priority' => '0.5');

            foreach ($em->getRepository('AppBundle:Gallery')->findBy(array('project' => $project)) as $gallery) {
                $urls[] = array('loc' => $this->get('router')->generate('app_gallery', array('project' => $gallery->getProject()->getSlug(), 'gallery' => $gallery->getSlug())), 'priority' => '0.3');
            }
        }

        // Reforma de locales
        //$urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reforma-de-locales')), 'changefreq' => 'weekly', 'priority' => '0.7');

        // Empresa
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'empresa')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Contacto
        $urls[] = array('loc' => $this->get('router')->generate('app_contact'), 'changefreq' => 'weekly', 'priority' => '0.7');

        // Pedir presupuesto
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'pedir-presupuesto')), 'changefreq' => 'weekly', 'priority' => '0.7');

        // Exposición de reformas
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'exposicion-de-reformas')), 'changefreq' => 'weekly', 'priority' => '0.8');
        /*
          // Expo --> Vivienda 1
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'vivienda-1')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Vivienda 2
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'vivienda-2')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Vivienda 3
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'vivienda-3')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Vivienda 4
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'vivienda-4')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Vivienda 5
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'vivienda-5')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Cocina escaparate
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'cocina-escaparate')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Cocina entrada
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'cocina-entrada')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Cocina TOP
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'cocina-TOP')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Cocina TOP
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'cocina-TOP')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Coleccion banos
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'coleccion-banos')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Bano TOP
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'bano-TOP')), 'changefreq' => 'weekly', 'priority' => '0.8');

          // Expo --> Expositor baldoass
          $urls[] = array('loc' => $this->get('router')->generate('app_expo', array('page' => 'expositor-baldosas')), 'changefreq' => 'weekly', 'priority' => '0.8');
         */

        //Blog
        $articles = $em->getRepository('BlogBundle:Article')->findAll();
        if ($articles) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_homepage', array('page' => 1)), 'changefreq' => 'weekly', 'priority' => '0.7');
        }

        //Categories
        foreach ($em->getRepository('BlogBundle:Category')->findAll() as $category) {
            if ($category->getArticles()) {
                $urls[] = array('loc' => $this->get('router')->generate('blog_catag_show', array('slug' => $category->getSlug(), 'page' => 1)), 'priority' => '0.6');
            }
        }

        //Tags
        foreach ($em->getRepository('BlogBundle:Tag')->findAll() as $tag) {
            if ($tag->getArticles()) {
                $urls[] = array('loc' => $this->get('router')->generate('blog_catag_show', array('slug' => $tag->getSlug(), 'page' => 1)), 'priority' => '0.6');
            }
        }

        //Articles
        foreach ($em->getRepository('BlogBundle:Article')->findAll() as $article) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_article_show', array('slug' => $article->getSlug(), 'comments' => 'false')), 'priority' => '0.5');
        }

//        // Aviso legal
//        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'aviso-legal')), 'changefreq' => 'weekly', 'priority' => '0.1');
//
//        // Política de cookies
//        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'politica-cookies')), 'changefreq' => 'weekly', 'priority' => '0.1');
//
//
//        // Política de cookies
//        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'politica-privacidad')), 'changefreq' => 'weekly', 'priority' => '0.1');
//

        return $this->render('AppBundle:Static:sitemap.xml.twig', array(
                    'urls' => $urls,
                    'hostname' => $hostname
        ));
    }

}
