<?php
  include('php/global.php');
?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/master.css">
    <header id="header">
      <h1>
        Welcome
        <?php echo htmlspecialchars($_SESSION['userid']) ?>
      </h1>

      <a href="master.php">
        <img id="logo" src="img/logo.png">
      </a>
      <img src="img/hamburger.png" id="nav" style="cursor: pointer; height: 30px; width: 30px; position: absolute; top: 21px; right: 20px;" />
      <div class="navdrop">
        <form action="master.php">
        <button type="submit">Master Table</button>
        </form>
        <hr>
        <form id="qrsearch">
        <button type="submit">QR Search</button>
        </form>
        <hr />
        <form action="archive.php">
        <button type="submit">Archive Table</button>
        </form>
        <hr />
        <form method="POST">
          <button name="logout">Log Out</button>
        </form>
      </div>





    </header>
  </head>
  <body class="background">
    <!--QR CODE SCANNER (for search) code in forms.js-->
    <div id="qrbox">
      <video id="preview" style="width: 300px; height: 200px;"></video>
      <br />
      <section class="cameras"></section>
    </div>
