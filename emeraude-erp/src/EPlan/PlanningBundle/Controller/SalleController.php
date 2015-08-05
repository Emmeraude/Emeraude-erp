<?php
namespace EPlan\PlanningBundle\Controller;
use EPlan\PlanningBundle\Salle;
use EPlan\PlanningBundle\Disponibilite;
use EPlan\PlanningBundle\Entity\ObjectError;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SalleController extends Controller
{
    public function salleAction()
    {
		/**
		    $em = $this->getDoctrine()->getManager();
			 $salleRepository = $em->getRepository('EPlanPlanningBundle:Salle');
			 $listOfSalle = $salleRepository ->findAll();
			  if($listOfSalle){
            $listOfDisponibiliteOfFirstSalle = $listOfSalle[0]->getNom(); 
            return $this->render('EPlanPlanningBundle:Division:manageDivision.html.twig', array('disponibilite'=>$listOfSalle, 'salle'=> $listOfDisponibiliteOfFirstSalle));
        }
		 $message = new ObjectError();
        $message->setTitle("Désolé, Aucune salle n'a été enregistré" );
        $message->setMessageUser('svp assurez vous que les salle ont été alloues et chargez les.<br>merci!');
        return $this->render('EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig', array('message'=>$message));
    }
	     public function loadSalleAction(){
        $salle = new Salle();
        $salle -> setNom('S001');
		 $disponibilite = new Disponibilite();
         $disponibilite -> setJour('lundi');
		    $salle -> addSalle($nom);
		       $salle = new Salle();
               $salle -> setcapacite('500');
		   
		    $salle -> addSalle($nom);
        
              $salle = new salle();
               $salle ->setposition('batiment Rudolph douala mange bell');
			  
		    $salle -> addSalle($nom);
        
             $salle = new salle();
             $salle ->setjourOuverture('');
			 
		    $salle -> addSalle($nom);
        
              $salle = new salle();
              $salle ->setjourFermeture('');
			  
		    $disponibilite ->addSalle($salle);
			   
	    $entityManager = $this->getDoctrine()->getManager();
        $entityManager ->persist($disponibilite);
        $entityManager -> flush();
			  	
      
		
		 
	*/		  
		  
        return $this->render('EPlanPlanningBundle:ParcourtType:salleTemplate.html.twig');
    }
}
