<?php

namespace Futura\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * 
 * 
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     * 
     * @var type string
     */
    protected $firstname;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     * 
     * @var type string
     */
    protected $lastname;



    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }




    public function isAdmin(){
        return $this->hasRole('ROLE_ADMIN') || $this->hasRole('ROLE_SUPER_ADMIN');
    }
    
    public function isModerator(){
        return $this->hasRole('ROLE_MODERATOR');
    }
    
    public function getFullName(){
        return $this->firstname . " " . $this->lastname;
    }
}
