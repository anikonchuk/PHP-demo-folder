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
$mercedes = new Car();

$bmw->move_wheels();
echo "<br />";
$bmw->wheels = 8;
echo $bmw->wheels;
//8
echo "<br />";
$bmw->change_wheels();
echo $bmw->wheels;
//10


 ?>
