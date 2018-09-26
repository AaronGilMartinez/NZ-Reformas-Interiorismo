<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Paginador;
use BackendBundle\Form\CategoryType;
use BlogBundle\Entity\Category;

class CategoryController extends Controller {

    public function listAction(Request $request, $page = 1) {

        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('BlogBundle:Category')->getOrderedCategories($page);

        $paginador = new Paginador($categories['total_pages'], $categories['current_page']);

        return $this->render('BackendBundle:Category:index.html.twig', array(
                    'categories' => $categories['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function newAction(Request $request) {
        $category = new Category();
        $formulario = $this->createForm(CategoryType::class, $category, array(
            'action' => $this->generateUrl('backend_category_new')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $util = $this->get('AppBundle\Service\Util');
            $slug = $category->getSlug() ? $util->slugify($category->getSlug()) : $util->slugify($category->getName());
            $category->setSlug($slug);

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Categoría creada con éxito.");

            return $this->redirect($this->generateUrl('backend_category_show', array('id' => $category->getId())));
        }

        return $this->render('BackendBundle:Category:new.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function showAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('BlogBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }

        return $this->render('BackendBundle:Category:show.html.twig', array(
                    'category' => $category));
    }

    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('BlogBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }
        $formulario = $this->createForm(CategoryType::class, $category, array(
            'action' => $this->generateUrl('backend_category_edit', array('id' => $id))));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirect($this->generateUrl('backend_categories', array('page' => 1)));
        }

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Categoría editada con éxito.");

        return $this->render('BackendBundle:Category:edit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'category' => $category));
    }

    public function removeAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('BlogBundle:Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException('No se ha encontrado la etiqueta');
        }

        $em->remove($category);
        $em->flush();

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Categoría eliminada con éxito.");

        return $this->redirect($this->generateUrl('backend_categories', array('page' => 1)));
    }

}
