<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capture
 *
 * @ORM\Table(name="Captures")
 * @ORM\Entity
 */
class Capture
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
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\ville")
   
   */
  private $Ville;

     /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\Capteur")
   * @ORM\JoinColumn(nullable=false)
   */
  private $capteur;
    /**
     * @var \Date
     *
     * @ORM\Column(name="dateCapture", type="date")
     */
    private $dateCapture;

    /**
     * @var string
     *
     * @ORM\Column(name="localisationCapture", type="string", length=100)
     */
    private $localisationCapture;
    
    

    /**
     * @var string
     *
     * @ORM\Column(name="nomMesure", type="string", length=100)
     */
    private $nomMesure;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valeurMesure", type="integer")
     */
    private $valeurMesure;
/**
     * @var integer
     *
     * @ORM\Column(name="zoom", type="integer")
     */
    private $zoom;
    /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\grandeurMesure")
   * @ORM\JoinColumn(nullable=false)
   */
    private $Mesure;
    
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
     * Set dateCapture
     *
     * @param \DateTime $dateCapture
     *
     * @return Capture
     */
    public function setDateCapture($dateCapture)
    {
        $this->dateCapture = $dateCapture;

        return $this;
    }

    /**
     * Get dateCapture
     *
     * @return \DateTime
     */
    public function getDateCapture()
    {
        return $this->dateCapture;
    }

    /**
     * Set localisationCapture
     *
     * @param string $localisationCapture
     *
     * @return Capture
     */
    public function setLocalisationCapture($localisationCapture)
    {
        $this->localisationCapture = $localisationCapture;

        return $this;
    }

    /**
     * Get localisationCapture
     *
     * @return string
     */
    public function getLocalisationCapture()
    {
        return $this->localisationCapture;
    }

    /**
     * Set nomMesure
     *
     * @param string $nomMesure
     *
     * @return Capture
     */
    public function setNomMesure($nomMesure)
    {
        $this->nomMesure = $nomMesure;

        return $this;
    }

    /**
     * Get nomMesure
     *
     * @return string
     */
    public function getNomMesure()
    {
        return $this->nomMesure;
    }

    /**
     * Set valeurMesure
     *
     * @param integer $valeurMesure
     *
     * @return Capture
     */
    public function setValeurMesure($valeurMesure)
    {
        $this->valeurMesure = $valeurMesure;

        return $this;
    }

    /**
     * Get valeurMesure
     *
     * @return integer
     */
    public function getValeurMesure()
    {
        return $this->valeurMesure;
    }

    /**
     * Set zoom
     *
     * @param integer $zoom
     *
     * @return Capture
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return integer
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set ville
     *
     * @param \PFE\symfony2Bundle\Entity\ville $ville
     *
     * @return Capture
     */
    public function setVille(\PFE\symfony2Bundle\Entity\ville $ville)
    {
        $this->Ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \PFE\symfony2Bundle\Entity\ville
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * Set capteur
     *
     * @param \PFE\symfony2Bundle\Entity\Capteur $capteur
     *
     * @return Capture
     */
    public function setCapteur(\PFE\symfony2Bundle\Entity\Capteur $capteur)
    {
        $this->capteur = $capteur;

        return $this;
    }

    /**
     * Get capteur
     *
     * @return \PFE\symfony2Bundle\Entity\Capteur
     */
    public function getCapteur()
    {
        return $this->capteur;
    }

    /**
     * Set mesure
     *
     * @param \PFE\symfony2Bundle\Entity\grandeurMesure $mesure
     *
     * @return Capture
     */
    public function setMesure(\PFE\symfony2Bundle\Entity\grandeurMesure $mesure)
    {
        $this->Mesure = $mesure;

        return $this;
    }

    /**
     * Get mesure
     *
     * @return \PFE\symfony2Bundle\Entity\grandeurMesure
     */
    public function getMesure()
    {
        return $this->Mesure;
    }
}
