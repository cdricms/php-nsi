<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="TP7-3_style.css" rel="stylesheet" type="text/css" />
  <title>Fonctions</title>
</head>
<body>
  <h1>Fonctions</h1>
  <?php
    $timestamp = time();
    $day = 86400;
    $word = 'Hello';
    $number = -21.785;
    echo "Nous sommes le " . "<strong class='function'>" . date("d/n/y") . "</strong> <br/>";
    echo "Hier c'était le " . "<strong class='function'>" . date("d/n/y", $timestamp - $day) . "</strong> <br/>";
    echo "Demain sera le " . "<strong class='function'>" . date("d/n/y", $timestamp + $day) . "</strong>";

    echo "<hr/>";
    echo "Soit le mot <strong class='var'>$word</strong> <br/>";
    echo "la fonction strlen permet de connaître son nombres de charactères: <strong class='function'>" . strlen($word) . "</strong>";
    echo "la fonction strtolower permet de le mettre en miniscule: <strong class='function'>" . strtolower($word) . "</strong> <br/>";
    echo "la fonction strtoupper permet de le mettre en majuscule: <strong class='function'>" . strtoupper($word) . "</strong> <br/>";
    echo "la fonction str_replace permet de remplacer certaines lettres par d'autres: <strong class='function'>" . str_replace("l", "u", $word) . "</strong> <br/>";

    echo "<hr/>";
    echo "la fonction abs permet de récupérer sa valeur absolue: <strong class='function'>" . abs($number).  "</strong> <br/>";
    echo "la fonction round permet de faire des arrondis: <strong class='function'>" . round($number, 2) . " ou ". round($number) .  "</strong> <br/>";


  ?>
</body>
</html>

