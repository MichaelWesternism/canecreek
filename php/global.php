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
  $sql = 'SELECT * FROM parts';
  $result = mysqli_query($conn, $sql);
  $parts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  //END for master.php



  //START for archive.php
  $sql = 'SELECT * FROM archive';
  $result = mysqli_query($conn, $sql);
  $archive = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  //END for archive.php

  //ADD PART FUNCTION
  if(isset($_POST['addpart'])){
    $count = 0;
    $pqr = mysqli_real_escape_string($conn, $_POST['qr']);
    foreach($parts as $part){
      if($part['qr'] === $pqr){
        $count++;
      }
    }
    //count checks if QR exists
    if ($count < 1){
      $pname = mysqli_real_escape_string($conn, $_POST['pname']);
      $pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
      $pcategory = mysqli_real_escape_string($conn, $_POST['pcategory']);
      $pdescription = mysqli_real_escape_string($conn, $_POST['pdescription']);
      $userid = $_SESSION['userid'];

      $sql = "INSERT INTO parts(qr, pname, pnumber, pcategory, pdescription, userid)
              VALUES('$pqr', '$pname', '$pnumber', '$pcategory', '$pdescription', '$userid')";

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
    }else{
        echo '<script type="text/javascript">
                alert("QR is already in use.");
              </script>'
                ;
    }
  }


  //START for details.php
  //GETs id in browser ***UPDATED TO QR
  if(isset($_GET['qr'])){
    $qr = mysqli_real_escape_string($conn, $_GET['qr']);

    // make sql from single row using id column FOR DETAILS
    $sql = "SELECT * FROM parts WHERE qr = '$qr'";
    $result = mysqli_query($conn, $sql);
    $parts = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    //END unique id row retrieval from parts

    // make sql from single row using id column FOR ARCHIVE
    $sql = "SELECT * FROM archive WHERE qr = '$qr'";
    $result = mysqli_query($conn, $sql);
    $archive = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    //END unique id row retrieval from parts

    //START comment retrieval
    //grabs rows based off part id
    $sql = "SELECT * FROM comments WHERE pid = '$qr'";
    $result = mysqli_query($conn, $sql);
    $comments = mysqli_fetch_all($result);
    mysqli_free_result($result);


    //add comment function
    if(isset($_POST['addcomment'])){
      $riderlog = mysqli_real_escape_string($conn, $_POST['riderlog']);
      $userid = $_SESSION['userid'];
      $pid = $qr;

      $sql = "INSERT INTO comments(pid, userid, riderlog)
              VALUES('$pid', '$userid', '$riderlog')";

      //save to db and check
      if(mysqli_query($conn, $sql)){
        //success
        //BACKS UP DATABASE
        include('templates/sqlbackup.php');
        //header redirects to index
        header('Location: details.php?qr='. $qr);
      }else{
        //errors
        echo 'query error: ' . mysqli_error($conn);
      }
    }
  }

//EDIT OR ARCHIVE FUNCTION
if(isset($_POST['archivepart'])){
  //moves part to archive
  $sql = "INSERT INTO archive(id, qr, userid, pnumber, pname, pcategory, pdescription)
          VALUES('$parts[id]', '$parts[qr]', '$parts[userid]', '$parts[pnumber]', '$parts[pname]', '$parts[pcategory]', '$parts[pdescription]')";

  if (mysqli_query($conn, $sql)){
    //deletes part
    $sql = "DELETE FROM parts WHERE qr = '$qr'";
    if (mysqli_query($conn, $sql)){
      header('Location: master.php');
    }else {
      //failure
      echo 'query error: ' . mysqli_error($conn);
    }
  }else{
    //failure
    echo 'query error: ' . mysqli_error($conn);
  }
}
if(isset($_POST['editpart'])){
  $pname = mysqli_real_escape_string($conn, $_POST['pname']);
  $pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
  $pcategory = mysqli_real_escape_string($conn, $_POST['pcategory']);
  $pdescription = mysqli_real_escape_string($conn, $_POST['pdescription']);
  $userid = $_SESSION['userid'];

  $sql = "UPDATE parts SET pname='$pname', pnumber='$pnumber', pcategory='$pcategory', pdescription='$pdescription', userid='$userid'
          WHERE qr= '$qr'";

  //save to db and check
  if(mysqli_query($conn, $sql)){
    //success
    //BACKS UP DATABASE (needs to be deleted)
    include('templates/sqlbackup.php');
    header('Location: details.php?qr='. $qr);
  }else{
    //errors
    echo 'query error: ' . mysqli_error($conn);
  }
}


  //closes db connection
  mysqli_close($conn);
?>
