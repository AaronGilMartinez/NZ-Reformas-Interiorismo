<?php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\ArticleRepository")
 */
class ArticleRepository extends EntityRepository {

    public function getLatestArticles($page = 1, $limit = 10) {
        $qb = $this->createQueryBuilder('a')
                ->select('a, c')
                ->leftJoin('a.comments', 'c')
                ->addOrderBy('a.created', 'DESC');

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

    public function getArticlesForTag($tag, $page, $limit = 10) {
        $qb = $this->createQueryBuilder('a')
                ->join('a.tags', 't', 'WITH', 't.id = :tag_id')
                ->addOrderBy('a.created', 'DESC')
                ->setParameter('tag_id', $tag->getId());

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

    public function getArticlesForCategory($category, $page, $limit = 10) {
        $qb = $this->createQueryBuilder('a')
                ->where('a.category = :category_id')
                ->addOrderBy('a.created', 'DESC')
                ->setParameter('category_id', $category->getId());

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

    public function getArticlesOrderedByDate($limit = null) {
        $qb = $this->createQueryBuilder('a')
                ->OrderBy('a.created', 'DESC');

        if ($limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getResult();
    }
}
