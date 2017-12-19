<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * TaxrefLienFile
 *
 * @ORM\Table(name="TaxrefLienFile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxrefLienFileRepository")
 */
class TaxrefLienFile
{
    /**
     * @var int
     *
     * @ORM\Column(name="taxrefLienFileId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $taxrefLienFileId;
    /**
     * @var string
     *
     * @ORM\Column(name="taxrefLienFile", type="string", length=255)
     */
    private $taxrefLienFile;
    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=255)
     */
    private $fileName;
    /**
     * @var integer
     *
     * @ORM\Column(name="fileSize", type="integer")
     */
    private $fileSize;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uploadDate", type="date")
     */
    private $uploadDate;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="date")
     */
    private $updateDate;
    /**
     * Get taxrefLienFileId
     *
     * @return int
     */
    public function getTaxrefLienFileId()
    {
        return $this->taxrefLienFileId;
    }
    /**
     * Set taxrefLienFile
     *
     * @param string $taxrefLienFile
     *
     * @return taxrefLienFile
     */
    public function setTaxrefLienFile($taxrefLienFile)
    {
        $this->taxrefLienFile = $taxrefLienFile;
        return $this;
    }
    /**
     * Get taxrefLienFile
     *
     * @return string
     */
    public function getTaxrefLienFile()
    {
        return $this->taxrefLienFile;
    }
    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return taxrefLienFile
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }
    /**
     * Set fileSize
     *
     * @param string $fileSize
     *
     * @return taxrefLienFile
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * Get fileSize
     *
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }
    /**
     * Set uploadDate
     *
     * @param \DateTime $uploadDate
     *
     * @return taxrefLienFile
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;
        return $this;
    }
    /**
     * Get uploadDate
     *
     * @return \DateTime
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }
    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return taxrefLienFile
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }
    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
}
