<h1>Willkommen auf Carolina's Blogger-Seite</h1>
<div class="wrapper">
  <form action="index.php" method="POST">
    <p id="anmelden"><a href="index.php?page=anmelden">⇨ Anmelden ⇦</a></p>
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
              echo ''. $x["time"] . '<br>';
              echo '<form action="index.php?page=home" method="post">';
              echo '<button class="btn btn-primary" name="horrible" type="submit">Horrible</button>';
              echo '<button class="btn btn-primary" name="meh" type="submit">Meh</button>';
              echo '<button class="btn btn-primary" name="medium" type="submit">Medium</button>';
              echo '<button class="btn btn-primary" name="good" type="submit">Good</button>';
              echo '<button class="btn btn-primary" name="godlike" type="submit">Godlike</button>' . '';
              echo '<input name = "id" type="hidden" value="'. $x["id"] . '" />';
            ?> <a href="index.php?page=kommentare&eintragid=<?= $x["id"]; ?>"><span id="kommentare">⇨Kommentare<br></span></a>
            <?php

              if($x['AvgRating'] != NULL) {
                if($x["AvgRating"] < 2)
                  echo '→ Durchschnittsbewertung = Horrible';
                if($x["AvgRating"] >=2 && $x["AvgRating"] < 3)
                  echo '→ Durchschnittsbewertung = Meh';
                if($x["AvgRating"] >=3 && $x["AvgRating"] < 4)
                  echo '→ Durchschnittsbewertung = Medium';
                if($x["AvgRating"] >=4 && $x["AvgRating"] < 5)
                  echo '→ Durchschnittsbewertung = Good';
                if($x["AvgRating"] == 5 || $x["AvgRating"] > 4.6)
                  echo '→ Durchschnittsbewertung = Godlike';
                  } else {
                    echo 'Seien Sie der erste der bewertet! :C';
                    }
                echo '<div class="hr_strich"></div>';
                echo '</form>';
                } ?>
        </div>
      </div>
       <?php
       include 'views/navigation.part.php';
       ?>
    </fieldset>
  </form>
</div>
