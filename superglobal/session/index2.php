<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP8-2_style.css" rel="stylesheet" type="text/css" />
  <title>Test $_SESSION - Page 2</title>
</head>
<nav>
  <a href="index.php">Page 1</a>
  <a href="index2.php">Page 2</a>
  <a href="index3.php">Page 3</a>
</nav>
<body>
  <h1>Exercice $_SESSION - Page 2</h1>
  <?php
    session_start();

    if (isset($_SESSION['name'])) {
      $name = $_SESSION['name'];
    }

    if (isset($_SESSION['formation']))
      $formation = $_SESSION['formation'];

    echo $name . "<br/>";
    echo $formation;

  ?>
</body>
</html>