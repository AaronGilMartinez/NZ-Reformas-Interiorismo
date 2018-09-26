<?php

// src/AppBundle/Entity/Enquiry.php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\Email;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnquiryRepository")
 * @ORM\Table(name="enquiry")
 */
class Enquiry {

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
    protected $email;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /** ES UNA TRAMPA!!! para spammers
     * @ORM\Column(type="text", nullable=true)
     */
    protected $subject;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $sent;

    /**
     * @ORM\Column(type="string")
     */
    protected $url;

    public static function loadValidatorMetadata(ClassMetadata $metadata) {

        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('email', new Email());
        $metadata->addPropertyConstraint('subject', new Blank());
        $metadata->addPropertyConstraint('body', new NotBlank());

        $metadata->addPropertyConstraint('email', new Email(array(
            'message' => 'El correo introducido es incorrecto. Reviselo, por favor.'
        )));
    }

    public function __construct() {
        $this->setSent(new \DateTime());
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get subject
     *
     * @return text 
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Set subject
     *
     * @param string $subject
     */
    public function setSubject($subject) {
        $this->subject = $subject;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * Set body
     *
     * @param string $body
     */
    public function setBody($body) {
        $this->body = $body;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    /**
     * Set sent
     *
     * @param \DateTime $sent
     */
    public function setSent($sent) {
        $this->sent = $sent;
    }

    /**
     * Get sent
     *
     * @return \DateTime 
     */
    public function getSent() {
        return $this->sent;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url     */
    public function setUrl($url) {
        $this->url = $url;
    }

    public function toArray() {
        return array(
            date_format($this->sent, 'd-m-Y H:i:s'),
            ucfirst($this->name),
            strtolower($this->email),
            $this->phone,
            $this->body,
            $this->url
        );
    }

}
