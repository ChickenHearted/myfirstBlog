<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $login_name = $_POST["login_name"] ?? '';

  if (empty($login_name)) {
    array_push($errors, "Bitte geben Sie einen Benutzernamen ein.");
  } else if (!empty($login_name)) {
    $login_name = htmlspecialchars($login_name);
  }

  $passwort = $_POST["password"] ?? '';

  if (empty($passwort)) {
    array_push($errors, "Bitte geben Sie ein Passwort ein.");
  } else if (!empty($passwort)) {
    $passwort = htmlspecialchars($passwort);
  }

  if (empty($errors) && !empty($login_name) && !empty($passwort)) {
    $stmt = '';
    $dbh = new PDO('mysql:host=localhost;dbname=bloggers','root' ,'');
    $stmt = $dbh->query("INSERT INTO `eintraege` (login_username, password) VALUES ('$login_name','$passwort')");
  }
} ?>
