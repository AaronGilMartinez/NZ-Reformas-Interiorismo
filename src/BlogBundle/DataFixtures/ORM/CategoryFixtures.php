<?php

// src/BlogBundle/DataFixtures/ORM/CategoryFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Category;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $category1 = new Category();
        $category1->setName('Categoría 1');
        $manager->persist($category1);
        
        $category2 = new Category();
        $category2->setName('Categoría 2');
        $manager->persist($category2);
        
        $category3 = new Category();
        $category3->setName('Categoría 3');
        $manager->persist($category3);
        
        $category4 = new Category();
        $category4->setName('Categoría 4');
        $manager->persist($category4);
        
        $category5 = new Category();
        $category5->setName('Categoría 5');
        $manager->persist($category5);

        $manager->flush();

        $this->addReference('category-1', $category1);
        $this->addReference('category-2', $category2);
        $this->addReference('category-3', $category3);
        $this->addReference('category-4', $category4);
        $this->addReference('category-5', $category5);
    }

    public function getOrder()
    {
        return 1;
    }

}