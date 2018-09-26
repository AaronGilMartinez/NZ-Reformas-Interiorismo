<?php

// src/AppBundle/Entity/Project.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 * @ORM\Table(name="project")
 */
class Project {

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
     * @ORM\Column(type="string")
     */
    protected $path;

    /**
     * @ORM\OneToOne(targetEntity="Image", cascade={"all"})
     * @Assert\Type(type="AppBundle\Entity\Image")
     * @Assert\Valid()
     */
    protected $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $introduction;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @ORM\OneToMany(targetEntity="Gallery", mappedBy="project", cascade={"all"})
     */
    protected $galleries;

    public function __construct() {
        $this->galleries = new ArrayCollection();
    }

    public function __toString() {
        return $this->name;
    }

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
        $this->slug = $slug;
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

    public function setImage(\AppBundle\Entity\Image $image) {
        $this->image = $image;
    }
    
    /**
     * Get galleries
     * 
     * @return Image
     * 
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

    /**
     * Get content
     *
     * @return
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content) {
        $this->content = $content;
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
}
