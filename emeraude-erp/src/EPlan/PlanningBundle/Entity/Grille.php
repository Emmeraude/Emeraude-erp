<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\GrilleRepository")
 */
class Grille
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
     * @ORM\Column(name="titre", type="string", length=120)
     */
    private $titre;
    
    /**
     * @var smallint
     *
     * @ORM\Column(name="numeroSemestre", type="smallint")
     */
    private $numeroSemestre;
    
    /**
     * @ORM\OneToOne(targetEntity="EPlan\PlanningBundle\Entity\Etape", mappedBy="grille")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etape;

    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\UE", mappedBy="grille", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ues;

    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\UEGrille", mappedBy="grille", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ueGrilles;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Grille
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ue
     *
     * @param \EPlan\PlanningBundle\Entity\UE $ue
     *
     * @return Grille
     */
    public function addUe(\EPlan\PlanningBundle\Entity\UE $ue)
    {
        $this->ues[] = $ue;

	}
	
	/**
     * Set etape
     *
     * @param \EPlan\PlanningBundle\Entity\Etape $etape
     *
     * @return Grille
     */
    public function setEtape(\EPlan\PlanningBundle\Entity\Etape $etape)
    {
        $etape ->setGrille($this);
        $this->etape = $etape;
        return $this;
    }

    /**
     * Add ueGrille
     *
     * @param \EPlan\PlanningBundle\Entity\UEGrile $ueGrille
     *
     * @return Grille
     */
    public function addUeGrille(\EPlan\PlanningBundle\Entity\UEGrille $ueGrille)
    {
        $ueGrille->setGrille($this);
        $this->ueGrilles[] = $ueGrille;
        return $this;
    }

    /**
     * Remove ue
     *
     * @param \EPlan\PlanningBundle\Entity\UE $ue
     */
    public function removeUe(\EPlan\PlanningBundle\Entity\UE $ue)
    {
        $this->ues->removeElement($ue);
    }

    /**
     * Get ues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUes()
    {
        return $this->ues;
    }
 
	
    /**
     * Remove ueGrille
     *
     * @param \EPlan\PlanningBundle\Entity\UEGrile $ueGrille
     */
    public function removeUeGrille(\EPlan\PlanningBundle\Entity\UEGrille $ueGrille)
    {
        $this->ueGrilles->removeElement($ueGrille);
    }

    /**
     * Get ueGrilles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUeGrilles()
    {
        return $this->ueGrilles;
    }

    /**
     * Set numeroSemestre
     *
     * @param integer $numeroSemestre
     *
     * @return Grille
     */
    public function setNumeroSemestre($numeroSemestre)
    {
        $this->numeroSemestre = $numeroSemestre;

        return $this;
    }

    /**
     * Get etape
     *
     * @return \EPlan\PlanningBundle\Entity\Etape
     */
    public function getEtape()
    {
        return $this->etape;
	}
	/**
     * Get numeroSemestre
     *
     * @return integer
     */
    public function getNumeroSemestre()
    {
        return $this->numeroSemestre;
    }
    
    /**
     *
     * @return integer
     */
    public function getNombreUes()
    {
        return $this->ueGrilles->count();
    }
}
