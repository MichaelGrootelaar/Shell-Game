<?php
  session_start();
  require_once('class/class-ball.php');
  require_once('class/class-player.php');
  require_once('class/class-cup.php');
  require_once('class/class-game.php');

  $amount = (isset($_COOKIE['amount'])) ? $_COOKIE['amount'] : 0;
  $options = (isset($_SESSION['options'])) ? $_SESSION['options'] : [3, 1];

  $ball = new Ball('red');
  $game = new Game(20);

  $cupArray = $game->cupArray($options[0], 'plastic', 'yellow');

  if (isset($_GET['show_cup'])) {
    $cupArray[$_GET['show_cup']]->liftUp();

    if (in_array($_GET['show_cup'], $_SESSION['ball'])) {
      $amount = $amount + $game->getAmountPerGame();
      $game->ballUnderCup($cupArray, $ball, $_GET['show_cup']);

      $message = "Goed gegokt!";
      setcookie('amount', $amount);
    } else {
      $amount = $amount - $game->getAmountPerGame();

      $message = "Fout gegokt!";
      setcookie('amount', $amount);
    }
  } else {
    $game->start($cupArray, $ball);
    $message = "Kies een beker!";
  }

  $player = new HumanPlayer('Michael Grootelaar', $amount);

  include('view/view.php');
?>
