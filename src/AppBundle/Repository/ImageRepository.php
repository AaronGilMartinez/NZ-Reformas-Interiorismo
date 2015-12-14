<?php
// src/AppBundle/Repository/ImageRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImageRepository extends EntityRepository {
    
    public function getImagesFromGallery ($gallery) {
         $qb = $this->createQueryBuilder('i')
                ->where('i.gallery = :gallery')
                ->setParameter('gallery', $gallery->getName());

        return $qb->getQuery() ->getResult();
        
    }
    
}