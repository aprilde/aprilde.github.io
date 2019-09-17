<!doctype html>
<html lang="en">
  <head>
          <? include "head.php" ?>
          <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <!-- NAVIGATION -->
  <ul class="nav mt-2">
  <li class="nav-item">
    <a class="nav-link" href="index.php">The expences of University Students</a>
    
  </li>
  <li class="nav-item">
  <a class="nav-link" href="form.php">Take the Survey</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="about.php">About us</a>
  </li>
  <li class="nav-item">
  <button type="button" class="btn btn-primary btn-sm right ml-5" id="Combined">Combined spending</button>
  </li>
  <li class="nav-item">
  <button type="button" class="btn btn-primary btn-sm right" id="Volume">Volume of spending</button>
  </li>
  <li class="nav-item">
  <button type="button" class="btn btn-primary btn-sm right" id="Kind">Kind of spending</button>
  </li>
</ul> 


    <div id="chart"></div>
    <script src="bubble.js"></script>


  </body>

  </html>