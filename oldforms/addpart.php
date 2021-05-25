<?php
  include('templates/header.php');
?>

<div class="form-box">
  <h2>Add Part</h2>
  <form id="login" name="addpart" class="add-group" method="POST">
    <input type="text" name="pname" class="input-field" placeholder="Part Name" required>
    <br><br />
    <input type="text" name="pnumber" class="input-field" placeholder="Part Number" required>
    <br /><br />
    <select name="pcategory" class="input-field">
      <option value="Shocks">Shocks</option>
      <option value="Seat Posts">Seat Posts</option>
      <option value="Forks">Forks</option>
      <option value="Headsets">Headsets</option>
      <option value="Cranks">Cranks</option>
    </select>
    <br /><br />
    <textarea class="pdetails" name='pdescription'placeholder="Part Description" required></textarea>
    <br><br>
    <button type="submit" name="addpart" class="submit-btn">Add Part</button>
  </form>
</div>
<?php
  include('templates/footer.php');
?>
