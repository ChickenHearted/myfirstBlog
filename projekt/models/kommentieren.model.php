<?php
$errors = [];
$eingabe = [];
$benutzer_eingabe = [];
$kommentar_eingabe = [];
$kommentar = '';
$benutzer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $datum = date("Y.m.d");
  $uhrzeit = date("H:i");

  array_push($eingabe, "<br>Ihr Kommentar: <br>");
  array_push($eingabe, "",$datum," - ",$uhrzeit," Uhr<br>");

  $benutzer = $_POST["benutzer"] ?? '';

  if (empty($benutzer)) {
    array_push($errors, "Bitte geben Sie einen Benutzernamen ein.");
  } else if (!empty($benutzer)) {

    $benutzer = htmlspecialchars($benutzer);
    array_push($benutzer_eingabe, "Benutzername: ");
  }
  $kommentar = trim($_POST["kommentar"]);
  $kommentar = nl2br($kommentar);

  if (empty($kommentar)) {
    array_push($errors, "Bitte geben Sie Ihren Kommentar zu Ihrem gewünschtem Blog ab.");
  } else if (!empty($kommentar)) {
    array_push($kommentar_eingabe, "<br>Kommentar: <br>");
  }
  if (!empty($kommentar)) {
    if (strpos($kommentar, ' ') == false) {
      array_push($errors, "Ihr Kommentar enthält keine Leerzeichen, dies dient zum Schutz for Spam.");
    }
  }
}

$kommentar = strip_tags($kommentar, '<img><a><br>');

if (empty($errors) && !empty($benutzername) && !empty($blog)) {
  $stmt = '';
  $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
  $stmt = $dbh->query("INSERT INTO kommentare (comment, commenter_name, creation_date, creation_time, eintrag_id) VALUES ('$benutzer', '$kommentar', curdate(), curtime()), '$eintragId'");
}
?>
