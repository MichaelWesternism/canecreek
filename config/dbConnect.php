<?php

//connect to database
$conn = mysqli_connect('localhost', 'caneadmin', 'AC6#73!cvG', 'canecreek');

//check connection
if(!$conn){
  echo 'connection error: ' . mysqli_connect_error();
}

?>
