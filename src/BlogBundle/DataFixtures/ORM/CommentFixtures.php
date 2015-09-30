<?php

// src/BlogBundle/DataFixtures/ORM/CommentFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BlogBundle\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $comment = new Comment();
        $comment->setName('user1');
        $comment->setComment('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user2');
        $comment->setComment('Ut nulla urna, eleifend vel laoreet et, tempor viverra dui.');
        $comment->setArticle($this->getReference('article-2'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user1');
        $comment->setComment('Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.');
        $comment->setArticle($this->getReference('article-3'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user2');
        $comment->setComment('Aliquam posuere cursus massa quis blandit. ');
        $comment->setArticle($this->getReference('article-4'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user3');
        $comment->setComment('Integer nec risus ut ligula rutrum condimentum.');
        $comment->setArticle($this->getReference('article-5'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user4');
        $comment->setComment('Nullam dignissim urna non porttitor viverra. Donec scelerisque odio vitae semper accumsan.');
        $comment->setArticle($this->getReference('article-6'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('Aser5');
        $comment->setComment('Donec massa eros, interdum et enim non, maximus porttitor ex');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user7');
        $comment->setComment('Suspendisse efficitur lectus sit amet consectetur auctor.');
        $comment->setArticle($this->getReference('article-2'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user6');
        $comment->setComment('Vivamus quis mollis enim.');
        $comment->setArticle($this->getReference('article-3'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user6');
        $comment->setComment('Aenean id felis eros.');
        $comment->setArticle($this->getReference('article-4'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user3');
        $comment->setComment('Sed consectetur, mi non auctor pulvinar, risus est pretium purus, eget viverra ipsum arcu et libero.');
        $comment->setArticle($this->getReference('article-5'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user6');
        $comment->setComment('Sed et placerat nisl.');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user6');
        $comment->setComment('Maecenas aliquam pharetra felis id ornare.');
        $comment->setArticle($this->getReference('article-2'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user8');
        $comment->setComment('Suspendisse odio ligula, efficitur sed nisl ut, faucibus sagittis nisi.');
        $comment->setArticle($this->getReference('article-3'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user2');
        $comment->setComment('');
        $comment->setArticle($this->getReference('article-4'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user3');
        $comment->setComment('Quisque euismod risus at augue porta, ut bibendum turpis malesuada.');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user9');
        $comment->setComment('Duis nec dictum sem, in sodales lorem.');
        $comment->setArticle($this->getReference('article-2'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user2');
        $comment->setComment('Aenean ultrices ligula a metus auctor, vitae finibus ipsum lacinia.');
        $comment->setArticle($this->getReference('article-3'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user1');
        $comment->setComment('Nunc malesuada velit neque, sit amet posuere odio semper quis.');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user6');
        $comment->setComment('Fusce euismod ultrices ante sit amet pharetra.');
        $comment->setArticle($this->getReference('article-2'));
        $manager->persist($comment);
        
        $comment = new Comment();
        $comment->setName('user1');
        $comment->setComment('Cras convallis enim in accumsan commodo.');
        $comment->setArticle($this->getReference('article-1'));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}
