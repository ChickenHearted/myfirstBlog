<?php
$errors = [];
$eingabe = [];
$eingabe_benutzer = [];
$eingabe_blog = [];
$blog = '';
$benutzername = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $datum = date("Y.m.d");
  $uhrzeit = date("H:i");

  array_push($eingabe, "<br>Ihr Blog: <br>");
  array_push($eingabe, "",$datum," - ",$uhrzeit," Uhr<br>");

  $benutzername = $_POST["name"] ?? '';

  if (empty($benutzername)) {
    array_push($errors, "Bitte geben Sie einen Benutzernamen ein.");
  } else if (!empty($benutzername)) {

    $benutzername = htmlspecialchars($benutzername);
    array_push($eingabe_benutzer, "Benutzername: ");
  }

  $blog = nl2br($blog);

  if (empty($blog)) {
    array_push($errors, "Bitte geben Sie Ihren gewünschten Text für Ihren Blog ein.");
  } else if (!empty($blog)) {
    array_push($eingabe_blog, "<br>Blog-Eintrag: <br>");
  }
  if (!empty($blog)) {
    if (strpos($blog, ' ') == false) {
      array_push($errors, "Ihr Text enthält keine Leerzeichen, dies dient zum Schutz for Spam.");
    }
  }
}
// todo: auch andere HTML-Tags nicht erlauben (evtl. etwas mit Regex machen, z.B. mit Funktion preg_replace? )

$blog = strip_tags($blog, '<img><a><br>');

if (empty($errors) && !empty($benutzername) && !empty($blog)) {
  $stmt = '';
  $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
  $stmt = $dbh->query("INSERT INTO `eintraege` (username, blog, date, time) VALUES ('$benutzername','$blog', curdate(), curtime())");
} ?>
