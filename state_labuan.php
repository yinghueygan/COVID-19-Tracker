<?php include('partials/header.php'); ?>

<!-- scrollbar for states -->
<div class="center">
  <h2 class="chart_title"><img src="img/labuan.png" height="25px" alt="labuan"> Labuan Covid Cases</h2>
  <div class="opt_box">
  <?php include('partials/dropbox_cases.php'); ?>

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
          label: 'Daily New Cases',
          data: datapoints.data1,
          backgroundColor:
            'rgba(54, 162, 235, 0.2)',
          borderColor:
            'rgba(54, 162, 235, 1)',
            tension: 0.8
        },
        {
          label: 'Recovered Cases',
          data: datapoints.data2,
          backgroundColor:
            'rgba(255, 26, 104, 0.2)',
          borderColor:
            'rgba(255, 26, 104, 1)',
            tension: 0.8
        },
        {
          label: 'Active Cases',
          data: datapoints.data3,
          backgroundColor:
            'rgba(0, 0, 0, 0.2)',
            borderColor:
            'rgba(0, 0, 0, 1)',
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
      const data1 = [];
      const data2 = [];
      const data3 = [];
      const url = 'http://localhost/covid19_tracker/data/cases/cases_labuan.csv';
      const response = await fetch(url);
      const datapoints = await response.text();

      const table = datapoints.split('\n').slice(2);

      table.forEach(row =>
      {
        const column = row.split(',');
        const date = column[0];
        const cases_new = column[1];
        const cases_recovered = column[2];
        const cases_active = column[3];
        labels.push(date);
        data1.push(cases_new);
        data2.push(cases_recovered);
        data3.push(cases_active);
      });

      console.log(data1);
      return {labels, data1, data2, data3, data1, data2, data3};
    }
    </script>

<?php include('partials/status.php') ?>
