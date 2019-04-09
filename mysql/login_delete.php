<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

  deleteRows();


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
        <h1 class="text-center">Delete</h1>
        <form class="" action="login_delete.php" method="post">
          <div class="form-group">
            <select class="" name="id">
              <!-- <option value="">1</option> -->
              <?php
                showAllData();
               ?>

            </select>
          </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>

      </div>
    </div>

  </body>
</html>
