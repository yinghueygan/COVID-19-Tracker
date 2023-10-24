<?php include('partials/header.php'); ?>

<!-- scrollbar for states -->
<div class="center">
  <h2 class="chart_title"><img src="img/malaysia.png" height="25px" alt="msia"> Malaysia Covid Death Cases</h2>
  <div class="opt_box">
  <?php include('partials/dropbox_death.php'); ?>

<div class="overall">
  <div class="chart_layout">
    <div class="chart_inside">
      <canvas id="line_chart"></canvas>
    </div>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  drawChart();
    async function drawChart(){
      const datapoints = await getData();
      const data = {
        labels: datapoints.labels,
        datasets: [{
          label: 'Daily New Death Cases',
          data: datapoints.data,
          backgroundColor:
            'rgba(54, 162, 235, 0.2)',
          borderColor:
            'rgba(54, 162, 235, 1)',
            tension: 0.8
        }]
      };

      const config = {
        type: 'line',
        data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      };

      const line_chart = new Chart(
        document.getElementById('line_chart'),
        config
      );
    };

    async function getData(){
      const labels = [];
      const data = [];
      const url = 'http://localhost/covid19_tracker/data/death/deaths_malaysia.csv';
      const response = await fetch(url);
      const datapoints = await response.text();

      const table = datapoints.split('\n').slice(2);

      table.forEach(row =>
      {
        const column = row.split(',');
        const date = column[0];
        const cases_new = column[1];
        labels.push(date);
        data.push(cases_new);
      });

      console.log(data);
      return {labels, data, data};
    }
    </script>

<?php include('partials/status.php') ?>
