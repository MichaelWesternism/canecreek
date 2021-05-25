<?php
  include('templates/header.php');

  if(!isset($_GET['id'])){
    header('Location: master.php');
  }
?>

<div class="form-box">
  <h2>Add Comment</h2>
  <form id="login" name="addcomment" class="add-group" method="POST">

    <textarea class="comments" name='riderlog' placeholder="Part Comment" required></textarea>
    <br><br>
    <button type="submit" name="addcomment" class="submit-btn">Add Comment</button>
  </form>
</div>
<?php
  include('templates/footer.php');
?>
