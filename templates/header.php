<?php

  //saves Login
  session_start();

  //checks if logged in
  if (!$_SESSION['userid']){
    header('Location: index.php');
  }

  //logout button
  if (isset($_POST['logout'])){
    $_SESSION['userid'] = NULL;
    header('Location: index.php');
  }

  //connect db
  include('config/dbConnect.php');


  //START for master.php
  //query for parts table
  $sql = 'SELECT * FROM parts';

  //get result
  $result = mysqli_query($conn, $sql);

  //store result in array
  $parts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //clears result
  mysqli_free_result($result);
  //END for master.php

  //ADD PART FUNCTION
  if(isset($_POST['addpart'])){
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
    $pcategory = mysqli_real_escape_string($conn, $_POST['pcategory']);
    $pdescription = mysqli_real_escape_string($conn, $_POST['pdescription']);
    $userid = $_SESSION['userid'];

    $sql = "INSERT INTO parts(pname, pnumber, pcategory, pdescription, userid)
            VALUES('$pname', '$pnumber', '$pcategory', '$pdescription', '$userid')";

    //save to db and check
    if(mysqli_query($conn, $sql)){
      //success
      //BACKS UP DATABASE
      include('templates/sqlbackup.php');
      //header redirects to details page
      header('Location: master.php');
    }else{
      //errors
      echo 'query error: ' . mysqli_error($conn);
    }
  }


  //START for details.php
  //GETs id in browser
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql from single row using id column
    $sql = "SELECT * FROM parts WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array
    $parts = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    //END unique id row retrieval from parts

    //START comment retrieval
    //grabs rows based off part id
    $sql = "SELECT * FROM comments WHERE pid = $id";

    $result = mysqli_query($conn, $sql);

    $comments = mysqli_fetch_all($result);

    mysqli_free_result($result);


    //add comment function
    if(isset($_POST['addcomment'])){
      $riderlog = mysqli_real_escape_string($conn, $_POST['riderlog']);
      $userid = $_SESSION['userid'];
      $pid = $id;

      $sql = "INSERT INTO comments(pid, userid, riderlog)
              VALUES('$pid', '$userid', '$riderlog')";

      //save to db and check
      if(mysqli_query($conn, $sql)){
        //success
        //BACKS UP DATABASE
        include('templates/sqlbackup.php');
        //header redirects to index
        header('Location: details.php?id='. $id);
      }else{
        //errors
        echo 'query error: ' . mysqli_error($conn);
      }
    }
  }




  //closes db connection
  mysqli_close($conn);

?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <header id="header">
    <h1>
      Welcome
      <?php echo $_SESSION['userid']; ?>
    </h1>

    <a href="master.php">
      <img id="logo" src="img/logo.png">
    </a>

    <form id="logoutbutton" class="input-group" method="POST">
      <button type="submit" name="logout" class="submit-btn">Log Out</button>
    </form>
  </header>
  <body class="background">
