<?php

// src/BlogBundle/DataFixtures/ORM/TagFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Tag;

class TagFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $tag1 = new Tag();
        $tag1->setName('Etiqueta 1');
        $manager->persist($tag1);
        
        $tag2 = new Tag();
        $tag2->setName('Etiqueta 2');
        $manager->persist($tag2);
        
        $tag3 = new Tag();
        $tag3->setName('Etiqueta 3');
        $manager->persist($tag3);
        
        $tag4 = new Tag();
        $tag4->setName('Etiqueta 4');
        $manager->persist($tag4);
        
        $tag5 = new Tag();
        $tag5->setName('Etiqueta 5');
        $manager->persist($tag5);
        
        $tag6 = new Tag();
        $tag6->setName('Etiqueta 6');
        $manager->persist($tag6);
        
        $tag7 = new Tag();
        $tag7->setName('Etiqueta 7');
        $manager->persist($tag7);
        
        $tag8 = new Tag();
        $tag8->setName('Etiqueta 8');
        $manager->persist($tag8);
        
        $tag9 = new Tag();
        $tag9->setName('Etiqueta 9');
        $manager->persist($tag9);
        
        $tag10 = new Tag();
        $tag10->setName('Etiqueta 10');
        $manager->persist($tag10);

        $manager->flush();

        $this->addReference('tag-1', $tag1);
        $this->addReference('tag-2', $tag2);
        $this->addReference('tag-3', $tag3);
        $this->addReference('tag-4', $tag4);
        $this->addReference('tag-5', $tag5);
        $this->addReference('tag-6', $tag6);
        $this->addReference('tag-7', $tag7);
        $this->addReference('tag-8', $tag8);
        $this->addReference('tag-9', $tag9);
        $this->addReference('tag-10', $tag10);
    }

    public function getOrder()
    {
        return 2;
    }
}