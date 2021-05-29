<?php
  include ('templates/header.php')
?>



<!--ADD PART FORM-->
<form id="addpartbtn" class="input-group" style="position: absolute; top: 80px; left: 7px;" >
  <button type="submit" class="submit-btn">Add Part</button>
</form>
<div class="add-box">
  <img id="addqrscanner" style="cursor: pointer; width: 46px; height: 46px;" src="img/qr.png" />
  <h2 style=" width: 150px; position: absolute; left: 70px; top: 10px;">Add Part</h2>
  <form name="addpart" class="add-group" method="POST">
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
    <br><br />
    <input type="text" name="qr" id="qr" class="input-field" placeholder="Click QR to Scan" required>
    <br />
    <textarea class="pdetails" name='pdescription'placeholder="Part Description" required></textarea>
    <br><br>
    <button type="submit" name="addpart" class="submit-btn">Add Part</button>
  </form>
</div>




<!--MASTER PARTS LIST-->
<h2 style="color: black;">Master Parts</h2>
<div class='tablebox'>
  <table class='table'>
    <thead>
      <tr>
        <th>Creator</th>
        <th>Part Number</th>
        <th>Category</th>
        <th>Date</th>
        <th>Details</th>
      </tr>
    </thead>

    <?php foreach ($parts as $part){ ?>
      <tbody>
        <tr>
          <td><?php echo htmlspecialchars($part['userid']);?></td>
          <td><?php echo htmlspecialchars($part['pnumber']);?></td>
          <td><?php echo htmlspecialchars($part['pcategory']);?></td>
          <td><?php echo htmlspecialchars($part['ptime']);?></td>
          <td>
            <!--GETs id from parts **UPDATED TO QR-->
            <a href="details.php?qr=<?php echo $part['qr']?>">More Info</a>
          </td>
        </tr>
      </tbody>
    <?php } ?>
  </table>
</div>



<?php
  include('templates/footer.php');
?>
