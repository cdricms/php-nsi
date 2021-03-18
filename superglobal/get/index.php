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
      <li><a href='?word=Oui'>Oui</a></li>
      <li><a href='?word=Non'>Non</a></li>
      <li><a href='?word=Peut-être'>Peut-être</a></li>
      <li><a href='?word=Bonjour'>Bonjour</a></li>
      <li><a href='?word=Au%20revoir'>Au revoir</a></li>
    </ul>

    <?php
      if(isset($_GET['word']))
        echo $_GET['word']
    ?>
</body>
</html>