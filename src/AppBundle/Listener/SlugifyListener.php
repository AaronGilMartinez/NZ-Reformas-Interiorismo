<?php

namespace AppBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Service\Util;

class SlugifyListener {

    private $util;
    private $text;

    public function __construct(Util $util) {
        $this->util = $util;
    }

    public function prePersist(LifecycleEventArgs $args) {
        $entity = $args->getEntity();

        $this->generateSlug($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args) {
        $entity = $args->getEntity();

        $this->generateSlug($entity);
    }

    public function generateSlug($entity) {
        if ($entity instanceof \AppBundle\Entity\Gallery ||
                $entity instanceof \AppBundle\Entity\Project ||
                $entity instanceof \BlogBundle\Entity\Article ||
                $entity instanceof \BlogBundle\Entity\Tag || 
                $entity instanceof \BlogBundle\Entity\Category) {

            $submitted = $entity->getSlug();

            if ($submitted !== "" && $submitted !== "n-a") {
                $this->setText($submitted);
            } else {
                $this->setText($entity->getName());
            }

            $entity->setSlug($this->util->slugify($this->getText()));
        }
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getText() {
        return $this->text;
    }

}
