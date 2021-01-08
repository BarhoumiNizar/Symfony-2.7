<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatUtilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EtatUtilisateur
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
     * @ORM\Column(name="nomEtatUtilisateur", type="string", length=50)
     */
    private $nomEtatUtilisateur;

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
     * Set nomEtatUtilisateur
     *
     * @param string $nomEtatUtilisateur
     *
     * @return EtatUtilisateur
     */
    public function setNomEtatUtilisateur($nomEtatUtilisateur)
    {
        $this->nomEtatUtilisateur = $nomEtatUtilisateur;

        return $this;
    }

    /**
     * Get nomEtatUtilisateur
     *
     * @return string
     */
    public function getNomEtatUtilisateur()
    {
        return $this->nomEtatUtilisateur;
    }

    /**
     * Set dateActivation
     *
     * @param \DateTime $dateActivation
     *
     * @return EtatUtilisateur
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
     * @return EtatUtilisateur
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

