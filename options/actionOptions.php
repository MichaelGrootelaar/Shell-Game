<?php
  session_start();

  $array = [$_POST['numberCups'], $_POST['numberBalls']];

  $_SESSION['options'] = $array;

  header('Location: ../index.php');
?>
