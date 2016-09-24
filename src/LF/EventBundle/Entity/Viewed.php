<?php

namespace LF\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viewed
 *
 * @ORM\Table(name="event_viewed")
 * @ORM\Entity(repositoryClass="LF\EventBundle\Repository\ViewedRepository")
 */
class Viewed
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="LF\EventBundle\Entity\Event",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="LF\UserBundle\Entity\User",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="viewing_datetime", type="datetime")
     */
    private $viewingDatetime;

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
     * Set viewingDatetime
     *
     * @param \DateTime $viewingDatetime
     *
     * @return Viewed
     */
    public function setViewingDatetime($viewingDatetime)
    {
        $this->viewingDatetime = $viewingDatetime;

        return $this;
    }

    /**
     * Get viewingDatetime
     *
     * @return \DateTime
     */
    public function getViewingDatetime()
    {
        return $this->viewingDatetime;
    }

    /**
     * Set event
     *
     * @param \LF\EventBundle\Entity\Event $event
     *
     * @return Viewed
     */
    public function setEvent(\LF\EventBundle\Entity\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \LF\EventBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set user
     *
     * @param \LF\UserBundle\Entity\User $user
     *
     * @return Viewed
     */
    public function setUser(\LF\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LF\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
