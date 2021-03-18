<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../../TP9-2_style.css" rel="stylesheet" type="text/css" />
  <title>Formulaire select</title>
</head>
<body>
  <h1>Formulaire select</h1>

  <form method="GET" action="target.php">
    <div>
        <input type="text" name="name" id="name" placeholder="name" required>
        <input type="text" name="lastname" id="lastname" placeholder="last name" required>
        <input type="number" name="age" id="age" placeholder="age" required>
        <select name="genre" id="genre" required>
            <option value="man">Homme</option>
            <option value="woman">Femme</option>
        </select>
      <select name="usage" required>
        <option value="auto-formation">Auto-formation</option>
        <option value="Enseignement">Enseignement</option>
        <option value="Etudes">Etudes en informatique</option>
        <option value="Pro">Pro</option>
      </select>
    </div>
    <input type="submit" value="Valider">
  </form>

</body>
</html>