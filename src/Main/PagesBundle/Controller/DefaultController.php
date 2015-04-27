<?php

namespace Main\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MainPagesBundle:Default:index.html.twig', array('name' => $name));
    }
}
