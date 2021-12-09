<?php

class Gift {
    
    private $id;
    private $name;
    private $price;
    
    function __construct($name, $price) {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    function getId() {
        
        return $this->id;
    }
    
    
    function setId($id) {
        
        $this->id = $id;
    }
    
    
    function getName() {
        
        return $this->name;
    }
    
    function setName($name) {
        $this->name = $name;
    }
    
    function getPrice() {
        
        return $this->price;
    }
    
    function setPrice($price) {
        $this->price = $price;
    }
    
}
    
    