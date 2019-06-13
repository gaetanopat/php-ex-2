<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Esercizio 2 php</title>
  </head>
  <body>
    <?php
      // prendo la password
      $password = $_GET['password'];
      // se l'utente ha inserito una password
      if(strlen($password)>0){
        // se la password == 'Boolean'
        if($password == 'Boolean'){
          echo '<h2 class="green">La password inserita è corretta</h2>';
        } else {
          echo '<h2 class="red">La password inserita è errata</h2>';
        }
      }
      // se l'utente non ha inserito nulla come campo
      else {
        echo '<h2>Inserisci una password!</h2>';
      }
    ?>
  </body>
</html>
