<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {
  $content = fread($handle, 4); //each bite equals a character
  echo $content;
  fclose($handle);
} else {
  echo "The application was not able to write on the file";
}


//fread($handle, filesize($file)); will give whole file


 ?>
