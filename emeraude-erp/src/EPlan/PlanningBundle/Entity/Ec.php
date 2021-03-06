<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ec
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\EcRepository")
 */
class Ec
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
     * @ORM\Column(name="libelle", type="string", length=60)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=8)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="volHeuresTD", type="smallint")
     */
    private $volHeuresTD;

    /**
     * @var integer
     *
     * @ORM\Column(name="volHeuresCM", type="smallint")
     */
    private $volHeuresCM;

    /**
     * @var integer
     *
     * @ORM\Column(name="volHeuresTP", type="smallint")
     */
    private $volHeuresTP;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="smallint")
     */
    private $niveau;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\EcUe", mappedBy="ec")
     */
    private $ecUes;
    
    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Departement", inversedBy="ecs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;
    
     /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\EnseignantEc", mappedBy="ec")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enseignantsEc;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Ec
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Ec
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
     * Set volHeuresTD
     *
     * @param integer $volHeuresTD
     *
     * @return Ec
     */
    public function setVolHeuresTD($volHeuresTD)
    {
        $this->volHeuresTD = $volHeuresTD;

        return $this;
    }

    /**
     * Get volHeuresTD
     *
     * @return integer
     */
    public function getVolHeuresTD()
    {
        return $this->volHeuresTD;
    }

    /**
     * Set volHeuresCM
     *
     * @param integer $volHeuresCM
     *
     * @return Ec
     */
    public function setVolHeuresCM($volHeuresCM)
    {
        $this->volHeuresCM = $volHeuresCM;

        return $this;
    }

    /**
     * Get volHeuresCM
     *
     * @return integer
     */
    public function getVolHeuresCM()
    {
        return $this->volHeuresCM;
    }

    /**
     * Set volHeuresTP
     *
     * @param integer $volHeuresTP
     *
     * @return Ec
     */
    public function setVolHeuresTP($volHeuresTP)
    {
        $this->volHeuresTP = $volHeuresTP;

        return $this;
    }

    /**
     * Get volHeuresTP
     *
     * @return integer
     */
    public function getVolHeuresTP()
    {
        return $this->volHeuresTP;
    }

    /**
     * Set numSemestre
     *
     * @param integer $numSemestre
     *
     * @return Ec
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
     * Constructor
     */
    public function __construct()
    {
        $this->ecUes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseigantsEc = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add ecUe
     *
     * @param \EPlan\PlanningBundle\Entity\EcUe $ecUe
     *
     * @return Ec
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
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return Ec
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set departement
     *
     * @param \EPlan\PlanningBundle\Entity\Departement $departement
     *
     * @return Ec
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
     * Remove enseignantsEc
     *
     * @param \EPlan\PlanningBundle\Entity\EnseignantEc $ensEc
     */
    public function removeEnseignantEc(\EPlan\PlanningBundle\Entity\EnseignantEc $ensEc)
    {
        $this->enseignantsEc->removeElement($ensEc);
    }
    
    /**
     * Get enseignantsEc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignantEc()
    {
        return $this->enseignantsEc;
    }

    /**
     * Add enseignantsEc
     *
     * @param \EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc
     *
     * @return Ec
     */
    public function addEnseignantsEc(\EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc)
    {
        $this->enseignantsEc[] = $enseignantsEc;
    
        return $this;
    }

    /**
     * Remove enseignantsEc
     *
     * @param \EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc
     */
    public function removeEnseignantsEc(\EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc)
    {
        $this->enseignantsEc->removeElement($enseignantsEc);
    }

    /**
     * Get enseignantsEc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignantsEc()
    {
        return $this->enseignantsEc;
    }

}
