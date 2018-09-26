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
        $category1->setTitle('Reformas | Categoria');
        $category1->setDescription('Categoría de artículos, noticias y proyectos de reformas en Zaragoza de pisos y edificios tanto integrales como parciales.');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Rehabilitación');
        $category1->setTitle('Rehabilitación de fachadas de edificios | Categoría');
        $category1->setDescription('Categoría de artículos acerca de rehabilitación de fachadas de edificios y obras en Zaragoza.');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Interiorismo');
        $category1->setTitle('Interiorismo | Categoría');
        $category1->setDescription('Categoría de artículos sobre diseño e interiorismo  y proyectos realizados por nuestra empresa NZ Reformas en Zaragoza y alrededores.');
        $manager->persist($category3);

        $manager->flush();

        $this->addReference('reformas', $category1);
        $this->addReference('rehabilitacion', $category2);
        $this->addReference('interiorismo', $category3);
    }

    public function getOrder() {
        return 1;
    }

}
