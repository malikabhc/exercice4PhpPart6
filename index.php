<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4/6</title>
  </head>
  <body>
    <!-- exo04-6/?language=PHP&server=LAMP -->
    <p>
      <?php
      //!empty -> vérifie que la variable existe et n'est pas vide
        if (!empty($_GET['language'])) {
        echo $_GET['language'] . ' ';
      } else {
        echo 'Il manque le paramètre language';
      }
      ?>
      <br />
      <br />
      <?php
        if (!empty($_GET['server'])) {
        echo $_GET['server'];
      } else {
        echo 'Il manque le paramètre server';
      }
      ?>
    </p>
  </body>
</html>
