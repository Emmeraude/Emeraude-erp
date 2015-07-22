<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity\ParcourtType;
use EPlan\PlanningBundle\Entity\Etape;
use EPlan\PlanningBundle\Entity\Mention;
use EPlan\PlanningBundle\Entity\Departement;
use EPlan\PlanningBundle\Entity\ObjectError;

class DivisionController extends Controller
{
    public function managePresentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $departementRepository = $em->getRepository('EPlanPlanningBundle:Departement');
        $listOfDepartement = $departementRepository ->findAll();
        if($listOfDepartement){
            $listOfParcourtTypeOfFirstDepartement = $listOfDepartement[0]->getParcourtTypes(); 
            return $this->render('EPlanPlanningBundle:Division:manageDivision.html.twig', array('departements'=>$listOfDepartement, 'parcourtTypes'=>$listOfParcourtTypeOfFirstDepartement));
        }
        $message = new ObjectError();
        $message->setTitle("Désolé, Aucun Département n'a été enregistré" );
        $message->setMessageUser('svp assurez vous que les departements ont été crées et chargez les.<br>merci!');
        return $this->render('EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig', array('message'=>$message));
    }
    
    public function loadDepartementAction(){
        $departement = new Departement();
        $departement -> setNom('Maths-Info');
        
        $mention = new Mention();
        $mention -> setNom('Informatique');
        
        $parcourtType = new ParcourtType();
        $parcourtType -> setCode('IF');
        $parcourtType -> setNom('Informatique Fondamentale');
        
        $etape = new Etape();
        $etape ->setNumero(1);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(2);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(3);
        
        $parcourtType -> addEtape($etape);
        
        $mention ->addParcourtType($parcourtType);
        
        $parcourtType = new ParcourtType();
        $parcourtType -> setCode('IN');
        $parcourtType -> setNom('Informatique');
        
        $etape = new Etape();
        $etape ->setNumero(1);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(2);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(3);
        
        $parcourtType -> addEtape($etape);
        
        $mention ->addParcourtType($parcourtType);
        
        $departement ->addMention($mention);
        
        $mention = new Mention();
        $mention -> setNom('Mathématiques');
        
        $parcourtType = new ParcourtType();
        $parcourtType -> setCode('AAG');
        $parcourtType -> setNom('Analyse Algèbre Et Géométrie');
        
        $etape = new Etape();
        $etape ->setNumero(1);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(2);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(3);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(4);
        
        $parcourtType -> addEtape($etape);
        
        $mention ->addParcourtType($parcourtType);
        
        $parcourtType = new ParcourtType();
        $parcourtType -> setCode('MAAP');
        $parcourtType -> setNom('Mathématiques Et Applications');
        
        $etape = new Etape();
        $etape ->setNumero(1);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(2);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(3);
        
        $parcourtType -> addEtape($etape);
        
        $etape = new Etape();
        $etape ->setNumero(4);
        
        $parcourtType -> addEtape($etape);
        
        $mention ->addParcourtType($parcourtType);
        
        $departement ->addMention($mention);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager ->persist($departement);
        $entityManager -> flush();
        
        return $this->redirect($this->generateUrl('e_plan_planning_manage_division'));
    }
}
