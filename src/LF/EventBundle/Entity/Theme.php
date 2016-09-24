<?php

namespace LF\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Criteria;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="LF\EventBundle\Repository\ThemeRepository")
 */
class Theme
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="home_page", type="boolean")
     */
    private $homePage;

    /**
     * @ORM\ManyToMany(targetEntity="LF\EventBundle\Entity\Event", inversedBy="themes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $events;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Theme
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set homePage
     *
     * @param boolean $homePage
     *
     * @return Theme
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return boolean
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * Add event
     *
     * @param \LF\EventBundle\Entity\Event $event
     *
     * @return Theme
     */
    public function addEvent(\LF\EventBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \LF\EventBundle\Entity\Event $event
     */
    public function removeEvent(\LF\EventBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        $criteria = Criteria::create()
        ->orderBy(array('id'=> Criteria::DESC));
        return $this->events->matching($criteria);
    }
}
