<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\EnquiryRepository")
 */
class EnquiryRepository extends EntityRepository {

    public function getLatestEnquiries($page, $limit = 10) {
        $qb = $this->createQueryBuilder('e')
                ->select('e')
                ->addOrderBy('e.sent', 'DESC');

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
            'current_page' => $page
        );
    }
    
     public function getEnquiriesOrderedByDate($limit = null) {
        $qb = $this->createQueryBuilder('e')
                ->orderBy('e.sent', 'DESC');
        
        if ($limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getResult();
    }
}
