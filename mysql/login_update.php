<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

  updateTable();


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
        <h1>Update</h1>
        <form class="" action="login_update.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <select class="" name="id">
              <!-- <option value="">1</option> -->
              <?php
                showAllData();
               ?>

            </select>
          </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>

      </div>
    </div>

  </body>
</html>
