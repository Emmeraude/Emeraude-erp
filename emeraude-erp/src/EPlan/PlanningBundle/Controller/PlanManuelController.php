<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PlanManuelController extends Controller
{
    public function indexPlanManuelAction()
    {
        
        return $this->render('EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig');
    }
    
    public function gpePlanManuelAction()
    {
     
   /* // J'ai raccourci cette partie, car c'est plus rapide à écrire!
    $form = $this->createFormBuilder($param)
                 ->add('type','text')
                 ->add('niveau','number')
                 ->add('Semestre','number')
                 ->getForm();
    */
    // On récupère la requête
    $request = $this->get('request');
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
       //$nbJours=$request->get('type');
         return $this->render('EPlanPlanningBundle:Plannification:mention.html.twig',array('type'=>$request->get('type'),'niveau'=>$request->get('niveau'),'semestre'=>$request->get('semestre')));
       
        //return $this->render('EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig');
    }
    return $this->render('EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig');
}

    public function ecMentionAction()
    {
        
        return $this->render('EPlanPlanningBundle:Plannification:listEcMention.html.twig');
    }
}