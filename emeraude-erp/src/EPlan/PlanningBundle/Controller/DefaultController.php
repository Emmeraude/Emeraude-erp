<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EPlanPlanningBundle:Default:index.html.twig', array('name' => $name));
    }
}
