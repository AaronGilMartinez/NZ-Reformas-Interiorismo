<?php

// src/AppBundle/Repository/GalleryRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class GalleryRepository extends EntityRepository {

    public function getGalleriesFromProjectByDate($project) {
        $qb = $this->createQueryBuilder('g')
                ->where('g.project = :project_id')
                ->orderBy('g.uploaded', 'DESC')
                ->setParameter('project_id', $project->getId());

        return $qb->getQuery()->getResult();
    }

    public function getGalleriesByDateProject($page, $limit = 10) {
        $qb = $this->createQueryBuilder('g')
                ->addOrderBy('g.uploaded', 'DESC');
                //->addOrderBy('g.project', 'ASC');
        $paginated = new Paginator($qb, $fetchJoinCollection = true);

        $totalItems = count($paginated);
        $pagesCount = ceil($totalItems / $limit);

        $paginated
                ->getQuery()
                ->setFirstResult($limit * ($page - 1))
                ->setMaxResults($limit);

        return array(
            'total_pages' => $pagesCount,
            'paginated' => $paginated,
            'current_page' => $page);
    }
    
     public function getGalleriesOrderedByDate($limit = null) {
        $qb = $this->createQueryBuilder('g')
                ->orderBy('g.uploaded', 'DESC');
        
        if ($limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getResult();
    }

}
