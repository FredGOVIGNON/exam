<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Athlete
 *
 * @ORM\Table(name="athlete")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AthleteRepository")
 */
class Athlete
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="idepreuve", type="string", length=255)
     */
    private $idepreuve;

    /**
     * @var string
     *
     * @ORM\Column(name="idtotalvalue", type="string", length=255)
     */
    private $idtotalvalue;


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
     * Set nom
     *
     * @param string $nom
     * @return Athlete
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set idepreuve
     *
     * @param string $idepreuve
     * @return Athlete
     */
    public function setIdepreuve($idepreuve)
    {
        $this->idepreuve = $idepreuve;

        return $this;
    }

    /**
     * Get idepreuve
     *
     * @return string 
     */
    public function getIdepreuve()
    {
        return $this->idepreuve;
    }

    /**
     * Set idtotalvalue
     *
     * @param string $idtotalvalue
     * @return Athlete
     */
    public function setIdtotalvalue($idtotalvalue)
    {
        $this->idtotalvalue = $idtotalvalue;

        return $this;
    }

    /**
     * Get idtotalvalue
     *
     * @return string 
     */
    public function getIdtotalvalue()
    {
        return $this->idtotalvalue;
    }
}
