<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP9-1_style.css" rel="stylesheet" type="text/css" />
  <title>Traitement de formulaire avec input</title>
</head>
<body>
  <h1>Traitement de formulaire avec input</h1>

    <?php
        $account = $_GET['account'];
        $password = $_GET['password'];
        $age = $_GET['age'];

        echo $age . "<br/>";
        echo $password . "<br/>";
        echo $account . "<br/>";

    ?>

  <p><a href="index.php">Retour sur le formulaire</a></p>
</body>
</html>