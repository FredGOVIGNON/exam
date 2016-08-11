<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoteRepository")
 */
class Vote
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
     * @ORM\Column(name="idathlete", type="string", length=255)
     */
    private $idathlete;

    /**
     * @var string
     *
     * @ORM\Column(name="idepreuve", type="string", length=255)
     */
    private $idepreuve;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="totalvalue", type="string", length=255)
     */
    private $totalvalue;


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
     * Set iduser
     *
     * @param string $iduser
     * @return Vote
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idepreuve
     *
     * @param string $idepreuve
     * @return Vote
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
     * Set value
     *
     * @param string $value
     * @return Vote
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set totalvalue
     *
     * @param string $totalvalue
     * @return Vote
     */
    public function setTotalvalue($totalvalue)
    {
        $this->totalvalue = $totalvalue;

        return $this;
    }

    /**
     * Get totalvalue
     *
     * @return string 
     */
    public function getTotalvalue()
    {
        return $this->totalvalue;
    }
}
