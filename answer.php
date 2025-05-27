<!DOCTYPE html>
<!-- ICS2O-Unit5-08-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Dividing with while loops, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Dividing with while loops, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Dividing with while loops, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/divvy.png" alt="division" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          //input
          $firstnumber = $_GET["dividend"];
          $secondnumber = $_GET["divisor"];
          $number = 0;
          $answer = $firstnumber;

          // Process
          while (true) {
            $number++;
            $firstnumber = $firstnumber - $secondnumber;
            if ($firstnumber < $secondnumber) {
              break;
            }
          }
          // output
          echo "$answer ÷ $secondnumber = $number + R $firstnumber";
          ?>
          <div class="page-content-answer">
            <a href="./index.php">Return</a>
          </div>
        </div>
    </main>
  </div>
</body>

</html>