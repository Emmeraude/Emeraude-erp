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
     * Set etape
     *
     * @param \EPlan\PlanningBundle\Entity\Etape $etape
     *
     * @return Grille
     */
    public function setEtape(\EPlan\PlanningBundle\Entity\Etape $etape)
    {
        $this->etape = $etape;

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
}
