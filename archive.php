<?php
  include ('templates/header.php')
?>

<!--ARCHIVE PARTS LIST-->
<h2 style="color: black;">Archived Parts</h2>
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

    <?php foreach ($archive as $archives){ ?>
      <tbody>
        <tr>
          <td><?php echo htmlspecialchars($archives['userid']);?></td>
          <td><?php echo htmlspecialchars($archives['pnumber']);?></td>
          <td><?php echo htmlspecialchars($archives['pcategory']);?></td>
          <td><?php echo htmlspecialchars($archives['ptime']);?></td>
          <td>
            <!GETs id from parts>
            <a href="archivedetails.php?qr=<?php echo $archives['qr']?>">More Info</a>
          </td>
        </tr>
      </tbody>
    <?php } ?>
  </table>
</div>



<?php
  include('templates/footer.php');
?>
