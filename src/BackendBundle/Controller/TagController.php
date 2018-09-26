<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Paginador;
use BackendBundle\Form\TagType;
use BlogBundle\Entity\Tag;

class TagController extends Controller {

    public function listAction(Request $request, $page = 1) {

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('BlogBundle:Tag')->getOrderedTags($page, 20);

        $paginador = new Paginador($tags['total_pages'], $tags['current_page']);

        return $this->render('BackendBundle:Tag:index.html.twig', array(
                    'tags' => $tags['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function newAction(Request $request) {
        $tag = new Tag();
        $formulario = $this->createForm(TagType::class, $tag, array(
            'action' => $this->generateUrl('backend_tag_new')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $util = $this->get('AppBundle\Service\Util');
            $slug = $tag->getSlug() ? $util->slugify($tag->getSlug()) : $util->slugify($tag->getName());
            $tag->setSlug($slug);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Etiqueta creada con éxito.");

            return $this->redirect($this->generateUrl('backend_tag_show', array('id' => $tag->getId())));
        }

        return $this->render('BackendBundle:Tag:new.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function showAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('BlogBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }

        return $this->render('BackendBundle:Tag:show.html.twig', array(
                    'tag' => $tag));
    }

    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('BlogBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }
        $formulario = $this->createForm(TagType::class, $tag, array(
            'action' => $this->generateUrl('backend_tag_edit', array('id' => $id))));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Etiqueta editada con éxito.");

            return $this->redirect($this->generateUrl('backend_tags', array('page' => 1)));
        }

        return $this->render('BackendBundle:Tag:edit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'tag' => $tag));
    }

    public function removeAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $tag = $em->getRepository('BlogBundle:Tag')->find($id);

        if (!$tag) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Etiqueta eliminada con éxito.");

        $em->remove($tag);
        $em->flush();

        return $this->redirect($this->generateUrl('backend_tags', array('page' => 1)));
    }

}
