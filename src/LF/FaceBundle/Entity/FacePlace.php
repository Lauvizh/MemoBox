<?php

namespace LF\FaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacePlace
 *
 * @ORM\Table(name="face_place")
 * @ORM\Entity(repositoryClass="LF\FaceBundle\Repository\FacePlaceRepository")
 */
class FacePlace
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
     * @ORM\Column(name="coord_x", type="string", length=128)
     */
    private $coordX;

    /**
     * @var string
     *
     * @ORM\Column(name="coord_y", type="string", length=128)
     */
    private $coordY;

    /**
     * @var int
     *
     * @ORM\Column(name="dimension", type="integer")
     */
    private $dimension;

    /**
     * @ORM\ManyToOne(targetEntity="LF\FaceBundle\Entity\Face", inversedBy="facePlaces", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $face;

    /**
     * @ORM\ManyToOne(targetEntity="LF\MediasBundle\Entity\Media", inversedBy="facePlaces", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $media;



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
     * Set coordX
     *
     * @param string $coordX
     *
     * @return FacePlace
     */
    public function setCoordX($coordX)
    {
        $this->coordX = $coordX;

        return $this;
    }

    /**
     * Get coordX
     *
     * @return string
     */
    public function getCoordX()
    {
        return $this->coordX;
    }

    /**
     * Set coordY
     *
     * @param string $coordY
     *
     * @return FacePlace
     */
    public function setCoordY($coordY)
    {
        $this->coordY = $coordY;

        return $this;
    }

    /**
     * Get coordY
     *
     * @return string
     */
    public function getCoordY()
    {
        return $this->coordY;
    }

    /**
     * Set dimension
     *
     * @param integer $dimension
     *
     * @return FacePlace
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return integer
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set face
     *
     * @param \LF\FaceBundle\Entity\Face $face
     *
     * @return FacePlace
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
     * Set media
     *
     * @param \LF\MediasBundle\Entity\Media $media
     *
     * @return FacePlace
     */
    public function setMedia(\LF\MediasBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \LF\MediasBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }
}
