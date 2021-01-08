<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * etatCapteur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class etatCapteur
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
     * @ORM\Column(name="nomEtatCapteur", type="string", length=50)
     */
    private $nomEtatCapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEtatCapteur", type="string", length=255)
     */
    private $descriptionEtatCapteur;


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
     * Set nomEtatCapteur
     *
     * @param string $nomEtatCapteur
     *
     * @return etatCapteur
     */
    public function setNomEtatCapteur($nomEtatCapteur)
    {
        $this->nomEtatCapteur = $nomEtatCapteur;

        return $this;
    }

    /**
     * Get nomEtatCapteur
     *
     * @return string
     */
    public function getNomEtatCapteur()
    {
        return $this->nomEtatCapteur;
    }

    /**
     * Set descriptionEtatCapteur
     *
     * @param string $descriptionEtatCapteur
     *
     * @return etatCapteur
     */
    public function setDescriptionEtatCapteur($descriptionEtatCapteur)
    {
        $this->descriptionEtatCapteur = $descriptionEtatCapteur;

        return $this;
    }

    /**
     * Get descriptionEtatCapteur
     *
     * @return string
     */
    public function getDescriptionEtatCapteur()
    {
        return $this->descriptionEtatCapteur;
    }
}

