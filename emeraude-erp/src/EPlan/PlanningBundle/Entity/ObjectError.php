<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EPlan\PlanningBundle\Entity;

/**
 * Description of ObjectError
 *
 * @author Donald
 */
class ObjectError {
    private $type;
    private $description;
    private $messageUser;
    private $title;
    
    public function __construtor(){
        
    }
    
    public function getMessageUser() {
        return $this->messageUser;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function setMessageUser($message) {
        $this->messageUser = $message;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
    //put your code here
}
