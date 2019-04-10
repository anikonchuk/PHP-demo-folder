<?php

class Car {

  function move_wheels() {
    echo "Wheels move.";
  }


}

if(method_exists("Car", "move_wheels")){
  echo "Yeah method exists.";
} else {
  echo "No method exists";
}


 ?>
