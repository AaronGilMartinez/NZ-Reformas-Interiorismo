<?php

namespace BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;

class CommentController extends Controller {

    public function listAction(Request $request, $page = 1) {
        $em = $this->getDoctrine()->getManager();

        $comments = $em->getRepository('BlogBundle:Comment')->getCommentsByDate($page);

        $paginador = new Paginador($comments['total_pages'], $comments['current_page']);

        return $this->render('BackendBundle:Comment:index.html.twig', array(
                    'comments' => $comments['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function removeAction(Request $request, $id = 0) {
        $em = $this->getDoctrine()->getManager();

        $comment = $em->getRepository('BlogBundle:Comment')->findOneBy(array('id' => $id));

        if (!$comment) {
            throw $this->createNotFoundException('No se ha encontrado la comentario.');
        }
        
        $request->getSession()
                        ->getFlashBag()
                        ->add('success', "Comentario eliminado con éxito.");

        $em->remove($comment);
        $em->flush();

        return $this->redirect($this->generateUrl('backend_comments', array('page' => 1)));
    }
}
