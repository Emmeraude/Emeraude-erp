<?php

namespace EPlan\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPlan\PlanningBundle\Entity\EnseignantRepository")
 */
class Enseignant
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
     * @ORM\Column(name="nom", type="string", length=150)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=150)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=4)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="EPlan\PlanningBundle\Entity\Departement", inversedBy="enseignants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;
    
    /**
     * @ORM\OneToMany(targetEntity="EPlan\PlanningBundle\Entity\EnseignantEc", mappedBy="enseignant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ecsEnseignes;
    
   

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
     * @return Enseignant
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
     * Set prenom
     *
     * @param string $prenom
     * @return Enseignant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Enseignant
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Enseignant
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Enseignant
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
     * Get departement
     *
     * @return Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
    
    /**
     * Set departement
     *
     * @param Departement $departement
     * @return Enseignant 
     */
    public function setDepartement($departement)
    {
        $this->departement=$departement;
        
        return $this;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ecsEnseignes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    
    /**
     * Get ecsEnseignes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEcsEnseignes()
    {
        return $this->ecsEnseignes;
    }

    /**
     * Add ecsEnseignes
     *
     * @param \EPlan\PlanningBundle\Entity\EnseignantEc $ecsEnseigne
     *
     * @return Enseignant
     */
    public function addEcsEnseignes(\EPlan\PlanningBundle\Entity\EnseignantEc $ecsEnseigne)
    {
        $this->ecsEnseignes[] = $ecsEnseigne;
    
        return $this;
    }

    /**
     * Remove ecsEnseigne
     *
     * @param \EPlan\PlanningBundle\Entity\EnseignantEc $ecsEnseigne
     */
    public function removeEcsEnseignes(\EPlan\PlanningBundle\Entity\EnseignantEc $ecsEnseigne)
    {
        $this->ecsEnseignes->removeElement($ecsEnseigne);
    }

}
