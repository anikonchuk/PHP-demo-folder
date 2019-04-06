<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php
    function addNumbers($number1, $number2){
      $sum = $number1 + $number2;
      return $sum;
    }

    $result = addNumbers(14, 25);
    echo $result;
     ?>

  </body>
</html>
