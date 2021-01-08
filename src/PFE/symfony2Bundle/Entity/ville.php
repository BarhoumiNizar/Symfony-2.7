<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ville
 *
 * @ORM\Table(name="villes")
 * @ORM\Entity
 */
class ville 
{   
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVille", type="string", length=50)
     */
   protected $nomVille;
    /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\Capteur")
   * @ORM\JoinColumn(nullable=false)
   */
  protected $idCapteur;
   
    /**
     * @var string
     *
     * @ORM\Column(name="localisationVille", type="string", length=50)
     */
    protected $localisationVille;

    /**
     * @var string
     *
     * @ORM\Column(name="mapVille", type="string", length=255)
     */
    protected $mapVille;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    protected $description;
    


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
     * Set nomVille
     *
     * @param string $nomVille
     *
     * @return ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set localisationVille
     *
     * @param string $localisationVille
     *
     * @return ville
     */
    public function setLocalisationVille($localisationVille)
    {
        $this->localisationVille = $localisationVille;

        return $this;
    }

    /**
     * Get localisationVille
     *
     * @return string
     */
    public function getLocalisationVille()
    {
        return $this->localisationVille;
    }

    /**
     * Set mapVille
     *
     * @param string $mapVille
     *
     * @return ville
     */
    public function setMapVille($mapVille)
    {
        $this->mapVille = $mapVille;

        return $this;
    }

    /**
     * Get mapVille
     *
     * @return string
     */
    public function getMapVille()
    {
        return $this->mapVille;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ville
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
    public function getName()
            {
        return $this->getNomVille();
    }

    /**
     * Set idCapteur
     *
     * @param \PFE\symfony2Bundle\Entity\Capteur $idCapteur
     *
     * @return ville
     */
    public function setIdCapteur(\PFE\symfony2Bundle\Entity\Capteur $idCapteur)
    {
        $this->idCapteur = $idCapteur;

        return $this;
    }

    /**
     * Get idCapteur
     *
     * @return \PFE\symfony2Bundle\Entity\Capteur
     */
    public function getIdCapteur()
    {
        return $this->idCapteur;
    }

  
}
