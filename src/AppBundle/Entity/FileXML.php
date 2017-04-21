<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * FileXML
 *
 * @ORM\Table(name="file_x_m_l")
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FileXMLRepository")
 */
class FileXML
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
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $file1;

    /**
     * @Vich\UploadableField(mapping="filexml", fileNameProperty="file1")
     * @var File
     */
    private $fileXml1;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function setFileXml1(File $file1 = null)
    {
        $this->fileXml1 = $file1;
    }

    public function getFileXml1()
    {
        return $this->fileXml1;
    }

    public function setFile1($file1)
    {
        $this->file1 = $file1;
    }

    public function getFile1()
    {
        return $this->file1;
    }
}
