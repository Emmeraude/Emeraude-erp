<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity\Enseignant;
use EPlan\PlanningBundle\Form\EnseignantType;
class EnseignantController extends Controller
{
   
    public function createEnseignantAction()
    {
        
        $ens=new Enseignant();
        $form = $this->createForm(new EnseignantType, $ens);

        $request=$this->get('request');
        if($request->getMethod()=='POST'){
           $form->bind($request);
            if($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($ens);
                $em->flush();
            return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
            }
             $request->get('nom');
        }
        return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig',
                             array(
                                'form' => $form->createView(),
                                 ));
        
       // return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig');
    }
    
    
    
    public function consultEnseignantAction($critere='')
    {
        $request=$this->get('request');
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
       
        if($request->getMethod()=='POST'){
           $critere=$request->get('critere');
           $listEns= $ensRepository->findByNomOrPrenom($critere);
        }else{
        $listEns= $ensRepository->findAll();
        }
        return $this->render('EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig',array('listEns'=>$listEns));
    }
    
    public function ficheEnseignantAction()
    {
        $ens= new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
          $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
          $ident=$request->get('id');
          $ens= $ensRepository->find($ident);
        
          return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
        }
     
    }
    
    
    public function indexEnseignantAction()
    {
        return $this->render('EPlanPlanningBundle:Enseignant:indexEns.html.twig');
    }
    
    
    
    
    
    public function attribEcEnseignantAction()
    {
        $ens= new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $ident=$request->get('id');
        $ens= $ensRepository->find($ident);
        
        return $this->render('EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig',array('ens'=>$ens));
     }
        
  }
  
  public function modifEnseignantAction()
    {
        $ens= new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $ident=$request->get('id');
        $ens= $ensRepository->find($ident);
        
        return $this->render('EPlanPlanningBundle:Enseignant:modifEnseignant.html.twig',array('ens'=>$ens));
     }
        
  }
}
