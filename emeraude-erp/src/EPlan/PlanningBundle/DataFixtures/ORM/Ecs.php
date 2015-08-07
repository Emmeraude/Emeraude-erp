<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EPlan\PlanningBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPlan\PlanningBundle\Entity\Ec;

/**
 * Description of Departements
 *
 * @author Donald
 */
class Ecs implements FixtureInterface{
    public function load(ObjectManager $manager) {

        $departements = $manager->getRepository('EPlanPlanningBundle:Departement')->findAll();
        $ec = new Ec();
        $ec ->setLibelle('Achitecture des Ordinateurs');
        $ec->setCode('IN120');
        $ec->setNiveau(1);
        $ec->setVolHeuresCM(15);
        $ec->setVolHeuresTD(10);
        $ec->setVolHeuresTP(5);

        $ec->setDepartement($departements[0]);
        $manager ->persist($ec);
        $manager ->flush();
        $ec = new Ec();
        $ec ->setLibelle('Operating System');
        $ec->setCode('IN121');
        $ec->setNiveau(1);
        $ec->setVolHeuresCM(15);
        $ec->setVolHeuresTD(10);
        $ec->setVolHeuresTP(5);
        $ec->setDepartement($departements[0]);
        $manager ->persist($ec);
        $manager ->flush();
        $ec = new Ec();
        $ec ->setLibelle('Analyse');
        $ec->setCode('MA120');
        $ec->setNiveau(1);
        $ec->setVolHeuresCM(15);
        $ec->setVolHeuresTD(10);
        $ec->setVolHeuresTP(5);
        $ec->setDepartement($departements[0]);
        $manager ->persist($ec);
        $manager ->flush();
        $ec = new Ec();
        $ec ->setLibelle('Algebre Lineaire');
        $ec->setCode('MA122');
        $ec->setNiveau(1);
        $ec->setVolHeuresCM(15);
        $ec->setVolHeuresTD(10);
        $ec->setVolHeuresTP(5);
        $ec->setDepartement($departements[0]);
        $manager ->persist($ec);
        $manager ->flush();
        $ec = new Ec();
        $ec ->setLibelle('Algorithmique');
        $ec->setCode('IN122');
        $ec->setNiveau(1);
        $ec->setVolHeuresCM(15);
        $ec->setVolHeuresTD(10);
        $ec->setVolHeuresTP(5);
        $ec->setDepartement($departements[0]);
        $manager ->persist($ec);
        $manager ->flush();
    }
    //put your code here
}
