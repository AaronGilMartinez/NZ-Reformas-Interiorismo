<?php

namespace test\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase {

    protected $user;

    public function testEditAccion() {
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackendBundle:User')->findOne();
        
        $client = static::createClient();
        $client->followRedirects(true);
        $client->request('GET', '/backend/users/edit/' . $user->getId());
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), 
                'Se muestra correctamente el formulario de editar usuario (status 200)');
    }

}
