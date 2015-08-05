<?php

namespace EPlan\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPlan\PlanningBundle\Entity\ParcourtType;
use EPlan\PlanningBundle\Entity\Etape;
use EPlan\PlanningBundle\Entity\Mention;
use EPlan\PlanningBundle\Entity\Departement;
use EPlan\PlanningBundle\Entity\ObjectError;
use EPlan\PlanningBundle\Entity\Ec;
use EPlan\PlanningBundle\Entity\UE;
use EPlan\PlanningBundle\Form\UEType;
use EPlan\PlanningBundle\Form\EcType;

class DivisionController extends Controller
{
    public function managePresentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $departementRepository = $em->getRepository('EPlanPlanningBundle:Departement');
        $listOfDepartement = $departementRepository ->findWithMentions();
        if($listOfDepartement){ 
            return $this->render('EPlanPlanningBundle:Division:manageDivision.html.twig', array('departements'=>$listOfDepartement));
        }
        $message = new ObjectError();
        $message->setTitle("Désolé, Aucun Département n'a été enregistré" );
        $message->setMessageUser('svp assurez vous que les departements ont été crées et chargez les.<br>merci!');
        return $this->render('EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig', array('message'=>$message));
    }
    
    public function menuDepartementAction() {
        $em = $this->getDoctrine()->getManager();
        $departementRepository = $em->getRepository('EPlanPlanningBundle:Departement');
        $listOfDepartement = $departementRepository ->findWithMentions(); 
        return $this->render('EPlanPlanningBundle:Division:menuDepartement.html.twig', array('departements'=>$listOfDepartement));
    }
    
    public function viewGrilleAction($id) {
        return $this->redirect($this->generateUrl('e_plan_planning_manage_division'));
    }
    
    public function editOneGrilleAction($id) {
        $em = $this->getDoctrine()->getManager();
        $etapeRepository = $em->getRepository('EPlanPlanningBundle:Etape');
        $etape = $etapeRepository ->find($id);
        //$departement = $etape -> getParcourtType() -> getMention() -> getDepartement();
        //$listOfEcs = $departement -> getEcs();
        return $this->render('EPlanPlanningBundle:Grille:editOneGrille.html.twig', array('etape'=>$etape));
    }
    
    public function registerOneGrilleAction($id) {
        $em = $this->getDoctrine()->getManager();
        $etapeRepository = $em->getRepository('EPlanPlanningBundle:Etape');
        $etape = $etapeRepository ->find($id);
        $departement = $etape -> getParcourtType() -> getMention() -> getDepartement();
        $listOfEcs = $departement -> getEcs();
        return $this->render('EPlanPlanningBundle:Grille:editOneGrille.html.twig', array('listeEc'=>$listOfEcs));
    }
    
    public function viewParcourtTypeAction($id) {
        if($id<1){
            $message = new ObjectError();
            $message->setTitle('accès au serveur refusé');
            $message->setMessageUser('pour des raisons de sécurité, nous ne pouvons pas continuer le traitement de cette requette car un accès frauduleux ä été intercepté<br /> merci');
            return $this->render('EPlanPlanningBundle:Presentation:RessourceIndisponibleBis.html.twig', array('message'=>$message));
        }
        $em = $this->getDoctrine()->getManager();
        $parcourtTypeRepository = $em ->getRepository('EPlanPlanningBundle:ParcourtType');
        $parcourtType = $parcourtTypeRepository->find($id);
        if($parcourtType){
            return $this->render('EPlanPlanningBundle:ParcourtType:showParcourtType.html.twig', array('parcourtType'=>$parcourtType));
        }
        $message = new ObjectError();
            $message->setTitle('accès au serveur refusé');
            $message->setMessageUser('pour des raisons de sécurité, nous ne pouvons pas continuer le traitement de cette requette car un accès frauduleux ä été intercepté<br /> merci');
            return $this->render('EPlanPlanningBundle:Presentation:RessourceIndisponibleBis.html.twig', array('message'=>$message));
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
     public function enregistrerUEAction()
    {
        
        $ue=new UE();
        $form = $this->createForm(new UEType, $ue);

        $request=$this->get('request');
        if($request->getMethod()=='POST'){
           $form->bind($request);
            if($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($ue);
                $em->flush();
            //return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
            }
             //$request->get('nom');
        }
        return $this->render('EPlanPlanningBundle:Grille:EnregistrerUE.html.twig',
                             array(
                                'form' => $form->createView(),
                                 ));
        
       // return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig');
    }
    
    public function enregistrerEcAction()
    {
        
        $ec=new Ec();
        $form = $this->createForm(new EcType, $ec);

        $request=$this->get('request');
        if($request->getMethod()=='POST'){
           $form->bind($request);
            if($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($ec);
                $em->flush();
            //return $this->render('EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig',array('ens'=>$ens));
            }
             //$request->get('nom');
        }
        return $this->render('EPlanPlanningBundle:Grille:EnregistrerEc.html.twig',
                             array(
                                'form' => $form->createView(),
                                 ));
        
       // return $this->render('EPlanPlanningBundle:Enseignant:createEnseignant.html.twig');
    }
    
}
