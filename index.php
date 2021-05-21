<?php
  include('login.php');
  if (isset($_SESSION[''])){
    if ($_SESSION['userid']){
      header('Location: master.php');
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Cane Creek</title>
    <link rel="stylesheet" href="css/master.css">

    <meta name= "viewport" content= "width=device-width, initial-scale = 1.0">
  </head>
  <body id="login-background">
    <div class="opacity">

      <div class="form-box">

        <div class="button-box">
          <div id="btn">
          </div>
          <button type="button" class="toggle-btn" onclick="login()">Log In</button>
          <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <img class="logo" src="img/logo.png">

        <!login form>
        <form id="login" class="input-group" method="POST">
          <input type="text" name="userid" class="input-field" placeholder="User ID" required>
          <br><br>
          <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
          <br>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" name="log-in" class="submit-btn">Log In</button>
        </form>

        <!register form>
        <form id="register" class="input-group">
          <input type="text" class="input-field" placeholder="User ID" required>
          <br><br>
          <input type="email" class="input-field" placeholder="Email" required>
          <br><br>
          <input type="password" class="input-field" placeholder="Enter Password" required>
          <br>
          <input type="checkbox" class="check-box"><span>I agree to Terms and Conditions</span>
          <button type="submit" class="submit-btn">Register</button>
        </form>
      </div>
    </div>

    <script type="text/javascript" src="javascript/login.js"></script>
  </body>
</html>
