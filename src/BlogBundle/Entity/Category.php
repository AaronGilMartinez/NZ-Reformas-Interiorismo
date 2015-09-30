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
     * @ORM\OneToMany(targetEntity="Article", mappedBy="category")
     */
    protected $articles;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        
        $this->setSlug($this->name);
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function __toString() {
        return $this->getName();
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
        $this->slug = $this->slugify($slug);
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

    public function slugify($text) {
        // sustituye caracteres de espaciado o dígitos con un -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // recorta espacios en ambos extremos
        $text = trim($text, '-');


        // translitera
        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // cambia a minúsculas
        $text = strtolower($text);

        // elimina caracteres indeseables
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    
    public function __construct() {
        $this->articles = new ArrayCollection();
    }
    
}