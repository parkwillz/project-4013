<H1>This WRs Quarterback</H1>
<div class="table-responsive">
  <table class="table table-success table-striped table-hover">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Pass Yards</th>
      <th>TDs</th>
      <th>Ints</th>
      <th>Team Name</th>  
      </tr>
    </thead>
    <tbody>
<?php
while($wrqb = $wrqbs->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $wrqb['quarterback_id']; ?> </td>
    <td><?php echo $wrqb['quarterback_name']; ?></td>
    <td><?php echo $wrqb['quarterback_yards']; ?></td>
    <td><?php echo $wrqb['quarterback_tds']; ?></td>
    <td><?php echo $wrqb['quarterback_ints']; ?></td>
    <td><?php echo $wrqb['teamname']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
