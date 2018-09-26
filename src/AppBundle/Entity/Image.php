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
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $file;

    /**
     * @ORM\Column(type="string")
     */
    protected $path;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $format;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $alt;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $description;
    
    public function __toString(){
        return $this->getSrc();
    }
    
    public function getSrc(){
        return $this->path . $this->file;
    }
    
    public function getThumb(){
        return $this->path . str_replace('.', '-thumb.', $this->file);
    }
    
    public function getId() {
        return $this->id;
    }
    
    /**
     * Get file
     *
     * @return string 
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Set file
     *
     * @param string $file
     */
    public function setFile($file) {
        $this->file = $file;
    }
    
    /**
     * Get path
     *
     * @return string 
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set path
     *
     * @param string $path
     */
    public function setPath($path) {
        $this->path = $path;
    }
    
    /**
     * Get format
     *
     * @return integer 
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Set format
     *
     * @param integer $format
     */
    public function setFormat($format) {
        $this->format = $format;
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
