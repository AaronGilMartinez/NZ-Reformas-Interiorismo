<?php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use BlogBundle\Entity\Tag;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\TagRepository")
 */
class TagRepository extends EntityRepository {

    public function getTagsForArticle($tag) {
        $qb = $this->createQueryBuilder('t')
                ->select(array('b','t'))
                ->leftJoin('t.articles', 'b')
                ->where('b.tags = :tag')
                ->addOrderBy('b.created', 'DESC')
                ->setParameter('tag', $tag);

        return $qb->getQuery()
                        ->getResult();
    }

}
