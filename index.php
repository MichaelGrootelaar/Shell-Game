<!DOCTYPE html>
<?php
  session_start();
  require_once('class-ball.php');
?>
<html>
  <head>
    <title>Shell Game</title>
  </head>

  <body>
    <h1>Gebruiker aanmaken:</h1>
    <form method="POST" action="script.php">
      <input type="text" name="username">
      <input type="text" name="password">

      <input type="submit">
    </form>

    <h1>Inloggen:</h1>
    <form method="POST" action="script2.php">
      <input type="text" name="username">
      <input type="text" name="password">

      <input type="submit">
    </form>

    <h1>Ingelogde:</h1>

  </body>
</html>
