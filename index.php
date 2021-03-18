<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="./TP7-2_style.css" rel="stylesheet" type="text/css" />
  <title>Variables et Calculs</title>
</head>
<body>
  <h1>Variables et Calculs</h1>
  <?php
        $number1 = 1.7;
        $number2 = 2.6;
        $number3 = 4.5;

        echo '<p>Le nombre stocké dans la variable $number1 est :' . " $number1</p>";
        echo '<p>Le nombre stocké dans la variable $number2 est :' . " $number2</p>";
        echo '<p>Le nombre stocké dans la variable $number3 est :' . " $number3</p>";

        echo "<p>La somme de $number1 et $number2 vaut: " . ($number2 + $number1) . "</p>";
        echo "<p>La différence de $number1 et $number3 vaut: " . ($number1 - $number3) . "</p>";
        echo "<p>La produit de $number2 et $number3 vaut: " . ($number2 * $number3) . "</p>";
        echo "<p>La résultat de <strong>($number1 + $number2) * $number3</strong> vaut: " . ($number1 + $number2)*$number3 . "</p>";
?>
</body>
</html>