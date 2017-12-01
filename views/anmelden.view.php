<?php
  include 'models/anmelden.model.php';
?>
<div class="wrapper_anmelden">
  <form action="index.php?page=anmelden" method="POST">
    <fieldset>
      <h3>Anmelden</h3>
      <div class="form-blog">
        <label for="login_name">Benutzername</label>
        <input type="text" id="login_name" name="login_name">
      </div>
      <div class="form-blog">
        <label for="password">Passwort</label>
        <input type="password" id="password" name="password">
      </div>
    </fieldset>
    <?php
    if (!empty($errors)) {
      ?>
      <div class="errors">
        <ul>
          <?php
          foreach ($errors as $ausgabe) {
            echo '<li>' . $ausgabe . '</li>';
          } ?>
      </ul>
    </div>
  <?php } ?>
    <div class="form-actions">
      <label><input class="btn btn-primary" type="submit" name="login" value="Anmelden" /></label>
      <a class="btn btn-primary" href="index.php">Home</a>
    </div>
  </form>
</div>
