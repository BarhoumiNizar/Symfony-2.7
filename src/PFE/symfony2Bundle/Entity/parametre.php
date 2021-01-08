<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * parametre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class parametre
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
     * @ORM\Column(name="nomParametre", type="string", length=50)
     */
    private $nomParametre;

    /**
     * @var string
     *
     * @ORM\Column(name="valeurParametre", type="string", length=50)
     */
    private $valeurParametre;
    /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\Capteur")
   * @ORM\JoinColumn(nullable=false)
   */
  protected $capteur;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionParametre", type="string", length=255)
     */
    private $descriptionParametre;

    /**
   * @ORM\ManyToOne(targetEntity="PFE\symfony2Bundle\Entity\grandeurMesure")
   * @ORM\JoinColumn(nullable=false)
   */
    private $unite;


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
     * Set nomParametre
     *
     * @param string $nomParametre
     *
     * @return parametre
     */
    public function setNomParametre($nomParametre)
    {
        $this->nomParametre = $nomParametre;

        return $this;
    }

    /**
     * Get nomParametre
     *
     * @return string
     */
    public function getNomParametre()
    {
        return $this->nomParametre;
    }

    /**
     * Set valeurParametre
     *
     * @param string $valeurParametre
     *
     * @return parametre
     */
    public function setValeurParametre($valeurParametre)
    {
        $this->valeurParametre = $valeurParametre;

        return $this;
    }

    /**
     * Get valeurParametre
     *
     * @return string
     */
    public function getValeurParametre()
    {
        return $this->valeurParametre;
    }

    /**
     * Set descriptionParametre
     *
     * @param string $descriptionParametre
     *
     * @return parametre
     */
    public function setDescriptionParametre($descriptionParametre)
    {
        $this->descriptionParametre = $descriptionParametre;

        return $this;
    }

    /**
     * Get descriptionParametre
     *
     * @return string
     */
    public function getDescriptionParametre()
    {
        return $this->descriptionParametre;
    }

    

    /**
     * Set capteur
     *
     * @param \PFE\symfony2Bundle\Entity\Capteur $capteur
     *
     * @return parametre
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
     * Set unite
     *
     * @param \PFE\symfony2Bundle\Entity\grandeurMesure $unite
     *
     * @return parametre
     */
    public function setUnite(\PFE\symfony2Bundle\Entity\grandeurMesure $unite)
    {
        $this->unite = $unite;

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
}
