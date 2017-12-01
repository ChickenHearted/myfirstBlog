<?php

  $eintragId = $_GET["eintragid"] ?? '';

  $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
  $stmt = $dbh->query('SELECT * FROM `kommentare` WHERE eintrag_id=' . $eintragId);
  $blogArray = [];
  foreach($stmt->fetchAll() as $x) {
    array_push($blogArray, $x);
} ?>
