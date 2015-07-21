<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EnseignantController extends Controller
{
    public function createEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig');
    }
    
    public function consultEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig');
    }
    
    public function indexEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:indexEns.html.twig');
    }
    
    public function enregEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:indexEns.html.twig');
    }
    
    public function attribEcEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig');
    }
}
