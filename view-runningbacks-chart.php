<h1>Instructors chart</h1>
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
    labels: [
<?php
$runningback = selectRunningbacks();
while ($runningback = $runningbacks->fetch_assoc()) {
  echo "'" . $runningback['runningback_name'] . "', ";
}
?>
    ]
},
  });
</script>
