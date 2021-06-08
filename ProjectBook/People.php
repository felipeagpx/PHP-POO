<?php

/*
 * @author Felipe
 */

class People {

    //Attributes
    private $name;
    private $age;
    private $gender;

    //Constructor Method
    public function __construct($name, $age, $gender) {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    //Accessor Methods and Modified Methods
    private function getName() {
        return $this->name;
    }

    private function getAge() {
        return $this->age;
    }

    private function getGender() {
        return $this->gender;
    }

    private function setName($name) {
        $this->name = $name;
    }

    private function setAge($age) {
        $this->age = $age;
    }

    private function setGender($gender) {
        $this->gender = $gender;
    }

    //Other methods
    public function birthday() {
        $this->setAge($this->getAge() + 1);
    }

    public function showPeople() {
        echo "<p>A pessoa a seguir é: "
             .$this->getName() 
             ." que tem "
             .$this->getAge()
             . " anos e é do gênero "
             .$this->getGender() 
             ."</p>";
    }
    
    public function showReader() {
        echo $this->getName()." que tem ".$this->getAge()." anos.";
    }

}
