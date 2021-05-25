<?php
  include('templates/header.php');
  if(!isset($_GET['id'])){
    header('Location: master.php');
  }

?>

<!--ADD COMMENT FORM-->
<!-- <form onclick="archivecommentbtn()" id="addbutton" class="input-group" >
  <button type="submit" class="submit-btn">Add Comment</button>
</form>
<div class="add-box">
  <h2>Add Comment</h2>
  <form id="login" name="addcomment" class="add-group" method="POST">
    <textarea class="comments" name='riderlog' placeholder="Part Comment" required></textarea>
    <br><br>
    <button type="submit" name="addcomment" class="submit-btn">Add Comment</button>
  </form>
</div> -->





<div id="qrcode">
  <img  src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=localhost/canecreek/archivedetails.php?id=<?php echo $_GET['id']?>" />
</div>


<div class="detailbox" width= 30px;>


  <h2><?php echo htmlspecialchars($archive['userid']) ?></h2>

  <h4>Part Name</h4>
  <p><?php echo htmlspecialchars($archive['pname']) ?></p>

  <h4>Part Number</h4>
  <p><?php echo htmlspecialchars($archive['pnumber']) ?></p>

  <h4>Part Category</h4>
  <p><?php echo htmlspecialchars($archive['pcategory']) ?></p>

  <h4>Part Description</h4>
  <p><?php echo htmlspecialchars($archive['pdescription']) ?></p>

  <h4>Date/Time</h4>
  <p><?php echo htmlspecialchars($archive['ptime']) ?></p>

</div>

<hr />

<div class="container">
  <?php foreach ($comments as $comment){ ?>
    <div class="commentbox">
      <h2><?php echo htmlspecialchars($comment['2'])?></h2>
      <hr />
      <p><?php echo htmlspecialchars($comment['3'])?></p>
    </div>
  <?php } ?>
</div>
<?php
  include('templates/footer.php');
?>
