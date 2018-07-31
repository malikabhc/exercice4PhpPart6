<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4/6</title>
  </head>
  <body>
    <!-- exo04-6/?language=PHP&server=LAMP -->
      <?php
        if (isset($_GET['language']) && isset($_GET['server'])) {
        echo $_GET['language'] . ' ' . $_GET['server'];
      }
      ?>
  </body>
</html>
