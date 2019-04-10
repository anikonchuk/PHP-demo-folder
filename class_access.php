<?php

class Car {

  public $wheels = 4;
  protected $hood = 1;
  private $engine = 1;
  var $doors = 4;

  function showProperty() {
    echo $this->hood;
  }

}

$bmw = new Car();
echo $bmw->wheels;

//echo $bmw->hood; ERROR! protected

$bmw->showProperty();
//1 - can use protected property INSIDE the class

class Semi extends Car {

  function showInheritedProperty() {
    echo $this->hood;
    //Note- can't use engine here because it's private!
  }

}

$semi = new Semi();
$semi->showInheritedProperty();
//1
 ?>
