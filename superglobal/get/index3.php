<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP8-3_style.css" rel="stylesheet" type="text/css" />
  <title>Variable Superglobale $_GET</title>
</head>
<body>
  <nav>
    <a href="index.php">Mots</a>
    <a href="index2.php">Couleurs de texte</a>
    <a href="index3.php">Formes géométriques</a>
  </nav>
  <h1>Variable Superglobale $_GET</h1>
  <h2>Couleurs de texte</h2>
  <p>Cliquez sur un de ces mots:</p>
    <ul>
      <li><a href='?shape=square'>Square</a></li>
      <li><a href='?shape=rectangle'>Rectangle</a></li>
      <li><a href='?shape=circle'>Circle</a></li>
    </ul>

    <?php
      $shape = $_GET['shape'];
      if(isset($shape)) {
        
          echo "<div class='$shape'></div>";

      }
    ?>
</body>
</html>