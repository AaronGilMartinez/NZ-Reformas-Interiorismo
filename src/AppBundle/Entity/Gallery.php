<?php

// src/AppBundle/Entity/Gallery.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GalleryRepository")
 * @ORM\Table(name="gallery")
 */
class Gallery {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

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
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="galleries")
     * @ORM\JoinColumn(name="project", referencedColumnName="name")
     */
    protected $project;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="gallery")
     */
    protected $images;

    public function __construct() {
        $this->images = new ArrayCollection();
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
     */
    public function getName() {
        return $this->name;
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
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
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
     * Get description
     *
     * @return text 
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
     * Add image
     * 
     * @param Image $image
     * 
     */
    public function addImage(\AppBundle\Entity\Image $image) {
        $this->images[] = $image;
    }

    /**
     * Get images
     * 
     * @return Image
     * 
     */
    public function getImages() {
        return $this->images;
    }

    /**
     * Get project
     * 
     * @return Project
     * 
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * Set project
     *
     * @param Project $project
     */
    public function setProject(\AppBundle\Entity\Project $project) {
        $this->project = $project;
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
