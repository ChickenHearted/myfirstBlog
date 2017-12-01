<?php
  include 'models/kommentare.model.php';
?>
<div class="wrapper_kommentieren">
    <div class="kommentar">
      <h4>Kommentare zu diesem Blog-Einträge: </h4>
        <div class="form-blog">
          <?php
          if (isset($blogArray)) {
            foreach($blogArray as $y) {
              echo 'Benutzername: ';
              echo $y["commenter_name"] . '<br>';
              echo 'Kommentar: <br>';
              echo $y["comment"] . '<br>';
              echo $y["creation_date"] . ' - ' . $y["creation_time"];
              echo '<div class="hr_strich"></div>';
            }
          } else {
            echo 'Noch keine Kommentare vorhanden!';
            }
          ?>
        </div>
      <a class="btn btn-primary" href="index.php?page=kommentieren&eintragid=<?= $eintragId ?>">Kommentar hinzufügen</a>
      <a class="btn btn-primary" href="index.php">Home</a>
    </div>
</div>
