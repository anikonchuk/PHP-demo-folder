<?php

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function move_wheels() {
    echo "Wheels move.";
  }

  function change_wheels() {
    $this->wheels = 10;
  }

}

$bmw = new Car();

class Plane extends Car {

  var $wheels = 20;

}

$jet = new Plane();

echo $jet->engine . "<br />";
//1- gets properties and methods from parent

echo $jet->wheels;
//20- can override the parent


 ?>
