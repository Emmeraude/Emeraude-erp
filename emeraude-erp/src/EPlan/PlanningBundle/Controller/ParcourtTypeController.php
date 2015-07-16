<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParcourtTypeController extends Controller
{
    public function formViewAction()
    {
        return $this->render('EPlanPlanningBundle:ParcourtType:index.html.twig');
    }
}
