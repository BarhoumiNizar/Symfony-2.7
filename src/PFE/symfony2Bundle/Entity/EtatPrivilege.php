<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatPrivilege
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EtatPrivilege
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
     * @ORM\Column(name="nomEtatPrivilege", type="string", length=50)
     */
    private $nomEtatPrivilege;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateActivation", type="datetime")
     */
    private $dateActivation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set nomEtatPrivilege
     *
     * @param string $nomEtatPrivilege
     *
     * @return EtatPrivilege
     */
    public function setNomEtatPrivilege($nomEtatPrivilege)
    {
        $this->nomEtatPrivilege = $nomEtatPrivilege;

        return $this;
    }

    /**
     * Get nomEtatPrivilege
     *
     * @return string
     */
    public function getNomEtatPrivilege()
    {
        return $this->nomEtatPrivilege;
    }

    /**
     * Set dateActivation
     *
     * @param \DateTime $dateActivation
     *
     * @return EtatPrivilege
     */
    public function setDateActivation($dateActivation)
    {
        $this->dateActivation = $dateActivation;

        return $this;
    }

    /**
     * Get dateActivation
     *
     * @return \DateTime
     */
    public function getDateActivation()
    {
        return $this->dateActivation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EtatPrivilege
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

