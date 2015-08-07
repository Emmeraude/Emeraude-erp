<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\UERepository")
 */
class UE
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
     * @ORM\Column(name="nom", type="string", length=60)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numSemestre", type="smallint")
     */
    private $numSemestre;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=8)
     */
    private $code;
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Grille", inversedBy="ues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grille;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\EcUe", mappedBy="ue", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ecs;

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
     *
     * @return UE
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
     * Set numSemestre
     *
     * @param integer $numSemestre
     *
     * @return UE
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

    /**
     * Set code
     *
     * @param string $code
     *
     * @return UE
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ecs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set grille
     *
     * @param \EPlan\PlanningBundle\Entity\Grille $grille
     *
     * @return UE
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
     * Add ec
     *
     * @param \EPlan\PlanningBundle\Entity\EcUe $ec
     *
     * @return UE
     */
    public function addEc(\EPlan\PlanningBundle\Entity\EcUe $ec)
    {
        $this->ecs[] = $ec;

        return $this;
    }

    /**
     * Remove ec
     *
     * @param \EPlan\PlanningBundle\Entity\EcUe $ec
     */
    public function removeEc(\EPlan\PlanningBundle\Entity\EcUe $ec)
    {
        $this->ecs->removeElement($ec);
    }

    /**
     * Get ecs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEcs()
    {
        return $this->ecs;
    }
}
