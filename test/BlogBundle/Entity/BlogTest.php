<?php

namespace test\BlogBundle\Entity;

use BlogBundle\Entity\Blog;

class BlogTest extends \PHPUnit_Framework_TestCase {

    public function testSlugify() {
        $blog = new Blog();

        $this->assertEquals('hello-world', $blog->slugify('Hello World'));
        $this->assertEquals('a day with symfony2', $blog->slugify('A Day With Symfony2'));
    }

}
