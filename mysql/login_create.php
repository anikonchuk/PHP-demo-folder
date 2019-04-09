<?php include "db.php";

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if($username && $password) {
    //   echo $username . $password;
    // } else {
    //   echo "These fields cannot be blank.";
    // }

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('Query failed' . mysqli_error());
    }

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
          <form class="" action="login_create.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          </form>

      </div>
    </div>

  </body>
</html>
