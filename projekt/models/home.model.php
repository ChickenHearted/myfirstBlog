<?php
  $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
  $stmt = $dbh->query('SELECT * FROM `eintraege` ORDER BY id DESC');
  $blogArray = [];
  foreach($stmt->fetchAll() as $x) {
    array_push($blogArray, $x);
} ?>
