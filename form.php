<?php

if(isset($_POST['submit'])){
  echo "yes it works";
  echo "<br />";
  echo $_POST['username'] . " " . $_POST['password'];
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
