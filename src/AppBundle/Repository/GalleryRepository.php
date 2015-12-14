<?php
// src/AppBundle/Repository/GalleryRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class GalleryRepository extends EntityRepository {
    
    public function getGalleriesFromProject ($project) {
         $qb = $this->createQueryBuilder('g')
                ->where('g.project = :project_name')
                ->setParameter('project_name', $project->getName());

        return $qb->getQuery() ->getResult();
        
    }
    
}