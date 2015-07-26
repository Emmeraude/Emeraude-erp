<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParcourtType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\ParcourtTypeRepository")
 */
class ParcourtType
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12)
     */
    private $code;
    
    /**
     * @var 
     *
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Mention", inversedBy="parcourtTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mention;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\Etape", mappedBy="parcourtType", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $etapes;


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
     * @return ParcourtType
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
     * Set code
     *
     * @param string $code
     * @return ParcourtType
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
        $this->etapes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set mention
     *
     * @param \EPlan\PlanningBundle\Entity\Mention $mention
     * @return ParcourtType
     */
    public function setMention(\EPlan\PlanningBundle\Entity\Mention $mention)
    {
        $this->mention = $mention;
    
        return $this;
    }

    /**
     * Get mention
     *
     * @return \EPlan\PlanningBundle\Entity\Mention 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Add etapes
     *
     * @param \EPlan\PlanningBundle\Entity\Etape $etapes
     * @return ParcourtType
     */
    public function addEtape(\EPlan\PlanningBundle\Entity\Etape $etapes)
    {
        $this->etapes[] = $etapes;
        $etapes ->setParcourtType($this);
    
        return $this;
    }

    /**
     * Remove etapes
     *
     * @param \EPlan\PlanningBundle\Entity\Etape $etapes
     */
    public function removeEtape(\EPlan\PlanningBundle\Entity\Etape $etapes)
    {
        $this->etapes->removeElement($etapes);
    }

    /**
     * Get etapes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtapes()
    {
        return $this->etapes;
    }
    
    /**
     * Get le nombre d'étudiants du parcourt type
     *
     * @return integer 
     */
    public function getNombreEtudiants()
    {
        return 160;
    }

}
