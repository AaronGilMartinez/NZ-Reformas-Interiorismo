<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Paginador;
use BackendBundle\Form\ArticleType;
use BlogBundle\Entity\Article;

class ArticleController extends Controller {

    public function listAction(Request $request, $page = 1) {

        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->getLatestArticles($page);

        $paginador = new Paginador($articles['total_pages'], $articles['current_page']);

        return $this->render('BackendBundle:Article:index.html.twig', array(
                    'articles' => $articles['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function newAction(Request $request) {
        $article = new Article();
        $formulario = $this->createForm(ArticleType::class, $article, array(
            'action' => $this->generateUrl('backend_article_new')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $util = $this->get('AppBundle\Service\Util');
            $slug = $article->getSlug() ? $util->slugify($article->getSlug()) : $util->slugify($article->getName());
            $article->setSlug($slug);

            $path = 'bundles/blog/images/articles/';
            $img = $article->getImage();

            if ($img) {
                $img->setPath($path);
                $img->setFormat(3);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Artículo creado con éxito.");

            return $this->redirect($this->generateUrl('backend_article_show', array('id' => $article->getId())));
        }

        return $this->render('BackendBundle:Article:new.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function showAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('BlogBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No se ha encontrado el artículo');
        }

        return $this->render('BackendBundle:Article:show.html.twig', array(
                    'article' => $article));
    }

    public function editAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('BlogBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No se ha encontrado el artículo');
        }

        if ($article->getImage()) {
            $articleOldImage = clone $article->getImage();
        }

        $formulario = $this->createForm(ArticleType::class, $article, array(
            'action' => $this->generateUrl('backend_article_edit', array('id' => $id))));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $image = $article->getImage();

            if ($image->getFile()) {
                $util = $this->get('AppBundle\Service\Util');
                $image->setPath($articleOldImage->getPath());
                $image->setFormat(3);
                $util->delete(($this->get('kernel')->getRootDir() . '/../web/' . $articleOldImage->getSrc()));
            } else {
                $article->setImage($articleOldImage);
            }

            $em->persist($article);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Artículos editado con éxito.");

            return $this->redirect($this->generateUrl('backend_articles', array('page' => 1)));
        }

        return $this->render('BackendBundle:Article:edit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'article' => $article));
    }

    public function removeAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $util = $this->get('AppBundle\Service\Util');

        $article = $em->getRepository('BlogBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No se ha encontrado el artículo');
        }
        if ($article->getImage()) {
            if ($article->getImage()->getFile()) {
                $util->delete($this->get('kernel')->getRootDir() . '/../web/' . $article->getImage()->getSrc());
            }
        }

        $em->remove($article);
        $em->flush();

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Artículo eliminado con éxito.");

        return $this->redirect($this->generateUrl('backend_articles', array('page' => 1)));
    }

}
