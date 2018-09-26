<?php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\TagRepository")
 */
class TagRepository extends EntityRepository {

    public function getTagsForArticle($tag) {
        $qb = $this->createQueryBuilder('t')
                ->select(array('b', 't'))
                ->leftJoin('t.articles', 'b')
                ->where('b.tags = :tag')
                ->addOrderBy('b.created', 'DESC')
                ->setParameter('tag', $tag);

        return $qb->getQuery()
                        ->getResult();
    }

    public function getOrderedTags($page, $limit = 10) {
        $qb = $this->createQueryBuilder('t')
                ->select('t')
                ->addOrderBy('t.name');

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
}
