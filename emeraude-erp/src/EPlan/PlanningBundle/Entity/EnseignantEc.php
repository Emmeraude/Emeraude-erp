<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnseignantEc
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\EnseignantEcRepository")
 */
class EnseignantEc {
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Enseignant", inversedBy="ecsEnseignes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseignant;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Ec", inversedBy="enseignantsEc")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;
    
    /**
     * @var string
     *
     * @ORM\column(name="type", type="string", length=2) 
     * @ORM\Id
     */
    private $type;
    
    
    /**
     * Get enseignant
     *
     * @return \EPlan\PlanningBundle\Entity\Enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
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
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EnseignantEc
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Set enseignant
     *
     * @param \EPlan\PlanningBundle\Entity\Enseignant $enseignant
     *
     * @return EnseignantEc
     */
    public function setEnseignant(\EPlan\PlanningBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Set ec
     *
     * @param \EPlan\PlanningBundle\Entity\Ec $ec
     *
     * @return EnseignantEc
     */
    public function setEc(\EPlan\PlanningBundle\Entity\Ec $ec)
    {
        $this->ec = $ec;
    
        return $this;
    }
}
