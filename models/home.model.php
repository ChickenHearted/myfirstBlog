<?php
  $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
  $stmt = $dbh->query('SELECT * FROM `eintraege` ORDER BY id DESC');
  $blogArray = [];
  foreach($stmt->fetchAll() as $x) {
    array_push($blogArray, $x);
} ?>
<?php

  $dbh = new PDO('mysql:host=localhost;dbname=bloggers', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $dbr = new PDO('mysql:host=localhost;dbname=bloggers', 'root', '');

  $id = $_POST["id"] ?? '';

  if(isset($_POST["horrible"])) {
    $bewertung= "Horrible";
  }
  if(isset($_POST["meh"])) {
    $bewertung= "Meh";
  }
  if(isset($_POST["medium"])) {
    $bewertung= "Medium";
  }
  if(isset($_POST["good"])) {
    $bewertung= "Good";
  }
  if(isset($_POST["godlike"])) {
    $bewertung= "Godlike";
  }

  if($bewertung == "Horrible") {
      $stmt = $dbr->query("UPDATE eintraege SET summe_bewertungen = summe_bewertungen + 1, anzahl_bewertungen = anzahl_bewertungen +1 WHERE id ='$id'");
  }
  if($bewertung == "Meh") {
      $stmt = $dbr->query("UPDATE eintraege SET summe_bewertungen = summe_bewertungen + 2,  anzahl_bewertungen = anzahl_bewertungen +1 WHERE id ='$id'");
  }
  if($bewertung == "Medium") {
      $stmt = $dbr->query("UPDATE eintraege SET summe_bewertungen = summe_bewertungen + 3, anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
  }
  if($bewertung == "Good") {
      $stmt = $dbr->query("UPDATE eintraege SET summe_bewertungen = summe_bewertungen + 4, anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
  }
  if($bewertung == "Godlike") {
      $stmt = $dbr->query("UPDATE eintraege SET summe_bewertungen = summe_bewertungen + 5, anzahl_bewertungen = anzahl_bewertungen + 1 WHERE id ='$id'");
  }
}

  $stmt = $dbh -> query ('SELECT *, (summe_bewertungen / anzahl_bewertungen) AS AvgRating  FROM eintraege ORDER BY id DESC');
  $blogArray = [];
    foreach ($stmt->fetchAll() as $x) {
      array_push($blogArray, $x);
    }
?>
