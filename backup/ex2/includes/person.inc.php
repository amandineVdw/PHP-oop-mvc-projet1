<?php
// includes/person.inc.php
class Person {
    //properties    
    private $name;
    public $eyeColor;
    public $age;

    public function __construct($name, $eyeColor, $age) {
        $this->name= $name; 
        $this->eyeColor= $eyeColor; 
        $this->age= $age; 
    }
    //method
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
        
    }