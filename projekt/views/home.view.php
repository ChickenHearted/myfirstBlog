<h1>Willkommen auf Carolina's Blogger-Seite</h1>
<div class="wrapper">
  <form action="index.php" method="POST">
    <fieldset>
     <div class="blog">
       <h2>Unsere Blog-Einträge:</h2>
        <div class="form-blog">
          <?php
            include 'models/home.model.php';
            foreach($blogArray as $x) {
              echo 'Benutzername: '. $x["username"] . '';
              echo '<br>Blog-Eintrag: <br>'. $x["blog"] . '<br>';
              echo ''. $x["date"] . ' - ';
              echo ''. $x["time"] . '';
                ?> <a href="index.php?page=kommentare&eintragid=<?= $x["id"]; ?>">
                  <span id="kommentare">Kommentare</span>
                </a>
              <?php
              echo '<div class="hr_strich"></div>';
          } ?>
        </div>
      </div>
       <?php
       include 'views/navigation.part.php';
       ?>
    </fieldset>
  </form>
</div>
