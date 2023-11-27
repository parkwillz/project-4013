<h1>Touchdown chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($runningback = $runningbacks->fetch_assoc()) {
  echo $runningback['runningback_tds'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$runningback = selectRunningbacks();
while ($runningback = $instructors->fetch_assoc()) {
  echo "'" . $runningback['runningback_name'] . "', ";
}
?>
    ]
},
  });
</script>
