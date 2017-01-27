<?php
  session_start();
  require_once('class/class-ball.php');
  require_once('class/class-player.php');
  require_once('class/class-cup.php');
  require_once('class/class-game.php');

  $amount = (isset($_SESSION['amount'])) ? $_SESSION['amount'] : 0;
  $options = (isset($_SESSION['options'])) ? $_SESSION['options'] : [3, 1];
  $player = (isset($_SESSION['players'])) ? $_SESSION['players'] : new HumanPlayer("Michael Grootelaar",0);

  $ball = new Ball('red');
  $game = new Game(20);

  $cupArray = $game->cupArray($options[0], 'plastic', 'yellow');

  if (isset($_GET['show_cup'])) {
    $cupArray[$_GET['show_cup']]->liftUp();

    if (in_array($_GET['show_cup'], $_SESSION['ball'])) {
      $_SESSION['amount'] = $amount + $game->getAmountPerGame();
      $game->ballUnderCup($cupArray, $ball, $_GET['show_cup']);

      $message = "Goed gegokt!";
    } else {
      $_SESSION['amount'] = $amount - $game->getAmountPerGame();

      $message = "Fout gegokt!";
    }
  } else {
    $game->start($cupArray, $ball, $options);
    $message = "Kies een beker!";
  }

  include('view/view.php');
?>
