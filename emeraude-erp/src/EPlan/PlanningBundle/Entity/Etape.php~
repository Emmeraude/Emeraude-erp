<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\EtapeRepository")
 */
class Etape
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
     * @var integer
     *
     * @ORM\Column(name="numero", type="smallint")
     */
    private $numero;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\ParcourtType", inversedBy="etapes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parcourtType;


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
     * Set numero
     *
     * @param integer $numero
     * @return Etape
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set parcourtType
     *
     * @param \EPlan\PlanningBundle\Entity\ParcourtType $parcourtType
     * @return Etape
     */
    public function setParcourtType(\EPlan\PlanningBundle\Entity\ParcourtType $parcourtType)
    {
        $this->parcourtType = $parcourtType;
    
        return $this;
    }

    /**
     * Get parcourtType
     *
     * @return \EPlan\PlanningBundle\Entity\ParcourtType 
     */
    public function getParcourtType()
    {
        return $this->parcourtType;
    }
}
