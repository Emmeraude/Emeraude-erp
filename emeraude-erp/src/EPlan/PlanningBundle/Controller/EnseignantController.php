<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity\Enseignant;
class EnseignantController extends Controller
{
    public function createEnseignantAction()
    {
        
        $ens=new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
            $ens.setNom($request->get('nom'));
            $ens.setPrenom($request->get('prenom'));
            $ens.setTitre($request->get('titre'));
            $ens.setTel($request->get('tel'));
            $ens.setEmail($request->get('email'));
            
                $em=$this->getDoctrine()->getManager();
                $em->persist($ens);
                $em->flush();
                $effectue=0;
            
        }
        return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig',array('ok'=>$effectue));
    }
    
    public function consultEnseignantAction()
    {
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $listEns= $ensRepository->findAll();
        return $this->render('EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig',array('listEns'=>$listEns));
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
