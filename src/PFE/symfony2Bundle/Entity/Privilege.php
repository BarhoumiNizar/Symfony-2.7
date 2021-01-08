<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privilege
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Privilege
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
     * @ORM\Column(name="nomPrivilege", type="string", length=50)
     */
    private $nomPrivilege;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPrivilege", type="string", length=255)
     */
    private $descriptionPrivilege;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjoutPrivilege", type="datetime")
     */
    private $dateAjoutPrivilege;


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
     * Set nomPrivilege
     *
     * @param string $nomPrivilege
     *
     * @return Privilege
     */
    public function setNomPrivilege($nomPrivilege)
    {
        $this->nomPrivilege = $nomPrivilege;

        return $this;
    }

    /**
     * Get nomPrivilege
     *
     * @return string
     */
    public function getNomPrivilege()
    {
        return $this->nomPrivilege;
    }

    /**
     * Set descriptionPrivilege
     *
     * @param string $descriptionPrivilege
     *
     * @return Privilege
     */
    public function setDescriptionPrivilege($descriptionPrivilege)
    {
        $this->descriptionPrivilege = $descriptionPrivilege;

        return $this;
    }

    /**
     * Get descriptionPrivilege
     *
     * @return string
     */
    public function getDescriptionPrivilege()
    {
        return $this->descriptionPrivilege;
    }

    /**
     * Set dateAjoutPrivilege
     *
     * @param \DateTime $dateAjoutPrivilege
     *
     * @return Privilege
     */
    public function setDateAjoutPrivilege($dateAjoutPrivilege)
    {
        $this->dateAjoutPrivilege = $dateAjoutPrivilege;

        return $this;
    }

    /**
     * Get dateAjoutPrivilege
     *
     * @return \DateTime
     */
    public function getDateAjoutPrivilege()
    {
        return $this->dateAjoutPrivilege;
    }
}

