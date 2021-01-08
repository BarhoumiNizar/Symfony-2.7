<?php

namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrigineFabrication
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OrigineFabrication
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
     * @ORM\Column(name="nomOrigine", type="string", length=50)
     */
    private $nomOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="localisationOrigine", type="string", length=50)
     */
    private $localisationOrigine;


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
     * Set nomOrigine
     *
     * @param string $nomOrigine
     *
     * @return OrigineFabrication
     */
    public function setNomOrigine($nomOrigine)
    {
        $this->nomOrigine = $nomOrigine;

        return $this;
    }

    /**
     * Get nomOrigine
     *
     * @return string
     */
    public function getNomOrigine()
    {
        return $this->nomOrigine;
    }

    /**
     * Set localisationOrigine
     *
     * @param string $localisationOrigine
     *
     * @return OrigineFabrication
     */
    public function setLocalisationOrigine($localisationOrigine)
    {
        $this->localisationOrigine = $localisationOrigine;

        return $this;
    }

    /**
     * Get localisationOrigine
     *
     * @return string
     */
    public function getLocalisationOrigine()
    {
        return $this->localisationOrigine;
    }
    public function getName()
    {
       return $this->getNomOrigine();
    }
}

