<?php
  include 'models/erstellen.model.php';
?>
<div class="wrapper_erstellen">

  <?php
  $isLoggedIn = true;
  if ($isLoggedIn)  { ?>
  <form action="index.php?page=erstellen" method="POST">
     <fieldset>
      <h3>Neuer Blog erstellen</h3>
      <div class="form-blog">
        <label for="name">Benutzername</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-blog">
        <label for="blog">Blog-Eintrag</label>
        <textarea id="blog" name="blog"></textarea>
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
      <a class="btn btn-primary" href="index.php">Home</a>
      <?php
      foreach($eingabe as $ausgabe) {
        echo $ausgabe;
        }
      foreach($eingabe_benutzer as $ausgabe_benutzer) {
        echo $ausgabe_benutzer;
        }
      echo $benutzername;
      foreach($eingabe_blog as $ausgabe_blog) {
        echo $ausgabe_blog;
        }
      echo $blog;
       ?>
     <?php } else {
       include 'views/anmelden.view.php';
     } ?>
    </div>
  </form>
</div>
