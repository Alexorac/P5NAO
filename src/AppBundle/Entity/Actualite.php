<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\ActualiteImage;

/**
 * Actualite
 *
 * @ORM\Table(name="Actualite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActualiteRepository")
 */
class Actualite
{
    const NEWS_STATUS_DRAFT      = 1; //brouillon
    const NEWS_STATUS_PUBLISHED  = 2; //publié
    const NEWS_STATUS_ARCHIVED   = 3; //archivé
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
     * @ORM\Column(name="actualiteAuthor", type="string", length=255)
     */
    private $actualiteAuthor;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiteDate", type="date")
     */
    private $actualiteDate;
    /**
     * @var string
     *
     * @ORM\Column(name="actualiteTitle", type="string", length=255)
     */
    private $actualiteTitle;
    /**
     * @var string
     *
     * @ORM\Column(name="actualiteArticle", type="text")
     */
    private $actualiteArticle;
    /**
     * @var string
     *
     * @ORM\Column(name="actualiteStatus", type="string", length=255)
     */
    private $actualiteStatus;
    /**
     * @var string
     *
     * @ORM\Column(name="actualiteCategory", type="string", length=255)
     */
    private $actualiteCategory;
    /**
     * @var string
     * @ORM\Column( name="actualiteImages", type="string", nullable = true)
     *
     * @ORM\OneToMany(targetEntity="ActualiteImage", mappedBy="actualite", cascade="persist")
     * @Assert\NotBlank(message="Ajouter une image jpg")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $actualiteImages;
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
     * Set actualiteAuthor
     *
     * @param string $actualiteAuthor
     *
     * @return actualite
     */
    public function setActualiteAuthor($actualiteAuthor)
    {
        $this->actualiteAuthor = $actualiteAuthor;
        return $this;
    }
    /**
     * Get actualiteAuthor
     *
     * @return string
     */
    public function getActualiteAuthor()
    {
        return $this->actualiteAuthor;
    }
    /**
     * Set actualiteDate
     *
     * @param \DateTime $actualiteDate
     *
     * @return actualite
     */
    public function setActualiteDate($actualiteDate)
    {
        $this->actualiteDate = $actualiteDate;
        return $this;
    }
    /**
     * Get actualiteDate
     *
     * @return \DateTime
     */
    public function getActualiteDate()
    {
        return $this->actualiteDate;
    }
    /**
     * Set actualiteTitle
     *
     * @param string $actualiteTitle
     *
     * @return actualite
     */
    public function setActualiteTitle($actualiteTitle)
    {
        $this->actualiteTitle = $actualiteTitle;
        return $this;
    }
    /**
     * Get actualiteTitle
     *
     * @return string
     */
    public function getActualiteTitle()
    {
        return $this->actualiteTitle;
    }
    /**
     * Set actualiteArticle
     *
     * @param string $actualiteArticle
     *
     * @return actualite
     */
    public function setActualiteArticle($actualiteArticle)
    {
        $this->actualiteArticle = $actualiteArticle;
        return $this;
    }
    /**
     * Get actualiteArticle
     *
     * @return string
     */
    public function getActualiteArticle()
    {
        return $this->actualiteArticle;
    }
    /**
     * Set actualiteStatus
     *
     * @param string $actualiteStatus
     *
     * @return actualite
     */
    public function setActualiteStatus($actualiteStatus)
    {
        $this->actualiteStatus = $actualiteStatus;
        return $this;
    }
    /**
     * Get actualiteStatus
     *
     * @return string
     */
    public function getActualiteStatus()
    {
        return $this->actualiteStatus;
    }
    /**
     * Set actualiteCategory
     *
     * @param string $actualiteCategory
     *
     * @return actualite
     */
    public function setActualiteCategory($actualiteCategory)
    {
        $this->actualiteCategory = $actualiteCategory;
        return $this;
    }
    /**
     * Get actualiteCategory
     *
     * @return string
     */
    public function getActualiteCategory()
    {
        return $this->actualiteCategory;
    }


    /**
     * Set actualiteImages
     *
     * @param string $actualiteImages
     *
     * @return Actualite
     */
    public function setActualiteImages($actualiteImages)
    {
        $this->actualiteImages = $actualiteImages;

        return $this;
    }

    /**
     * Get actualiteImages
     *
     * @return string
     */
    public function getActualiteImages()
    {
        return $this->actualiteImages;
    }
}
