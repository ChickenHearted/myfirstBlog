<?php
  include 'models/kommentieren.model.php';
?>
<div class="wrapper_kommentieren">
  <form action="index.php?page=kommentieren&eintragid=<?= $eintragId; ?>" method="POST">
     <fieldset>
      <h3>Ihr Kommentar</h3>
      <div class="form-blog">
        <label for="benutzer">Benutzername</label>
        <input type="text" id="benutzer" name="benutzer">
      </div>
      <div class="form-blog">
        <label for="kommentar">Kommentar</label>
        <textarea id="kommentar" name="kommentar"></textarea>
      </div>
    </fieldset>
    <?php
    if (!empty($errors)) { ?>
    <div class="errors">
      <ul>
      <?php
      foreach ($errors as $error_ausgabe) {
        echo '<li>' . $error_ausgabe . '</li>';
      } ?>
      </ul>
    </div>
    <?php } ?>
    <div class="form-actions">
      <input class="btn btn-primary" type="submit" value="Speichern">
      <input class="btn btn-primary" type="reset" value="Zurücksetzen">
      <a class="btn btn-primary" href="index.php?page=kommentare&eintragid=<?= $eintragId; ?>">alle Kommentare</a>
      <a class="btn btn-primary" href="index.php">Home</a>
      <?php
      foreach($eingabe as $ausgabe) {
        echo $ausgabe;
        }
      foreach($benutzer_eingabe as $benutzer_ausgabe) {
        echo $benutzer_ausgabe;
        }
      echo $benutzer;
      foreach($kommentar_eingabe as $kommentar_ausgabe) {
        echo $kommentar_ausgabe;
        }
      echo $kommentar;
       ?>
  </form>
</div>
