<?php
// src/userBundle/Entity/Thread.php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rst_threads")
 */
class Thread
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $text;

    /**
     * @ORM\Column(type="text")
     */
    protected $subject;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $timeCreation;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $timeExpiry;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="thread")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;







    public function __construct()
    {
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Thread
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Thread
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set timeCreation
     *
     * @param \DateTime $timeCreation
     * @return Thread
     */
    public function setTimeCreation($timeCreation)
    {
        $this->timeCreation = $timeCreation;

        return $this;
    }

    /**
     * Get timeCreation
     *
     * @return \DateTime 
     */
    public function getTimeCreation()
    {
        return $this->timeCreation;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return Thread
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
