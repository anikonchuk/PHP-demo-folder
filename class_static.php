<?php

class Car {

  static $wheels = 4;
  var $hood = 1;

  function change_wheels() {
    Car::$wheels = 10;
  }

}

$bmw = new Car();
//$bmw->wheels; WILL throw error- undefined property
Car::change_wheels();
echo Car::$wheels;

 ?>
