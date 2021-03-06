<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * grandeurMesure
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class grandeurMesure
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
     * @ORM\Column(name="nomUniteMesure", type="string", length=50)
     */
    private $nomUniteMesure;

    /**
     * @var string
     *
     * @ORM\Column(name="normeUniteMesure", type="string", length=50)
     */
    private $normeUniteMesure;

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
     * Set nomUniteMesure
     *
     * @param string $nomUniteMesure
     *
     * @return grandeurMesure
     */
    public function setNomUniteMesure($nomUniteMesure)
    {
        $this->nomUniteMesure = $nomUniteMesure;

        return $this;
    }

    /**
     * Get nomUniteMesure
     *
     * @return string
     */
    public function getNomUniteMesure()
    {
        return $this->nomUniteMesure;
    }

    /**
     * Set normeUniteMesure
     *
     * @param string $normeUniteMesure
     *
     * @return grandeurMesure
     */
    public function setNormeUniteMesure($normeUniteMesure)
    {
        $this->normeUniteMesure = $normeUniteMesure;

        return $this;
    }

    /**
     * Get normeUniteMesure
     *
     * @return string
     */
    public function getNormeUniteMesure()
    {
        return $this->normeUniteMesure;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return grandeurMesure
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
        return $this->getNomUniteMesure();
    }
}
