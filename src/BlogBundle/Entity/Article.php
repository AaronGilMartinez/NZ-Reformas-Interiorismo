<?php

// src/BlogBundle/Entity/Article.php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="article")
     */
    protected $comments;

    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="articles")
     * @ORM\JoinTable(name="tags_articles")
     **/
    private $tags;

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
     * Set title
     *
     * @param string $title
     * 
     */
    public function setTitle($title) {
        $this->title = $title;
        $this->setSlug($this->title);
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

    public function __toString() {
        return $this->getTitle();
    }

    /**
     * Set author
     *
     * @param string $author
     * 
     */
    public function setAuthor($author) {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     * 
     */
    public function getAuthor() {
        return $this->author;
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
    public function getArticle($length = null) {
        if (false === is_null($length) && $length > 0)
            return substr($this->article, 0, $length);
        else
            return $this->article;
    }

    /**
     * Set image
     *
     * @param string $image
     * 
     */
    public function setImage($image) {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
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
    public function setCategory(\BlogBundle\Entity\Category $category = null) {
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
     * @return Article
     */
    public function setUpdated($updated) {
        $this->updated = $updated;

        return $this;
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
     * @ORM\preUpdate
     */
    public function setUpdatedValue() {
        $this->setUpdated(new \DateTime());
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
        $this->tags = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

}
