<?php

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "Hello " . $username;
  echo "<br />";
  echo "Your password is " . $password;
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
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
