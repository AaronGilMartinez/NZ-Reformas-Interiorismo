<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GalleryRepository")
 * @ORM\Table(name="gallery")
 */
class Gallery {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $uploaded;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", nullable=true)
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
    protected $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="galleries")
     */
    protected $project;

    /**
     * @ORM\ManyToMany(targetEntity="Image", cascade={"all"})
     * @ORM\JoinTable(name="gallery_images",
     *      joinColumns={@ORM\JoinColumn(name="gallery_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="image_id", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $images;

    public function __construct() {
        $this->images = new ArrayCollection();
        $this->uploaded = new \DateTime();
    }

    public function __toString() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function setUploaded($date) {
        $this->uploaded = $date;
    }

    public function getUploaded() {
        return $this->uploaded;
    }

    public function setName($name) {
        $this->name = $name;
        $this->setSlug($name);
    }

    public function getName() {
        return $this->name;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function addImage($image) {
        $this->images[] = $image;
    }

    public function removeImage($image) {
        $this->images->removeElement($image);
    }

    public function getImages() {
        return $this->images;
    }

    public function getProject() {
        return $this->project;
    }

    public function setProject(\AppBundle\Entity\Project $project) {
        $this->project = $project;
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
