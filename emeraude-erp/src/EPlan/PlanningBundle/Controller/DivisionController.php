<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity;

class DivisionController extends Controller
{
    public function managePresentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $departementRepository = $em->getRepository('EPlanPlanningBundle:Departement');
        $listOfDepartement = $departementRepository ->findAll();
        $listOfParcourtTypeOfFirstDepartement = $listOfDepartement[0]->getParcourtTypes(); 
        return $this->render('EPlanPlanningBundle:Division:manageDivision.html.twig', array('departements'=>$listOfDepartement, 'parcourtTypes'=>$listOfParcourtTypeOfFirstDepartement));
    }
    
    public function loadDepartementAction(){
        
    }
}
