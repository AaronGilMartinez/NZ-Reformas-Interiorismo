<?php

// src/BlogBundle/Entity/Article.php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\ArticleRepository")
 * @ORM\Table(name="article")
 * @ORM\HasLifecycleCallbacks()
 */
class Article {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $title = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $description = null;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"all"})
     * @Assert\Type(type="AppBundle\Entity\Image")
     * @Assert\Valid()
     */
    protected $image;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="article", cascade={"all"})
     */
    protected $comments;

    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="articles")
     * @ORM\JoinTable(name="tags_articles")
     * */
    private $tags = null;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * Get id
     *
     * @return integer 
     * 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * 
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

    public function __toString() {
        return $this->getTitle();
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
     * Set article
     *
     * @param string $article
     */
    public function setArticle($article) {
        $this->article = $article;
    }

    /**
     * Get article
     *
     * @return string 
     * 
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Set image
     *
     */
    public function setImage($image) {
        $this->image = $image;
    }

    /**
     * Get image
     *
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set category
     *
     * @param \BlogBundle\Entity\Category $category
     * 
     */
    public function setCategory(\BlogBundle\Entity\Category $category) {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return \BlogBundle\Entity\Category 
     * 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Add tag
     * 
     * @param \BlogBundle\Entity\Category $category
     * 
     */
    public function addTag(\BlogBundle\Entity\Tag $tag) {
        $tag->addArticle($this); // synchronously updating inverse side
        $this->tags[] = $tag;
    }

    /**
     * Get tags
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Remove tag
     *
     * @param \BlogBundle\Entity\Tag $tag
     * 
     */
    public function removeTag(\BlogBundle\Entity\Tag $tag) {
        $this->tags->removeElement($tag);
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * 
     */
    public function setCreated($created) {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     */
    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated() {
        return $this->updated;
    }

    public function addComment(\BlogBundle\Entity\Comment $comment) {
        $this->comments[] = $comment;
    }

    public function getComments() {
        return $this->comments;
    }

    /**
     * Remove comments
     *
     * @param \BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\BlogBundle\Entity\Comment $comments) {
        $this->comments->removeElement($comments);
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
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

    public function __construct() {
        $this->tags = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

}
