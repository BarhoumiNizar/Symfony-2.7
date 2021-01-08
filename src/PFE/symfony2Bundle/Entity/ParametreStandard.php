<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametreStandard
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ParametreStandard
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
     * @ORM\Column(name="valeurmin", type="string", length=50)
     */
    private $valeurmin;
     /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\typeCapteur")
   * @ORM\JoinColumn(nullable=false)
   */
  protected $capteurstandard;

    

    /**
     * @var string
     *
     * @ORM\Column(name="valeurmax", type="string", length=50)
     */
    private $valeurmax;

    /**
     * @var string
     *
     * @ORM\Column(name="nomStandard", type="string", length=50)
     */
    private $nomStandard;
     /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\grandeurMesure")
   * @ORM\JoinColumn(nullable=false)
   */
  private $unite;

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
     * Set nomStandard
     *
     * @param string $nomStandard
     *
     * @return ParametreStandard
     */
    public function setNomStandard($nomStandard)
    {
        $this->nomStandard = $nomStandard;

        return $this;
    }

    /**
     * Get nomStandard
     *
     * @return string
     */
    public function getNomStandard()
    {
        return $this->nomStandard;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ParametreStandard
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

    /**
     * Set unite
     *
     * @param \PFE\symfony2Bundle\Entity\grandeurMesure $unite
     *
     * @return ParametreStandard
     */
    public function setUnité(\PFE\symfony2Bundle\Entity\grandeurMesure $unite)
    {
        $this->unité = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return \PFE\symfony2Bundle\Entity\grandeurMesure
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set valeurmin
     *
     * @param string $valeurmin
     *
     * @return ParametreStandard
     */
    public function setValeurmin($valeurmin)
    {
        $this->valeurmin = $valeurmin;

        return $this;
    }

    /**
     * Get valeurmin
     *
     * @return string
     */
    public function getValeurmin()
    {
        return $this->valeurmin;
    }

    /**
     * Set valeurmax
     *
     * @param string $valeurmax
     *
     * @return ParametreStandard
     */
    public function setValeurmax($valeurmax)
    {
        $this->valeurmax = $valeurmax;

        return $this;
    }

    /**
     * Get valeurmax
     *
     * @return string
     */
    public function getValeurmax()
    {
        return $this->valeurmax;
    }

    /**
     * Set unite
     *
     * @param \PFE\symfony2Bundle\Entity\grandeurMesure $unite
     *
     * @return ParametreStandard
     */
    public function setUnite(\PFE\symfony2Bundle\Entity\grandeurMesure $unite)
    {
        $this->unite = $unite;

        return $this;
    }
    public function getName()
    {
       return $this->getNomStandard();

    }
     

   

    /**
     * Set capteurstandard
     *
     * @param \PFE\symfony2Bundle\Entity\typeCapteur $capteurstandard
     *
     * @return ParametreStandard
     */
    public function setCapteurstandard(\PFE\symfony2Bundle\Entity\typeCapteur $capteurstandard)
    {
        $this->capteurstandard = $capteurstandard;

        return $this;
    }

    /**
     * Get capteurstandard
     *
     * @return \PFE\symfony2Bundle\Entity\typeCapteur
     */
    public function getCapteurstandard()
    {
        return $this->capteurstandard;
    }
}
