<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Paginador;
use BackendBundle\Form\ProjectType;
use AppBundle\Entity\Project;

class ProjectController extends Controller {

    public function listAction(Request $request, $page = 1) {

        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('AppBundle:Project')->getOrderedProjects($page);

        $paginador = new Paginador($projects['total_pages'], $projects['current_page']);

        return $this->render('BackendBundle:Project:index.html.twig', array(
                    'projects' => $projects['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function showAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $project = $em->getRepository('AppBundle:Project')->find($id);

        if (!$project) {
            throw $this->createNotFoundException('No se ha encontrado el artículo');
        }

        return $this->render('BackendBundle:Project:show.html.twig', array(
                    'project' => $project));
    }

    public function newAction(Request $request) {
        $project = new Project();

        $formulario = $this->createForm(ProjectType::class, $project, array(
            'action' => $this->generateUrl('backend_project_new')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $util = $this->get('AppBundle\Service\Util');
            $slug = $project->getSlug() ? $util->slugify($project->getSlug()) : $util->slugify($project->getName());
            $project->setSlug($slug);
            $path = 'bundles/app/images/proyectos/' . $slug . '/';
            $project->setPath($path);

            if (!file_exists($path)) {
                mkdir($this->getParameter('upload_directory') . $path, 0777, true);
            }
            if ($project->getImage()) {
                $img = $project->getImage();
                $img->setPath($path);
                $img->setFormat(1);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Proyecto creado con éxito.");

            return $this->redirect($this->generateUrl('backend_project_show', array('id' => $project->getId())));
        }

        return $this->render('BackendBundle:Project:new.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function editAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $projectOldImage = false;

        $project = $em->getRepository('AppBundle:Project')->find($id);

        if (!$project) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto');
        }

        if ($project->getImage()) {
            $projectOldImage = clone $project->getImage();
        }

        $formulario = $this->createForm(ProjectType::class, $project, array(
            'action' => $this->generateUrl('backend_project_edit', array('id' => $id))));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $image = $project->getImage();
            $path = $project->getPath();

            if ($image->getFile()) {
                $util = $this->get('AppBundle\Service\Util');
                $image->setPath($path);
                $image->setFormat(1);
                if ($projectOldImage) {
                    $util->delete(($this->get('kernel')->getRootDir() . '/../web/' . $projectOldImage->getSrc()));
                }
            } else {
                if ($projectOldImage) {
                    $project->setImage($projectOldImage);
                }
            }

            $em->persist($project);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Proyecto editado con éxito.");

            return $this->redirect($this->generateUrl('backend_project_show', array('id' => $project->getId())));
        }

        return $this->render('BackendBundle:Project:edit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'project' => $project));
    }

    public function removeAction(Request $request, $id) {
        //$this->setUtil();

        $em = $this->getDoctrine()->getManager();

        $project = $em->getRepository('AppBundle:Project')->find($id);

        if (!$project) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto');
        }

        $util = $this->get('AppBundle\Service\Util');
        $path = $this->get('kernel')->getRootDir() . '/../web/' . $project->getPath();
        $util->delete($path);

        $em->remove($project);
        $em->flush();

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Proyecto eliminado con éxito.");

        return $this->redirect($this->generateUrl('backend_projects', array('page' => 1)));
    }

}
