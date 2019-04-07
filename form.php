<?php

$minimum = 5;

if(isset($_POST['submit'])){
  $name = array("Edwin", "Student", "Peter");
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(strlen($username) < $minimum) {
    echo "Username has to be longer than five";
  }

  if(!in_array($username, $name)) {
    echo "Sorry, you cannot login";
  } else {
    echo "Welcome";
  }

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form class="" action="form.php" method="post">
      <input type="text" placeholder="Enter Username" name="username">
      <input type="password" placeholder="Enter Password" name="password">
      <br>
      <input type="submit" name="submit">
    </form>
  </body>
</html>
