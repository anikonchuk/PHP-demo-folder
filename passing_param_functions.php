<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php

      function greeting($message){

        echo $message;

      }

      greeting("Hello, student");


      function calculate($number1, $number2){
        $sum = $number1 + $number2;
        echo $sum;
      }

      calculate(12,24);

     ?>

  </body>
</html>
