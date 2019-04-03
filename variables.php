<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php
    $name = "Edwin";

    $number = 100;
    $numberList = 100.5;
    $number_list = 100;
    //camelCase or snake_case are both okay
    //cannot start with number
    //cannot have hyphen

    echo $name;
    echo $number;
    echo $name . " " . $number;
    //will display Edwin as $name
    // Note, no line breaks above!

    $name = "<h1>HELLO</h1>";
    echo $name
    //will display new h1- HELLO as $name

     ?>
  </body>
</html>
