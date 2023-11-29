<h1>RB Touchdown chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
<?php
$runningbacks = selectRunningbacks();
while ($runningback = $runningbacks->fetch_assoc()) {
  echo "'" . $runningback['runningback_name'] . "', ";
}
?>        
      ],
      datasets: [{
        label: '# Of Touchdowns',
        data: [9,4,5,7,5,1,3,2,4,11],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
