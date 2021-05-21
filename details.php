<?php
  include('templates/header.php');
  if(!isset($_GET['id'])){
    header('Location: master.php');
  }
?>
<a style="text-decoration: none;" href="addcomment.php?id=<?php echo $parts['id']?>" id="addbutton" class="input-group" >
  <button type="submit" class="submit-btn">Add Comment</button>
</a>
<div id="qrcode">
  <img  src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=localhost/canecreek/details.php?id=<?php echo $_GET['id']?>" />
</div>


<div class="detailbox" width= 30px;>


  <h2><?php echo $parts['userid']; ?></h2>

  <h4>Part Name</h4>
  <p><?php echo $parts['pname']; ?></p>

  <h4>Part Number</h4>
  <p><?php echo $parts['pnumber']; ?></p>

  <h4>Part Category</h4>
  <p><?php echo $parts['pcategory']; ?></p>

  <h4>Part Description</h4>
  <p><?php echo $parts['pdescription']; ?></p>

  <h4>Date/Time</h4>
  <p><?php echo $parts['ptime']; ?></p>

</div>

<hr />

<div class="container">
  <?php foreach ($comments as $comment){ ?>
    <div class="commentbox">
      <h2><?php echo $comment['2'];?></h2>
      <hr />
      <p><?php echo $comment['3'];?></p>
    </div>
  <?php } ?>
</div>
<?php
  include('templates/footer.php');
?>
