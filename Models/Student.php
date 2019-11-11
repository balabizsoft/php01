<?php

class student
{
    protected $Id;
    protected $Name;

    public function getId(){
        return $this->Id;
    }

    public function setId($id){
        $this->Id=$id;
    }

    public function getName(){
        return $this->Name;
    }

    public function setName($name){
        $this->Name=$name;
    }

    function __construct($id,$name) {
        $this->setId($id);
        $this->setName($name);    
    }

    public function Display(){
        return "Id : " . $this->Id . ", Name : " . $this->Name;
    }
}

?>