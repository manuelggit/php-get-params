<!-- Stampare una stringa verde se la variabile password passata in GET è
uguale a "Boolean",
altrimenti stampare una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stringa verde o rossa</title>
    <?php

    $password = $_GET['password'];
    $ok = true;
    if($password !== "Boolean"){
      $ok = false;
    }


    ?>

  </head>
  <body>

    <?php

      if($ok) {
        ?><h2>password corretta</h2><?php
      } else {
        ?><h2>password sbagliata</h2><?php
      }

    ?>

  </body>
</html>
