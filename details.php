<?php
  include('templates/header.php');
  if(!isset($_GET['qr'])){
    header('Location: master.php');
  }

?>

<!--EDIT/ARCHIVE PART FORM-->
<form id="editbutton" class="input-group" style="position: absolute; top: 130px; left: 7px;">
  <button type="submit" class="submit-btn">Edit/Archive</button>
</form>
<div class="edit-box">
  <h2>Edit/Archive</h2>
  <form name="editpart" class="add-group" method="POST">
    <input type="text" name="pname" class="input-field" value="<?php echo htmlspecialchars($parts['pname']) ?>" required>
    <br><br />
    <input type="text" name="pnumber" class="input-field" value="<?php echo htmlspecialchars($parts['pnumber']) ?>" required>
    <br /><br />
    <select name="pcategory" class="input-field">
      <option value="Shocks">Shocks</option>
      <option value="Seat Posts">Seat Posts</option>
      <option value="Forks">Forks</option>
      <option value="Headsets">Headsets</option>
      <option value="Cranks">Cranks</option>
    </select>
    <br /><br />
    <textarea class="pdetails" name='pdescription'placeholder="Part Description" required><?php echo htmlspecialchars($parts['pdescription']) ?></textarea>
    <br><br>
    <button type="submit" name="editpart" class="submit-btn">Edit Part</button>
    <br />
    <button type="submit" name="archivepart" class="submit-btn">Archive Part</button>
  </form>
</div>


<!--ADD COMMENT FORM-->
<form id="commentbutton" class="input-group" style="position: absolute; top: 80px; left: 7px;">
  <button type="submit" class="submit-btn">Add Comment</button>
</form>
<div class="add-box">
  <h2>Add Comment</h2>
  <form name="addcomment" class="add-group" method="POST" style="left: 50px;">
    <textarea class="comments" name='riderlog' placeholder="Part Comment" required></textarea>
    <br><br>
    <button type="submit" name="addcomment" class="submit-btn">Add Comment</button>
  </form>
</div>





<div id="qrcode">
  <img  src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $_GET['qr']?>" />
</div>


<div class="detailbox" width= 30px;>


  <h2><?php echo htmlspecialchars($parts['userid']) ?></h2>

  <h4>Part Name</h4>
  <p><?php echo htmlspecialchars($parts['pname']) ?></p>

  <h4>Part Number</h4>
  <p><?php echo htmlspecialchars($parts['pnumber']) ?></p>

  <h4>Part Category</h4>
  <p><?php echo htmlspecialchars($parts['pcategory']) ?></p>

  <h4>Part Description</h4>
  <p><?php echo htmlspecialchars($parts['pdescription']) ?></p>

  <h4>Date/Time</h4>
  <p><?php echo htmlspecialchars($parts['ptime']) ?></p>

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
