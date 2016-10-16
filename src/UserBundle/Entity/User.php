<?php
// src/userBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rst_user")
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
     * @ORM\OneToMany(targetEntity="Thread", mappedBy="user")
     */
    private $thread = null;

    /**
     * @ORM\OneToMany(targetEntity="Thread", mappedBy="user")
     */
    private $post = null;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add thread
     *
     * @param \UserBundle\Entity\Thread $thread
     * @return User
     */
    public function addThread(\UserBundle\Entity\Thread $thread)
    {
        $this->thread[] = $thread;

        return $this;
    }

    /**
     * Remove thread
     *
     * @param \UserBundle\Entity\Thread $thread
     */
    public function removeThread(\UserBundle\Entity\Thread $thread)
    {
        $this->thread->removeElement($thread);
    }

    /**
     * Get thread
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getThread()
    {
        return $this->thread;
    }
}
