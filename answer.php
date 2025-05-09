<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Doing multiplication with while loops, With JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css">

  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Doing multiplication with while loops, With JS</title>
</head>

<body>
  <script src="./js/script.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Adding Numbers from 1 to Your Input Using a For Loop, With JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./download.jpeg" alt="multiplication table" />
      </div>

      <!--  using a new div to prevent all the elements from sticking on the sides -->
      <div class="center-content">
        <div class="page-content">Enter the number that you want add! </div>
        <br />
        <form action="./">
          <?php
          $userNumber = $_GET['number']; // The name is "number", not "user-input"
          $result = 0;
          for ($i = 1; $i <= $userNumber; $i++) {
            $result += $i;
          }
          // display results
          echo "<h4>The sum from 1 to $userNumber is: $result.</h4>";
          ?>
          </br>
          <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            href="./index.php" type="button">
            Try again!
          </a>
        </form>
        <br />
        <div class="page-content-answer">
          <div id="answer"></div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>