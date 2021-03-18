<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP8-2_style.css" rel="stylesheet" type="text/css" />
  <title>Variable Superglobale $_SESSION</title>
</head>
<nav>
  <a href="index.php">Accueil</a>
  <a href="index2.php">Page 2</a>
  <a href="index3.php">Page 3</a>
</nav>
<body>
  <h1>Variable Superglobale $_SESSION</h1>
  <?php
    session_start();
    $_SESSION['name'] = "Cédric MAS";
    $_SESSION['formation'] = "MS Web";
  ?>


  <?php
    $name = $_SESSION['name'];
    $formation = $_SESSION['formation'];

    echo $name . "<br/>";
    echo $formation;

  ?>
</body>
</html>