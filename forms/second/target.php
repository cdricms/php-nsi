<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP9-2_style.css" rel="stylesheet" type="text/css" />
  <title>Traitement de formulaire avec select</title>
</head>
<body>
  <h1>Traitement de formulaire avec select</h1>
    <?php
        $name = $_GET['name'];
        $last = $_GET['lastname'];
        $age = $_GET['age'];
        $genre = $_GET['genre']; 
        $usage = $_GET['usage'];

        echo $name . "<br/>";
        echo $last . "<br/>";
        echo $age . "<br/>";
        echo $genre . "<br/>";
        echo $usage . "<br/>";
    ?>
</body>
</html>