<?php

// src/AppBundle/Controller/SitemapController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitemapController extends Controller {

    public function sitemapAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // Inicio
        $urls[] = array('loc' => $this->get('router')->generate('app_homepage'), 'changefreq' => 'weekly', 'priority' => '1.0');

        // Servicios
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'servicios')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Projects
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'proyectos')), 'changefreq' => 'weekly', 'priority' => '7.0');

        // Gallery
        foreach ($em->getRepository('AppBundle:Project')->findAll() as $project) {
            $urls[] = array('loc' => $this->get('router')->generate('app_project', array('project' => $project->getSlug())), 'priority' => '0.5');

            foreach ($em->getRepository('AppBundle:Gallery')->findAll() as $gallery) {
                $urls[] = array('loc' => $this->get('router')->generate('app_gallery', array('project' => $gallery->getProject()->getSlug(), 'gallery' => $gallery->getSlug())), 'priority' => '0.3');
            }
        }

        // Empresa
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'empresa')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Contacto
        $urls[] = array('loc' => $this->get('router')->generate('app_contact'), 'changefreq' => 'weekly', 'priority' => '0.7');
        
        //Blog
        $urls[] = array('loc' => $this->get('router')->generate('blog_homepage', array('page' => '1')), 'changefreq' => 'weekly', 'priority' => '7.0');

        //Categories
        foreach ($em->getRepository('BlogBundle:Category')->findAll() as $category) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_catag_show', array('slug' => $category->getSlug(),'page' => '1')), 'priority' => '0.6');
        }
        //Tags
        foreach ($em->getRepository('BlogBundle:Tag')->findAll() as $tag) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_catag_show', array('slug' => $tag->getSlug(),'page' => '1' )), 'priority' => '0.6');
        }
        
        //Articles
        foreach ($em->getRepository('BlogBundle:Article')->findAll() as $article) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_article_show', array('slug' => $article->getSlug(), 'comments' => 'false')), 'priority' => '0.5');
        }
        
        // Aviso legal
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'aviso-legal')), 'changefreq' => 'weekly', 'priority' => '0.1');
       
          // Política de cookies
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'politica-cookies')), 'changefreq' => 'weekly', 'priority' => '0.1');
       

        return $this->render('AppBundle:Static:sitemap.xml.twig', array(
                    'urls' => $urls,
                    'hostname' => $hostname
        ));
    }

}
