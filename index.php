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
        <form action="./answer.php" method="get">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="number" id="user-input"
              required />
            <label class="mdl-textfield__label" for="demo-input">Number....</label>
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          </br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            onclick="myButtonClicked()" type="submit">
            Calculate!
          </button>
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
