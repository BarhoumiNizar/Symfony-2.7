<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capteur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Capteur

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
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\typeCapteur")
   * @ORM\JoinColumn(nullable=false)
   */
  protected $typecapteur;
 /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\OrigineFabrication")
   * @ORM\JoinColumn(nullable=false)
   */
  private $idOrigine;
  
    /**
     * @var string
     *
     * @ORM\Column(name="nomCapteur", type="string", length=50)
     */
    private $nomCapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="modeleCapteur", type="string", length=50)
     */
    private $modeleCapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="SystemeCapteur", type="string", length=100)
     */
    private $systemeCapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="processCapteur", type="string", length=50)
     */
    private $processCapteur;

    /**
     * @var float
     *
     * @ORM\Column(name="precisionCapteur", type="float")
     */
    private $precisionCapteur;

    /**
     * @var float
     *
     * @ORM\Column(name="poidsCapteur", type="float")
     */
    private $poidsCapteur;

    /**
     * @var float
     *
     * @ORM\Column(name="capaciteCapteur", type="float")
     */
    private $capaciteCapteur;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dtePremUtilisation", type="date")
     */
    private $dtePremUtilisation;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateFabrication", type="date")
     */
    private $dateFabrication;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateExpiration", type="date")
     */
    private $dateExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCapteur", type="string", length=255)
     */
    private $descriptionCapteur;
/**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

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
     * Set nomCapteur
     *
     * @param string $nomCapteur
     *
     * @return Capteur
     */
    public function setNomCapteur($nomCapteur)
    {
        $this->nomCapteur = $nomCapteur;

        return $this;
    }

    /**
     * Get nomCapteur
     *
     * @return string
     */
    public function getNomCapteur()
    {
        return $this->nomCapteur;
    }

    /**
     * Set modeleCapteur
     *
     * @param string $modeleCapteur
     *
     * @return Capteur
     */
    public function setModeleCapteur($modeleCapteur)
    {
        $this->modeleCapteur = $modeleCapteur;

        return $this;
    }

    /**
     * Get modeleCapteur
     *
     * @return string
     */
    public function getModeleCapteur()
    {
        return $this->modeleCapteur;
    }

    /**
     * Set systemeCapteur
     *
     * @param string $systemeCapteur
     *
     * @return Capteur
     */
    public function setSystemeCapteur($systemeCapteur)
    {
        $this->systemeCapteur = $systemeCapteur;

        return $this;
    }

    /**
     * Get systemeCapteur
     *
     * @return string
     */
    public function getSystemeCapteur()
    {
        return $this->systemeCapteur;
    }

    /**
     * Set processCapteur
     *
     * @param string $processCapteur
     *
     * @return Capteur
     */
    public function setProcessCapteur($processCapteur)
    {
        $this->processCapteur = $processCapteur;

        return $this;
    }

    /**
     * Get processCapteur
     *
     * @return string
     */
    public function getProcessCapteur()
    {
        return $this->processCapteur;
    }

    /**
     * Set precisionCapteur
     *
     * @param float $precisionCapteur
     *
     * @return Capteur
     */
    public function setPrecisionCapteur($precisionCapteur)
    {
        $this->precisionCapteur = $precisionCapteur;

        return $this;
    }

    /**
     * Get precisionCapteur
     *
     * @return float
     */
    public function getPrecisionCapteur()
    {
        return $this->precisionCapteur;
    }

    /**
     * Set poidsCapteur
     *
     * @param float $poidsCapteur
     *
     * @return Capteur
     */
    public function setPoidsCapteur($poidsCapteur)
    {
        $this->poidsCapteur = $poidsCapteur;

        return $this;
    }

    /**
     * Get poidsCapteur
     *
     * @return float
     */
    public function getPoidsCapteur()
    {
        return $this->poidsCapteur;
    }

    /**
     * Set capaciteCapteur
     *
     * @param float $capaciteCapteur
     *
     * @return Capteur
     */
    public function setCapaciteCapteur($capaciteCapteur)
    {
        $this->capaciteCapteur = $capaciteCapteur;

        return $this;
    }

    /**
     * Get capaciteCapteur
     *
     * @return float
     */
    public function getCapaciteCapteur()
    {
        return $this->capaciteCapteur;
    }

    /**
     * Set dtePremUtilisation
     *
     * @param \Date $dtePremUtilisation
     *
     * @return Capteur
     */
    public function setDtePremUtilisation($dtePremUtilisation)
    {
        $this->dtePremUtilisation = $dtePremUtilisation;

        return $this;
    }

    /**
     * Get dtePremUtilisation
     *
     * @return \Date
     */
    public function getDtePremUtilisation()
    {
        return $this->dtePremUtilisation;
    }

    /**
     * Set dateFabrication
     *
     * @param \Date $dateFabrication
     *
     * @return Capteur
     */
    public function setDateFabrication($dateFabrication)
    {
        $this->dateFabrication = $dateFabrication;

        return $this;
    }

    /**
     * Get dateFabrication
     *
     * @return \Date
     */
    public function getDateFabrication()
    {
        return $this->dateFabrication;
    }

    /**
     * Set dateExpiration
     *
     * @param \Date $dateExpiration
     *
     * @return Capteur
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \Date
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set descriptionCapteur
     *
     * @param string $descriptionCapteur
     *
     * @return Capteur
     */
    public function setDescriptionCapteur($descriptionCapteur)
    {
        $this->descriptionCapteur = $descriptionCapteur;

        return $this;
    }

    /**
     * Get descriptionCapteur
     *
     * @return string
     */
    public function getDescriptionCapteur()
    {
        return $this->descriptionCapteur;
    }

    /**
     * Set typecapteur
     *
     * @param \PFE\symfony2Bundle\Entity\typeCapteur $typecapteur
     *
     * @return Capteur
     */
    public function setTypecapteur(\PFE\symfony2Bundle\Entity\typeCapteur $typecapteur)
    {
        $this->typecapteur = $typecapteur;

        return $this;
    }

    /**
     * Get typecapteur
     *
     * @return \PFE\symfony2Bundle\Entity\typeCapteur
     */
    public function getTypecapteur()
    {
        return $this->typecapteur;
    }

    /**
     * Set idOrigine
     *
     * @param \PFE\symfony2Bundle\Entity\OrigineFabrication $idOrigine
     *
     * @return Capteur
     */
    public function setIdOrigine(\PFE\symfony2Bundle\Entity\OrigineFabrication $idOrigine)
    {
        $this->idOrigine = $idOrigine;

        return $this;
    }

    /**
     * Get idOrigine
     *
     * @return \PFE\symfony2Bundle\Entity\OrigineFabrication
     */
    public function getIdOrigine()
    {
        return $this->idOrigine;
    }
     public function getName()
             {
        return $this->getNomCapteur();
    }
    

    

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Capteur
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
