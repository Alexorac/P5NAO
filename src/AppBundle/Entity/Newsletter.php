<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Newsletter
 *
 * @ORM\Table(name="Newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="newsletterEmail", type="string", length=255)
     */
    private $newsletterEmail;
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
     * Set newsletterEmail
     *
     * @param string $newsletterEmail
     *
     * @return newsletter
     */
    public function setNewsletterEmail($newsletterEmail)
    {
        $this->newsletterEmail = $newsletterEmail;
        return $this;
    }
    /**
     * Get newsletterEmail
     *
     * @return string
     */
    public function getNewsletterEmail()
    {
        return $this->newsletterEmail;
    }
}
