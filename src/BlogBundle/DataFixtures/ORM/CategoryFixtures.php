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
        $category1->setName('Reformas');
        $manager->persist($category1);
        
        $category2 = new Category();
        $category2->setName('Rehabilitación');
        $manager->persist($category2);
        
        $category3 = new Category();
        $category3->setName('Interiorismo');
        $manager->persist($category3);

        $manager->flush();

        $this->addReference('reformas', $category1);
        $this->addReference('rehabilitacion', $category2);
        $this->addReference('interiorismo', $category3);
    }

    public function getOrder()
    {
        return 1;
    }

}