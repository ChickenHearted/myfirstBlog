<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bloggers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>
  <?php
  $page = $_GET['page'] ?? 'home';

  include 'views/' . $page . '.view.php';
  ?>
</body>
</html>
