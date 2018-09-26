<?php

namespace BackendBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="$username", type="string", length=255)
     */
    private $username;
    
    /**
     * @var string
     *
     * @ORM\Column(name="roles",type="simple_array")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="last", type="datetime")
     */
    private $last;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->getName();
    }

    function eraseCredentials() {
        
    }
    
    public function __construct() {
        $this->setLast(new \DateTime());
        $this->roles = [];
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }
    
    /**
     * Set role
     *
     * @param array $role
     * @return User
     */
    public function addRole($role) {
        $this->roles[] = $role;

        return $this;
    }
    
    /**
     * Remove role
     *
     * @param array $role
     * @return User
     */
    public function removeRole($role) {
        for ($i = 0; $i < sizeof($this->roles); $i++) {
            if ($this->roles[$i] === $role) {
                array_splice($this->roles, $i, 1);
            }
        }
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles() {
        return $this->roles;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set Last
     *
     * @param date $last
     * @return User
     */
    public function setLast($last) {
        $this->last = $last;

        //return $this;
    }

    /**
     * Get Last
     *
     * @return date 
     */
    public function getLast() {
        return $this->last;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }
}
