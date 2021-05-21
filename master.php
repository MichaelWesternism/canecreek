<?php
  include ('templates/header.php')
?>
<form action="addpart.php" id="addbutton" class="input-group" >
  <button type="submit" class="submit-btn">Add Part</button>
</form>

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
            <!GETs id from parts>
            <a href="details.php?id=<?php echo $part['id']?>">More Info</a>
          </td>
        </tr>
      </tbody>
    <?php } ?>
  </table>
</div>
<?php
  include('templates/footer.php');
?>
