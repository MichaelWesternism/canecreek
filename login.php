<?php
  //saves login
  session_start();

  //connect db
  include('config/dbConnect.php');

  //query for login
  $sql = 'SELECT userid, email, password FROM login';

  //get result
  $result = mysqli_query($conn, $sql);

  //store result in array
  $login = mysqli_fetch_all($result, MYSQLI_ASSOC);


  //check if login button is pressed
  if(isset($_POST['log-in'])){

    //assigns user input to variables
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //checks user input against array of database for login
    foreach($login as $verify){
      if (password_verify($password, $verify['password']) && $userid == $verify['userid']){
        $_SESSION['userid'] = $verify['userid'];
        header('Location: master.php');
      }else{
        echo "login failed";
      }
    }
  }


  //clears result
  mysqli_free_result($result);

  //closes db connection
  mysqli_close($conn);



?>
