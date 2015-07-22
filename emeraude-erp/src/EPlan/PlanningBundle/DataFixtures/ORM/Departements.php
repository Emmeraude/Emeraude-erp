<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EPlan\PlanningBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPlan\PlanningBundle\Entity\Departement;
use EPlan\PlanningBundle\Entity\Mention;
use EPlan\PlanningBundle\Entity\ParcourtType;
use EPlan\PlanningBundle\Entity\Etape;

/**
 * Description of Departements
 *
 * @author Donald
 */
class Departements implements FixtureInterface{
    public function load(ObjectManager $manager) {
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
        
        $manager ->persist($departement);
        $manager ->flush();
    }
    //put your code here
}
