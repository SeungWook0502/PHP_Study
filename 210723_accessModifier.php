<?php
  class Person{
    private $name; //field access declare
    public function sayHi(){ //function access declare
      echo "Hi, I'm {$this->name}.";
    }
    public function setName($_name){
      $this->ifEmptyDie($_name);
      $this->name = $_name;
    }
    public function getName(){
      return $this->name;
    }
    private function ifEmptyDie($value){
      if(empty($value)){
        die('I need name');
      }
    }
  }
  $egoing = new Person();
  $egoing->setName('egoing');
  $egoing->sayHi();
  echo "<br>".$egoing->getName();
?>