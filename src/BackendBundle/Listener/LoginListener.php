<?php

//

namespace BackendBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Doctrine\ORM\EntityManager;

class LoginListener {
    
    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event) {
        $user = $event->getAuthenticationToken()->getUser();
        $user->setLast(new \DateTime());

        $this->em->persist($user);
        $this->em->flush();
        
        
    }

}
