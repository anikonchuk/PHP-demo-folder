<?php

class Car {
  function move_wheels() {
    echo "Wheels move.";
  }
}

$bmw = new Car();
$mercedes = new Car();

$bmw->move_wheels();

 ?>
