<?php

namespace Futura\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="session")
 */
class Session {

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $session_id;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $session_value;
       
    
     /**
     * @ORM\Column(type="integer")
     */
    protected $session_time;
    
    
    

    /**
     * Set session_id
     *
     * @param string $sessionId
     * @return Session
     */
    public function setSessionId($sessionId)
    {
        $this->session_id = $sessionId;

        return $this;
    }

    /**
     * Get session_id
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set session_value
     *
     * @param string $sessionValue
     * @return Session
     */
    public function setSessionValue($sessionValue)
    {
        $this->session_value = $sessionValue;

        return $this;
    }

    /**
     * Get session_value
     *
     * @return string 
     */
    public function getSessionValue()
    {
        return $this->session_value;
    }

    /**
     * Set session_time
     *
     * @param \DateTime $sessionTime
     * @return Session
     */
    public function setSessionTime($sessionTime)
    {
        $this->session_time = $sessionTime;

        return $this;
    }

    /**
     * Get session_time
     *
     * @return \DateTime 
     */
    public function getSessionTime()
    {
        return $this->session_time;
    }
}
