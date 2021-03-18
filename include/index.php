<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="../TP7-4_style.css" rel="stylesheet" type="text/css" />
  <title>Structure include</title>
</head>
<body>
  <?php
    include "./template-top.php";
    include "./template-nav.php";
  ?>
<main>
    <?php
        $request = $_REQUEST;

        if (isset($request["page"])) {
            if ($request["page"] == "page2") include "./page2.php";
            else if ($request["page"] == "page3") include "./page3.php";
            else echo "Not found";
        } else {
            include "./page1.php";
        }
    ?>
</main>
    <?php include "./template-bottom.php" ?>
</body>
</html>