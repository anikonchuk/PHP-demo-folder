<?php include "db.php";

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Query failed' . mysqli_error());
  }




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MySQL Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="col-sm-6">

        <?php
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <pre>
              <?php
              print_r($row);
              ?>
            </pre>
            <?php
          }

         ?>

      </div>
    </div>

  </body>
</html>
