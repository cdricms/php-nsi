<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../TP8-1_style.css" rel="stylesheet" type="text/css" />
  <title>Variable Superglobale $_SERVER</title>
</head>
<body>
  <h1>Variable Superglobale $_SERVER</h1>
  <?php 
        // var_dump($_SERVER);
        $protocol = $_SERVER["SERVER_PROTOCOL"];
        $software_server = $_SERVER["SERVER_SOFTWARE"];
        $software_client = $_SERVER["HTTP_USER_AGENT"];
        
        echo "<p>Cette page web a été ouverte grâce au protocole <strong class='server'>" . $protocol . "</strong>, qui fonctionne en mode client-serveur</p> <br/>";
        echo "<p>Le logiciel serveur est <strong class='server'>" . $software_server . "</strong></p> <br/>";
        echo "<p>Le logiciel client est <strong class='server'>" . $software_client . "</strong></p> <br/>";
  ?>
</body>
</html>