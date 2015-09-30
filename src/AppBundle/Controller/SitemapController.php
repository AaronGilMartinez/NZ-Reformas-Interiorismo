<?php

// src/AppBundle/Controller/SitemapController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitemapController extends Controller {
    
    public function sitemapAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // Homepage
        $urls[] = array('loc' => $this->get('router')->generate('app_homepage'), 'changefreq' => 'weekly', 'priority' => '1.0');

        // Contact
        $urls[] = array('loc' => $this->get('router')->generate('app_contact'), 'changefreq' => 'weekly', 'priority' => '9.0');

        // Blog
        $urls[] = array('loc' => $this->get('router')->generate('blog_homepage'), 'changefreq' => 'weekly', 'priority' => '7.0');

        // Company
        $urls[] = array('loc' => $this->get('router')->generate('app_static', array('page' => 'empresa')), 'changefreq' => 'weekly', 'priority' => '0.8');

        // Categories
        foreach ($em->getRepository('BlogBundle:Category')->findAll() as $category) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_category_show', array('slug' => $category->getSlug())), 'priority' => '0.6');
        }

        // Tags
        foreach ($em->getRepository('BlogBundle:Tag')->findAll() as $tag) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_tag_show', array('slug' => $tag->getSlug())), 'priority' => '0.6');
        }

        // Blogs
        foreach ($em->getRepository('BlogBundle:Blog')->findAll() as $blog) {
            $urls[] = array('loc' => $this->get('router')->generate('blog_blog_show', array('slug' => $blog->getSlug(), 'comments' => 'false')), 'priority' => '0.5');
        }

        return $this->render('AppBundle::sitemap.xml.twig', array(
                    'urls' => $urls,
                    'hostname' => $hostname
        ));
    }

}
