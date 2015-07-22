<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function welcomeAction()
    {
        return $this->render('EPlanPlanningBundle:Presentation:welcome.html.twig');
    }
}
