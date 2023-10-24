<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Covid-19 Tracker Malaysia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

    <!-- navigation bar -->
    <section class="nav_bar">
      <div class="container">
        <label class="logo"><img src="img/federal.png"  height="35" alt="covid" /> MALAYSIA COVID-19 TRACKER</label>
        <ul>
          <li><a href="index.php"><img src="img/home.png" height="30px" alt="home" /> HOME</a></li>
          <li><a href="cases_msia.php"><img src="img/covid2.png" height="30px" alt="cases" /> CASES</a></li>
          <li><a href="death_msia.php"><img src="img/ecg.png" height="35px" alt="death" /> DEATH</a></li>
        </ul>
    </section>

<!-- home page -->
<section class="home" id="home">
  <div class="container">
    <div class="overall">
        <div>
            <img src="img/home.svg" width="180%" alt="people">
        </div>
        <div class="content">
            <span>Stay Home, Stay Safe</span>
            <h3>Protect Yourself from Covid-19</h3>
            <a href="cases_msia.php" class="button">View Covid-19 Cases</a>
            <a href="death_msia.php" class="button">View Covid-19 Death Cases</a>
        </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer_content">
    <h4><img src="img/covid.png" height="50px"alt"covid"> Coronavirus 2019 Tracker System </h4>
      <p>Data retreived from: <a href="https://github.com/MoH-Malaysia/covid19-public/tree/main/epidemic">Ministry of Health Malaysia</a></p>&nbsp;
    </div>
  <div class="footer_bottom">
        <p>Copyright &copy;2022 Designed by Gan Ying Huey</p>
</footer>

   <script src="js/states.js"></script>
</body>
</html>
