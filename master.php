<?php
  session_start();
  echo $_SESSION['userid'];
  if (!$_SESSION['userid']){
    header('Location: index.php');
  }
?>
