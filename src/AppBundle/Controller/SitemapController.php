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

        // Reformas en comunidades
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reformas-de-comunidades-en-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Impermeabilizaciones
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'impermeabilizaciones-en-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Rehabilitacion de fachadas
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'rehabilitacion-de-fachadas-en-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Reformas de pisos
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reformas-pisos-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Reformas de baños
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reformas-de-banos-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Reformas de cocinas
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reformas-de-cocinas-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Reformas integrales
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'reformas-integrales-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Projects
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'proyectos')), 'changefreq' => 'weekly', 'priority' => '7.0');

        // Gallery
        foreach ($em->getRepository('AppBundle:Project')->findAll() as $project) {
            $urls[] = array('loc' => $this->get('router')->generate('app_project', array('project' => $project->getSlug())), 'priority' => '0.5');
            
            foreach ($em->getRepository('AppBundle:Gallery')->findAll() as $gallery) {
                $urls[] = array('loc' => $this->get('router')->generate('app_gallery', array('project' => $gallery->getProject()->getSlug(),'gallery' => $gallery->getSlug())), 'priority' => '0.3');
            }
        }
        
        // Empresa
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'empresa-de-reformas-en-zaragoza')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Contacto
        $urls[] = array('loc' => $this->get('router')->generate('app_contact'), 'changefreq' => 'weekly', 'priority' => '0.7');


        // Blog
//        $urls[] = array('loc' => $this->get('router')->generate('blog_homepage'), 'changefreq' => 'weekly', 'priority' => '7.0');
        // Categories
//        foreach ($em->getRepository('BlogBundle:Category')->findAll() as $category) {
//            $urls[] = array('loc' => $this->get('router')->generate('blog_category_show', array('slug' => $category->getSlug())), 'priority' => '0.6');
//        }
        // Tags
//        foreach ($em->getRepository('BlogBundle:Tag')->findAll() as $tag) {
//            $urls[] = array('loc' => $this->get('router')->generate('blog_tag_show', array('slug' => $tag->getSlug())), 'priority' => '0.6');
//        }
        // Blogs
//        foreach ($em->getRepository('BlogBundle:Blog')->findAll() as $blog) {
//            $urls[] = array('loc' => $this->get('router')->generate('blog_blog_show', array('slug' => $blog->getSlug(), 'comments' => 'false')), 'priority' => '0.5');
//        }

        return $this->render('AppBundle:Static:sitemap.xml.twig', array(
                    'urls' => $urls,
                    'hostname' => $hostname
        ));
    }

}
