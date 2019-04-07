<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php

    $list = [343, 34, 323, 23, 54, 232, 453];

    echo max($list);

    echo "<br />";

    echo min($list);
    echo "<br />";

    print_r($list);
    echo "<br />";

    sort($list);
    print_r($list);


     ?>

  </body>
</html>
