<?php

namespace LF\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connections
 *
 * @ORM\Table(name="connections")
 * @ORM\Entity(repositoryClass="LF\UserBundle\Repository\ConnectionsRepository")
 */
class Connections
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
     * @ORM\ManyToOne(targetEntity="LF\UserBundle\Entity\User", inversedBy="connections")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="connection_date", type="datetime")
     */
    private $connectionDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Connections
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set connectionDate
     *
     * @param \DateTime $connectionDate
     *
     * @return Connections
     */
    public function setConnectionDate($connectionDate)
    {
        $this->connectionDate = $connectionDate;

        return $this;
    }

    /**
     * Get connectionDate
     *
     * @return \DateTime
     */
    public function getConnectionDate()
    {
        return $this->connectionDate;
    }

    /**
     * Set user
     *
     * @param \LF\UserBundle\Entity\User $user
     *
     * @return Connections
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
