<?php



if(isset($_POST['submit'])){
  $minimum = 3;
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
