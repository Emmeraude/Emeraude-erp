<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UEGrille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\UEGrilleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class UEGrille
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
     * @ORM\Column(name="quality", type="string", length=60)
     */
    private $quality;
    
    /**
     * @var smallint
     *
     * @ORM\Column(name="numSemestre", type="smallint")
     */
    private $numSemestre;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\UE", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ue;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\EcUe", mappedBy="ueGrille", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ecUes;
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Grille", inversedBy="ueGrilles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grille;


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
     * Constructor
     */
    public function __construct()
    {
        $this->ecUes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set ue
     *
     * @param \EPlan\PlanningBundle\Entity\UE $ue
     *
     * @return UEGrille
     */
    public function setUe(\EPlan\PlanningBundle\Entity\UE $ue)
    {
        $this->ue = $ue;

        return $this;
    }
    
     /**
     * @ORM\PrePersist()
     */
    public function loadNumSemestre()
    {
        $this->numSemestre = $this->grille->getNumeroSemestre();
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
    
    
    public function getEcs()
    {
        return $this->ecs;
    }
    
    public function addEc(\EPlan\PlanningBundle\Entity\Ec $ec)
    {
        $this->ecs[] = $ec;

        return $this;
    }
    
    public function removeEc(\EPlan\PlanningBundle\Entity\Ec $ecUe)
    {
        $this->ecs->removeElement($ec);
    }

    /**
     * Add ecUe
     *
     * @param \EPlan\PlanningBundle\Entity\EcUe $ecUe
     *
     * @return UEGrille
     */
    public function addEcUe(\EPlan\PlanningBundle\Entity\EcUe $ecUe)
    {
        $this->ecUes[] = $ecUe;

        return $this;
    }

    /**
     * Remove ecUe
     *
     * @param \EPlan\PlanningBundle\Entity\EcUe $ecUe
     */
    public function removeEcUe(\EPlan\PlanningBundle\Entity\EcUe $ecUe)
    {
        $this->ecUes->removeElement($ecUe);
    }

    /**
     * Get ecUes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEcUes()
    {
        return $this->ecUes;
    }

    /**
     * Set grille
     *
     * @param \EPlan\PlanningBundle\Entity\Grille $grille
     *
     * @return UEGrille
     */
    public function setGrille(\EPlan\PlanningBundle\Entity\Grille $grille)
    {
        $this->grille = $grille;

        return $this;
    }

    /**
     * Get grille
     *
     * @return \EPlan\PlanningBundle\Entity\Grille
     */
    public function getGrille()
    {
        return $this->grille;
    }

    /**
     * Set quality
     *
     * @param string $quality
     *
     * @return UEGrille
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set numSemestre
     *
     * @param integer $numSemestre
     *
     * @return UEGrille
     */
    public function setNumSemestre($numSemestre)
    {
        $this->numSemestre = $numSemestre;

        return $this;
    }

    /**
     * Get numSemestre
     *
     * @return integer
     */
    public function getNumSemestre()
    {
        return $this->numSemestre;
    }
}
