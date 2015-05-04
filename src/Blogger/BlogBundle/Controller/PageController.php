<?php

// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Importa el nuevo espacio de nombres
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()
                ->getManager();

        $blogs = $em->getRepository('BlogBundle:Blog')
                ->getLatestBlogs();

        $tags = $em->getRepository('BlogBundle:Blog')
                ->getTags();

        $tagWeights = $em->getRepository('BlogBundle:Blog')
                ->getTagWeights($tags);

        $commentLimit = $this->container
                ->getParameter('blogger_blog.comments.latest_comment_limit');
        $latestComments = $em->getRepository('BlogBundle:Comment')
                ->getLatestComments($commentLimit);

        return $this->render('BlogBundle:Page:index.html.twig', array(
                    'blogs' => $blogs,
                    'latestComments' => $latestComments,
                    'tags' => $tagWeights
        ));
    }

}
