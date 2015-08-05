<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcUe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\EcUeRepository")
 */
class EcUe
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
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\UE", inversedBy="ecs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ue;
	
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\UEGrille", inversedBy="ecUes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ueGrille;
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Ec", inversedBy="ecUes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;


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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return EcUe
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set ue
     *
     * @param \EPlan\PlanningBundle\Entity\UE $ue
     *
     * @return EcUe
     */
    public function setUe(\EPlan\PlanningBundle\Entity\UE $ue)
    {
        $this->ue = $ue;

        return $this;
    }

    /**
     * Get ue
     *
     * @return \EPlan\PlanningBundle\Entity\UE
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * Set ec
     *
     * @param \EPlan\PlanningBundle\Entity\Ec $ec
     *
     * @return EcUe
     */
    public function setEc(\EPlan\PlanningBundle\Entity\Ec $ec)
    {
        $this->ec = $ec;

        return $this;
    }

    /**
     * Get ec
     *
     * @return \EPlan\PlanningBundle\Entity\Ec
     */
    public function getEc()
    {
        return $this->ec;
    }
    /**
     * Set ueGrille
     *
     * @param \EPlan\PlanningBundle\Entity\UEGrille $ueGrille
     *
     * @return EcUe
     */
    public function setUeGrille(\EPlan\PlanningBundle\Entity\UEGrille $ueGrille)
    {
        $this->ueGrille = $ueGrille;

        return $this;
    }

    /**
     * Get ueGrille
     *
     * @return \EPlan\PlanningBundle\Entity\UEGrille
     */
    public function getUeGrille()
    {
        return $this->ueGrille;
    }
}
