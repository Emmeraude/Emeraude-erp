<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity\Enseignant;
use EPlan\PlanningBundle\DataFixtures\ORM\Ecs;
use EPlan\PlanningBundle\Entity\Ec;
use EPlan\PlanningBundle\Entity\EnseignantEc;
use EPlan\PlanningBundle\Form\EnseignantType;
class EnseignantController extends Controller
{
   public function listEcDeptAction(Enseignant $id)
    {
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $ens= $ensRepository->find($id->getId());
        $ecRepository=$this->getDoctrine()
                            ->getManager()
                            ->getRepository('EPlanPlanningBundle:Ec');
        $listEcDept= $ecRepository->findByDepartement($ens->getDepartement());
        return $this->render('EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig',array('ens'=>$ens,'listEc'=>$listEcDept));
           
  }
  
  
    public function createEnseignantAction()
    { 
        $ens=new Enseignant();
        $form = $this->createForm(new EnseignantType, $ens);
        $request=$this->get('request');$btn=$request->get('good');
        if($request->getMethod()=='POST'){
           $form->bind($request);
           if($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($ens);
                $em->flush();
            if($btn==='Creer'){
             return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens,'good'=>$btn));
            }else{
                $this->listEcDeptAction($ens);
                
            }
            
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
       // $ecEnsei=new EnseignantEc();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
          $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
          $ident=$request->get('id');
          $ens= $ensRepository->find($ident);
          //$list=$request->get('ecEns');
         /* foreach ($list as $ec ){
              $ecEnsei->setType($request->get('type'));
              $ecEnsei->setEnseignant($ens);
              $ecEnsei->setEc($this->getDoctrine()->getManager()->getRepository('EPlanPlanningBundle:Ec')->find($ec));
              $this->getDoctrine()->getManager()->persist($ecEnsei);
              $this->getDoctrine()->getManager()->flush();
              $ens->addEcsEnseignes($ecEnsei);
          }*/
          return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
        }
     
    }
    
    
    public function indexEnseignantAction()
    {
        $man=$this->getDoctrine()->getEntityManager();
        $e=new Ecs();$e->load($man);
        return $this->render('EPlanPlanningBundle:Enseignant:indexEns.html.twig');
    }
    
    
    public function attribEcAction()
    {
      $ens= new Enseignant();
      $ecEnsei=new EnseignantEc();
      $request=$this->get('request');
      if($request->getMethod()=='POST'){
          $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
          $ident=$request->get('id');
          $ens= $ensRepository->find($ident);
          $list=$request->get('ecEns');
          $type=$request->get('type');
         foreach ($list as $ec ){
             $ecRepository=$this->getDoctrine()->getManager()->getRepository('EPlanPlanningBundle:Ec');
              $ecEnsei->setType($type);
              $ecEnsei->setEnseignant($ens);
              $ecEnsei->setEc($ecRepository->find($ec));
              $this->getDoctrine()->getManager()->persist($ecEnsei);
              $this->getDoctrine()->getManager()->flush();
              $ens->addEcsEnseignes($ecEnsei);
              $this->getDoctrine()->getManager()->flush();
              
          }
          return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
        }
    }
    
    public function attribEcEnseignantAction()
    {
       // $ens= new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $ident=$request->get('id');
        $ens= $ensRepository->find($ident);
        $ecRepository=$this->getDoctrine()
                            ->getManager()
                            ->getRepository('EPlanPlanningBundle:Ec');
        $listEcDept= $ecRepository->findByDepartement($ens->getDepartement());
        return $this->render('EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig',array('ens'=>$ens,'listEc'=>$listEcDept));
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
  
  public function suppEnseignantAction()
    {
        $ens= new Enseignant();
        $request=$this->get('request');
        if($request->getMethod()=='POST'){
        $ensRepository= $this->getDoctrine()
                          ->getManager()
                          ->getRepository('EPlanPlanningBundle:Enseignant');
        $ident=$request->get('id');
        $ensRepository->delete($ident);
        $this->getDoctrine()->getManager()->flush();
        $ens=$ensRepository->findAll();
        
        return $this->render('EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig',array('listEns'=>$ens));
     }
    }
}
