<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Observation
 *
 * @ORM\Table(name="Oservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObservationRepository")
 */
class Observation
{
    const STATUS_DRAFT      = 1; //brouillon
    const STATUS_WAITING    = 2; //en attente de validation
    const STATUS_VALIDATE   = 3; //validé
    const STATUS_REFUSE     = 4; //refusé

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="observationDate", type="date")
     */
    private $observationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="observationComment", type="string", length=255, nullable=true)
     */
    private $observationComment;

    /**
     * @var string
     *
     * @ORM\Column(name="observationSignalementComment", type="string", length=255, nullable=true)
     */
    private $observationSignalementComment;

    /**
     * @var float
     *
     * @ORM\Column(name="observationLatitude", type="float")
     */
    private $observationLatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="observationLongitude", type="float")
     */
    private $observationLongitude;

    /**
     * @var int
     *
     * @ORM\Column(name="observationStatus", type="integer")
     */
    private $observationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="observationEnvironment", type="string", length=255)
     */
    private $observationEnvironment;

    /**
     * @var string
     *
     * @ORM\Column(name="observationClimat", type="string", length=255)
     */
    private $observationClimat;

    /**
     * @var int
     *
     * @ORM\Column(name="observationNumber", type="integer")
     */
    private $observationNumber;

    /**
     * @var Taxref
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Taxref")
     */
    private $taxref;

    /**
     * @var user
     *
     * @ORM\Column(name="user", type="string", length=255)
     * @ORM\ManyToOne()
     */
    private $user;

    /**
     * @var observationImage
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ObservationImage", mappedBy="observation", cascade="persist")
     * @ORM\Column(name="images", type="string", length=255)
     */
    private $observationImages;

    /**
     * @var bool
     *
     * @ORM\Column(name="observationPublication", type="bool")
     */
    private $observationPublication;


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
     * Set observationDate
     *
     * @param \DateTime $observationDate
     *
     * @return observation
     */
    public function setObservationDate($observationDate)
    {
        $this->observationDate = $observationDate;

        return $this;
    }

    /**
     * Get observationDate
     *
     * @return \DateTime
     */
    public function getObservationDate()
    {
        return $this->observationDate;
    }

    /**
 * Set observationComment
 *
 * @param string $observationComment
 *
 * @return observation
 */
    public function setObservationComment($observationComment)
    {
        $this->observationComment = $observationComment;

        return $this;
    }

    /**
     * Get observationComment
     *
     * @return string
     */
    public function getObservationComment()
    {
        return $this->observationComment;
    }

    /**
     * Set observationSignalementComment
     *
     * @param string $observationSignalementComment
     *
     * @return observation
     */
    public function setObservationSignalementComment($observationSignalementComment)
    {
        $this->observationSignalementComment = $observationSignalementComment;

        return $this;
    }

    /**
     * Get observationSignalementComment
     *
     * @return string
     */
    public function getObservationSignalementComment()
    {
        return $this->observationSignalementComment;
    }

    /**
     * Set latitude
     *
     * @param float $observationLatitude
     *
     * @return observation
     */
    public function setObservationLatitude($observationLatitude)
    {
        $this->observationLatitude = $observationLatitude;

        return $this;
    }

    /**
     * Get observationLatitude
     *
     * @return float
     */
    public function getObservationLatitude()
    {
        return $this->observationLatitude;
    }

    /**
     * Set observationLongitude
     *
     * @param float $observationLongitude
     *
     * @return observation
     */
    public function setObservationLongitude($observationLongitude)
    {
        $this->observationLongitude = $observationLongitude;

        return $this;
    }

    /**
     * Get observationLongitude
     *
     * @return float
     */
    public function getObservationLongitude()
    {
        return $this->observationLongitude;
    }

    /**
     * Set observationStatus
     *
     * @param integer $observationStatus
     *
     * @return observation
     */
    public function setObservationStatus($observationStatus)
    {
        $this->observationStatus = $observationStatus;

        return $this;
    }

    /**
     * Get observationStatus
     *
     * @return int
     */
    public function getObservationStatus()
    {
        return $this->observationStatus;
    }

    /**
     * Set observationEnvironment
     *
     * @param string $observationEnvironment
     *
     * @return observation
     */
    public function setObservationEnvironment($observationEnvironment)
    {
        $this->observationEnvironment = $observationEnvironment;

        return $this;
    }

    /**
     * Get observationEnvironment
     *
     * @return string
     */
    public function getObservationEnvironment()
    {
        return $this->observationEnvironment;
    }

    /**
     * Set observationClimat
     *
     * @param string $observationClimat
     *
     * @return observation
     */
    public function setObservationClimat($observationClimat)
    {
        $this->observationClimat = $observationClimat;

        return $this;
    }

    /**
     * Get observationClimat
     *
     * @return string
     */
    public function getObservationClimat()
    {
        return $this->observationClimat;
    }

    /**
     * Set observationNumber
     *
     * @param integer $observationNumber
     *
     * @return observation
     */
    public function setObservationNumber($observationNumber)
    {
        $this->observationNumber = $observationNumber;

        return $this;
    }

    /**
     * Get observationNumber
     *
     * @return int
     */
    public function getObservationNumber()
    {
        return $this->observationNumber;
    }

    /**
     * Set taxref
     *
     * @param string $taxref
     *
     * @return observation
     */
    public function setTaxref($taxref)
    {
        $this->taxref = $taxref;

        return $this;
    }

    /**
     * Get taxref
     *
     * @return string
     */
    public function getTaxref()
    {
        return $this->taxref;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return observation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set observationImages
     *
     * @param string $observationImages
     *
     * @return observation
     */
    public function setObservationImages($observationImages)
    {
        $this->observationImages = $observationImages;

        return $this;
    }

    /**
     * Get observationImages
     *
     * @return string
     */
    public function getObservationImages()
    {
        return $this->observationImages;
    }

    /**
     * Set observationPublication
     *
     * @param string $observationPublication
     *
     * @return observation
     */
    public function setObservationPublication($observationPublication)
    {
        $this->observationPublication = $observationPublication;

        return $this;
    }

    /**
     * Get observationPublication
     *
     * @return string
     */
    public function getObservationPublication()
    {
        return $this->observationPublication;
    }
}

