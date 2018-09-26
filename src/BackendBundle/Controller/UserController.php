<?php

namespace BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use BackendBundle\Entity\User;
use BackendBundle\Form\UserType;
use BackendBundle\Form\EditUserType;

class UserController extends Controller {

    public function listAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BackendBundle:User')->findAll();

        return $this->render('BackendBundle:User:index.html.twig', array(
                    'users' => $users,
        ));
    }

    public function registerAction(Request $request) {

        $user = new User();
        $em = $this->getDoctrine()->getManager();

        $formulario = $this->createForm(UserType::class, $user, array(
            'action' => $this->generateUrl('backend_user_register')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
            $user->setSalt(md5(time()));
            $user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));
            $em->persist($user);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Usuario registrado con exito.");
            return $this->redirect($this->generateUrl('backend_users'));
        }

        return $this->render('BackendBundle:User:register.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function loginAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $response = $this->render('AppBundle:Static:inicio.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error));

        if ($error) {
            $request->getSession()->getFlashBag()->add('error', $error->getMessage());
        } else {
            $request->getSession()->getFlashBag()->add('success', "Has iniciado sesión.");
        }

        return $response;
    }

    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BackendBundle:User')->findOneById($id);

        if (!$user) {
            throw $this->createNotFoundException('No se ha encontrado el usuario.');
        }

        $formulario = $this->createForm(EditUserType::class, $user, array(
            'action' => $this->generateUrl('backend_user_edit', array('id' => $id))));


        if ($request->getMethod() == 'POST') {
            $oldPassword = $formulario->getData()->getPassword();

            $formulario->handleRequest($request);

            if ($formulario->isSubmitted()) {
                if ($user->getPassword() !== null) {
                    $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                    $user->setSalt(md5(time()));
                    $encodedPassword = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                    $user->setPassword($encodedPassword);
                } else {
                    $user->setPassword($oldPassword);
                }

                $em->persist($user);
                $em->flush();
                $request->getSession()
                        ->getFlashBag()
                        ->add('success', "Usuario editado con exito.");
                return $this->redirect($this->generateUrl('backend_users'));
            }
        }

        return $this->render('BackendBundle:User:register.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function removeAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BackendBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No se ha encontrado el usuario');
        }

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Usuario eliminado con éxito.");

        $em->remove($user);
        $em->flush();

        return $this->redirect($this->generateUrl('backend_users', array('page' => 1)));
    }

}
