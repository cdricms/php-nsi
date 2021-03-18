<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP9-1_style.css" rel="stylesheet" type="text/css" />
  <title>Formulaire avec input</title>
</head>
<body>
  <h1>Formulaire avec input</h1>
    <form action="./target.php" method="GET">
        <input required  type="text" name="account" id="account" placeholder="account">
        <input required type="password" name="password" id="password" placeholder="password">
        <input required type="number" name="age" id="age" placeholder="age">
        <button type="submit">Valider</button>
    </form>
</body>
</html>