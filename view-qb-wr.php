<H1>Widereceivers for Selected Quarterback</H1>
<div class="table-responsive">
  <table class="table table-success table-striped table-hover">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Receptions</th>
        <th>Receiving Yards</th>
        <th>Touchdowns</th>
      <th>Team Name</th>  
      </tr>
    </thead>
    <tbody>
<?php
while($qbwr = $qbwrs->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $qbwr['widereceiver_id']; ?> </td>
    <td><?php echo $qbwr['widereceiver_name']; ?></td>
    <td><?php echo $qbwr['widereceiver_rec']; ?></td>
    <td><?php echo $qbwr['widereceiver_yards']; ?></td>
    <td><?php echo $qbwr['widereceiver_tds']; ?></td>
    <td><?php echo $qbwr['teamname']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
