<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPhoto", type="string", length=50)
     */
    private $nomPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=50)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=50)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPhoto", type="string", length=255)
     */
    private $descriptionPhoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePrise", type="datetime")
     */
    private $datePrise;

    /**
     * @var string
     *
     * @ORM\Column(name="typeStock", type="string", length=50)
     */
    private $typeStock;


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
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Photo
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Photo
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Photo
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set descriptionPhoto
     *
     * @param string $descriptionPhoto
     *
     * @return Photo
     */
    public function setDescriptionPhoto($descriptionPhoto)
    {
        $this->descriptionPhoto = $descriptionPhoto;

        return $this;
    }

    /**
     * Get descriptionPhoto
     *
     * @return string
     */
    public function getDescriptionPhoto()
    {
        return $this->descriptionPhoto;
    }

    /**
     * Set datePrise
     *
     * @param \DateTime $datePrise
     *
     * @return Photo
     */
    public function setDatePrise($datePrise)
    {
        $this->datePrise = $datePrise;

        return $this;
    }

    /**
     * Get datePrise
     *
     * @return \DateTime
     */
    public function getDatePrise()
    {
        return $this->datePrise;
    }

    /**
     * Set typeStock
     *
     * @param string $typeStock
     *
     * @return Photo
     */
    public function setTypeStock($typeStock)
    {
        $this->typeStock = $typeStock;

        return $this;
    }

    /**
     * Get typeStock
     *
     * @return string
     */
    public function getTypeStock()
    {
        return $this->typeStock;
    }
}

