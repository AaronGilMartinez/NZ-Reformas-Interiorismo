<?php

// src/AppBundle/Entity/Enquiry.php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $sent;

    public static function loadValidatorMetadata(ClassMetadata $metadata) {

        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('email', new Email());
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

}
