<?php

// src/AppBundle/Entity/Gallery.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="project")
 */
class Project {

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\Column(type="string")
     */
    protected $image;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $introduction;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="Gallery", mappedBy="project")
     */
    protected $galleries;

    public function __construct() {
        $this->galleries = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
        $this->setSlug($this->name);
    }

    /**
     * Get name
     *
     * @return string 
     * 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug) {
        $this->slug = $this->slugify($slug);
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Add gallery
     * 
     * @param Gallery $gallery
     * 
     */
    public function addGallery(\AppBundle\Entity\Gallery $gallery) {
        $this->galeries[] = $gallery;
    }

    /**
     * Get galleries
     * 
     * @return Gallery
     * 
     */
    public function getGalleries() {
        return $this->galleries;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image) {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Get introduction
     *
     * @return
     */
    public function getIntroduction() {
        return $this->introduction;
    }

    /**
     * Set introduction
     *
     * @param text $introduction
     */
    public function setIntroduction($introduction) {
        $this->introduction = $introduction;
    }

    /**
     * Get description
     *
     * @return
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description) {
        $this->description = $description;
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

}
