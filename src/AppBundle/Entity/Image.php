<?php

// src/AppBundle/Entity/Image.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 * @ORM\Table(name="image")
 */
class Image {

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $src;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $alt;

    /**
     * @ORM\ManyToOne(targetEntity="Gallery", inversedBy="images")
     * @ORM\JoinColumn(name="gallery", referencedColumnName="name")
     */
    protected $gallery;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $description = null;

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc() {
        return $this->src;
    }

    /**
     * Set name
     *
     * @param string $src
     */
    public function setSrc($src) {
        $this->src = $src;
    }

    /**
     * Get title
     *
     * @return string 
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
     * Get alt
     *
     * @return string 
     */
    public function getAlt() {
        return $this->alt;
    }

    /**
     * Set alt
     *
     * @param string $alt
     */
    public function setAlt($alt) {
        $this->alt = $alt;
    }

    /**
     * Get gallery
     * 
     * @return \AppBundle\Entity\Gallery 
     */
    public function getGallery() {
        return $this->gallery;
    }

    /**
     * Add gallery
     * 
     * @param \AppBundle\Entity\Gallery $gallery
     */
    public function setGallery(\AppBundle\Entity\Gallery $gallery) {
        $this->gallery = $gallery;
    }
    
    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set alt
     *
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }
}
