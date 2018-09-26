<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CategoryRepository")
 * @ORM\Table(name="category")
 */
class Category {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $title = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $description = null;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="category", cascade={"all"})
     */
    protected $articles = null;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;

        $this->setSlug($name);
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    public function __toString() {
        return $this->getName();
    }
    
    /**
     * Get title
     *
     * @return string 
     * 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }
    
    /**
     * Get description
     *
     * @return string 
     * 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set article
     *
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Add article
     * 
     * @param Article $article
     * 
     */
    public function addArticle(\BlogBundle\Entity\Article $article) {
        $this->articles[] = $article;
    }

    /**
     * Get articles
     * 
     * @return Article
     * 
     */
    public function getArticles() {
        return $this->articles;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * 
     */
    public function setSlug($slug) {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     * 
     */
    public function getSlug() {
        return $this->slug;
    }

    public function __construct() {
        $this->articles = new ArrayCollection();
    }

}
