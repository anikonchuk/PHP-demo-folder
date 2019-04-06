<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php
      $x = "outside";

      function convert(){
        global $x;
        $x = "inside";
      }

      echo $x;
      //"outside"
      echo "<br />";
      convert();
      echo $x;
      //"inside" because of "global" keyword"

     ?>

  </body>
</html>
