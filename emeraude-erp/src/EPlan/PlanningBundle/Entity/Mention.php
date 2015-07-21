<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mention
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\MentionRepository")
 */
class Mention
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
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Departement", inversedBy="mentions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\ParcourtType", mappedBy="mention")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parcourtTypes;


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
     * @return Mention
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
        $this->parcourtTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set departement
     *
     * @param \EPlan\PlanningBundle\Entity\Departement $departement
     * @return Mention
     */
    public function setDepartement(\EPlan\PlanningBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return \EPlan\PlanningBundle\Entity\Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Add parcourtTypes
     *
     * @param \EPlan\PlanningBundle\Entity\ParcourtType $parcourtTypes
     * @return Mention
     */
    public function addParcourtType(\EPlan\PlanningBundle\Entity\ParcourtType $parcourtTypes)
    {
        $this->parcourtTypes[] = $parcourtTypes;
    
        return $this;
    }

    /**
     * Remove parcourtTypes
     *
     * @param \EPlan\PlanningBundle\Entity\ParcourtType $parcourtTypes
     */
    public function removeParcourtType(\EPlan\PlanningBundle\Entity\ParcourtType $parcourtTypes)
    {
        $this->parcourtTypes->removeElement($parcourtTypes);
    }

    /**
     * Get parcourtTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParcourtTypes()
    {
        return $this->parcourtTypes;
    }
}
