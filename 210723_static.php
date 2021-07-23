<?php
  class Person{
    private static $count = 0; //static field declare
    private $name; // == private dynamic $name;
    //즉 dynamic 은 default로 되어있다.
    function __construct($name){
      $this->name = $name; //non $ field
      self::$count += 1; //static field value usage //mark $ field
      // self::$count = self::$count + 1;
    }
    function enter(){
      echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
    }
    static function getCount(){ //static function declare
      return self::$count;
    }
  }

  $p1 = new Person('egoing');
  $p1->enter();
  $p2 = new Person('leezche');
  $p2->enter();
  $p3 = new Person('duru');
  $p3->enter();
  $p4 = new Person('taiho');
  $p4->enter();
  echo Person::getCount();
?>