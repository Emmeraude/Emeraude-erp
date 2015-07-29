<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="nom", type="string", length=120)
     */
    private $nom;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\Mention", mappedBy="departement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $mentions;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\Ec", mappedBy="departement")
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
     * @return Departement
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
     * Constructor
     */
    public function __construct()
    {
        $this->mentions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mentions
     *
     * @param \EPlan\PlanningBundle\Entity\Mention $mentions
     * @return Departement
     */
    public function addMention(\EPlan\PlanningBundle\Entity\Mention $mentions)
    {
        $this->mentions[] = $mentions;
        $mentions ->setDepartement($this);
    
        return $this;
    }

    /**
     * Remove mentions
     *
     * @param \EPlan\PlanningBundle\Entity\Mention $mentions
     */
    public function removeMention(\EPlan\PlanningBundle\Entity\Mention $mentions)
    {
        $this->mentions->removeElement($mentions);
    }

    /**
     * Get mentions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMentions()
    {
        return $this->mentions;
    }
    
    /**
     * Get list of all parcourtType for this department
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParcourtTypes()
    {
        $listOfParcourtType = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($this -> mentions as $mention) {
            foreach ($mention->getParcourtTypes() as $parcourtType) {
                $listOfParcourtType[] = $parcourtType;
            }
            
        }
        return $listOfParcourtType;
    }
    
    public function getNombreDeMention() {
        return $this->mentions->count();
    }

    /**
     * Add ec
     *
     * @param \EPlan\PlanningBundle\Entity\Ec $ec
     *
     * @return Departement
     */
    public function addEc(\EPlan\PlanningBundle\Entity\Ec $ec)
    {
        $this->ecs[] = $ec;

        return $this;
    }

    /**
     * Remove ec
     *
     * @param \EPlan\PlanningBundle\Entity\Ec $ec
     */
    public function removeEc(\EPlan\PlanningBundle\Entity\Ec $ec)
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
