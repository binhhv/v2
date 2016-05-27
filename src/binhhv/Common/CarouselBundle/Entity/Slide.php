<?php

namespace binhhv\Common\CarouselBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Slide
 * 
 * @ORM\Table(name="slide")
 * @ORM\Entity(repositoryClass="binhhv\Common\CarouselBundle\Repository\SlideRepository")
 * @Vich\Uploadable
 */
class Slide
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="slide_image", fileNameProperty="imageName")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="imageName",type="text")
     */
    private $imageName;

    /**
     * @var string
     *
     * @ORM\Column(name="textH2", type="text")
     */
    private $textH2;

    /**
     * @var string
     *
     * @ORM\Column(name="textH4", type="string", length=255)
     */
    private $textH4;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text")
     */
    private $link;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetimetz")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetimetz")
     */
    private $endDate;


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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // if ($image) {
        //     // It is required that at least one field changes if you are using doctrine
        //     // otherwise the event listeners won't be called and the file is lost
        //     $this->updatedAt = new \DateTime('now');
        // }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }


    /**
     * Set image
     *
     * @param string $image
     *
     * @return Slide
     */
    public function setImageName($image)
    {
        $this->imageName = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set textH2
     *
     * @param string $textH2
     *
     * @return Slide
     */
    public function setTextH2($textH2)
    {
        $this->textH2 = $textH2;

        return $this;
    }

    /**
     * Get textH2
     *
     * @return string
     */
    public function getTextH2()
    {
        return $this->textH2;
    }

    /**
     * Set textH4
     *
     * @param string $textH4
     *
     * @return Slide
     */
    public function setTextH4($textH4)
    {
        $this->textH4 = $textH4;

        return $this;
    }

    /**
     * Get textH4
     *
     * @return string
     */
    public function getTextH4()
    {
        return $this->textH4;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Slide
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Slide
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Slide
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Slide
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}

