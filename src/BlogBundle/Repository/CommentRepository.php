<?php

// src/BlogBundle/Repository/CommentRepository.php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\CommentRepository")
 */
class CommentRepository extends EntityRepository {

    public function getCommentsForArticle($articleId, $approved = true) {
        $qb = $this->createQueryBuilder('c')
                ->select('c')
                ->where('c.article = :article_id')
                ->addOrderBy('c.created')
                ->setParameter('article_id', $articleId);

        if (false === is_null($approved))
            $qb->andWhere('c.approved = :approved')
                    ->setParameter('approved', $approved);

        return $qb->getQuery()->getResult();
    }

    public function getLatestComments($limit = 10) {
        $qb = $this->createQueryBuilder('c')
                ->select('c')
                ->addOrderBy('c.id', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

}
