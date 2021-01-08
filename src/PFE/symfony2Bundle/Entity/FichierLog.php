<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichierLog
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FichierLog
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
     * @ORM\Column(name="nomFichierLog", type="string", length=50)
     */
    private $nomFichierLog;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFichier", type="string", length=255)
     */
    private $descriptionFichier;


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
     * Set nomFichierLog
     *
     * @param string $nomFichierLog
     *
     * @return FichierLog
     */
    public function setNomFichierLog($nomFichierLog)
    {
        $this->nomFichierLog = $nomFichierLog;

        return $this;
    }

    /**
     * Get nomFichierLog
     *
     * @return string
     */
    public function getNomFichierLog()
    {
        return $this->nomFichierLog;
    }

    /**
     * Set descriptionFichier
     *
     * @param string $descriptionFichier
     *
     * @return FichierLog
     */
    public function setDescriptionFichier($descriptionFichier)
    {
        $this->descriptionFichier = $descriptionFichier;

        return $this;
    }

    /**
     * Get descriptionFichier
     *
     * @return string
     */
    public function getDescriptionFichier()
    {
        return $this->descriptionFichier;
    }
}

