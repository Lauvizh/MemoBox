<?php
namespace LF\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime")
     */
    private $addDate;

    /**
     * @ORM\OneToOne(targetEntity="LF\FaceBundle\Entity\Face", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $face;

    /**
     * @ORM\ManyToMany(targetEntity="LF\EventBundle\Entity\Event", inversedBy="allowedUsers")
     * @ORM\JoinColumn(nullable=true)
     */
    private $viweableEvents;

    /**
     * @ORM\OneToMany(targetEntity="LF\EventBundle\Entity\Comment", mappedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $eventComments;

    /**
     * @ORM\OneToMany(targetEntity="LF\MediasBundle\Entity\Comment", mappedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $mediaComments;

    /**
     * @ORM\OneToMany(targetEntity="LF\UserBundle\Entity\Connections", mappedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $connections;

    public function __construct()
    {
        parent::__construct();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->viweableEvents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set face
     *
     * @param \LF\FaceBundle\Entity\Face $face
     *
     * @return User
     */
    public function setFace(\LF\FaceBundle\Entity\Face $face)
    {
        $this->face = $face;

        return $this;
    }

    /**
     * Get face
     *
     * @return \LF\FaceBundle\Entity\Face
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * Add eventComment
     *
     * @param \LF\EventBundle\Entity\Comment $eventComment
     *
     * @return User
     */
    public function addEventComment(\LF\EventBundle\Entity\Comment $eventComment)
    {
        $this->eventComments[] = $eventComment;

        return $this;
    }

    /**
     * Remove eventComment
     *
     * @param \LF\EventBundle\Entity\Comment $eventComment
     */
    public function removeEventComment(\LF\EventBundle\Entity\Comment $eventComment)
    {
        $this->eventComments->removeElement($eventComment);
    }

    /**
     * Get eventComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventComments()
    {
        return $this->eventComments;
    }

    /**
     * Add mediaComment
     *
     * @param \LF\MediasBundle\Entity\Comment $mediaComment
     *
     * @return User
     */
    public function addMediaComment(\LF\MediasBundle\Entity\Comment $mediaComment)
    {
        $this->mediaComments[] = $mediaComment;

        return $this;
    }

    /**
     * Remove mediaComment
     *
     * @param \LF\MediasBundle\Entity\Comment $mediaComment
     */
    public function removeMediaComment(\LF\MediasBundle\Entity\Comment $mediaComment)
    {
        $this->mediaComments->removeElement($mediaComment);
    }

    /**
     * Get mediaComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMediaComments()
    {
        return $this->mediaComments;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     *
     * @return User
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime
     */
    public function getAddDate()
    {
        return $this->addDate;
    }

    /**
     * Add viweableEvent
     *
     * @param \LF\EventBundle\Entity\Event $viweableEvent
     *
     * @return User
     */
    public function addViweableEvent(\LF\EventBundle\Entity\Event $viweableEvent)
    {
        $this->viweableEvents[] = $viweableEvent;

        return $this;
    }

    /**
     * Remove viweableEvent
     *
     * @param \LF\EventBundle\Entity\Event $viweableEvent
     */
    public function removeViweableEvent(\LF\EventBundle\Entity\Event $viweableEvent)
    {
        $this->viweableEvents->removeElement($viweableEvent);
    }

    /**
     * Get viweableEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getViweableEvents()
    {
        return $this->viweableEvents;
    }

    /**
     * Add connection
     *
     * @param \LF\UserBundle\Entity\User $connection
     *
     * @return User
     */
    public function addConnection(\LF\UserBundle\Entity\User $connection)
    {
        $this->connections[] = $connection;

        return $this;
    }

    /**
     * Remove connection
     *
     * @param \LF\UserBundle\Entity\User $connection
     */
    public function removeConnection(\LF\UserBundle\Entity\User $connection)
    {
        $this->connections->removeElement($connection);
    }

    /**
     * Get connections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConnections()
    {
        return $this->connections;
    }
}
