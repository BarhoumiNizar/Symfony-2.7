<?php
namespace PFE\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SessionUser
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
     * @ORM\Column(name="dateDebutSession", type="string",length=255)
     */
    private $dateDebutSession;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFinSession", type="string",length=255,nullable=true)
     */
    private $dateFinSession;
    
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

   


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
     * Set user
     *
     * @param string $user
     *
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set dateDebutSession
     *
     * @param string $dateDebutSession
     *
     * @return SessionUser
     */
    public function setDateDebutSession($dateDebutSession)
    {
        $this->dateDebutSession = $dateDebutSession;

        return $this;
    }

    /**
     * Get dateDebutSession
     *
     * @return string
     */
    public function getDateDebutSession()
    {
        return $this->dateDebutSession;
    }

    /**
     * Set dateFinSession
     *
     * @param string $dateFinSession
     *
     * @return SessionUser
     */
    public function setDateFinSession($dateFinSession)
    {
        $this->dateFinSession = $dateFinSession;

        return $this;
    }

    /**
     * Get dateFinSession
     *
     * @return string
     */
    public function getDateFinSession()
    {
        return $this->dateFinSession;
    }
}
