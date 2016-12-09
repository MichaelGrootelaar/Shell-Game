<?php
  session_start();
  require_once('class/class-ball.php');
  require_once('class/class-player.php');
  require_once('class/class-cup.php');
  require_once('class/class-game.php');

  if (!isset($_COOKIE['amount'])) {
    $amount = 0;
  } else {
    $amount = $_COOKIE['amount'];
  }

  $ball = new Ball('red');

  $game = new Game(20);

  $cupArray = [new Cup('yellow','plastic',0), new Cup('yellow','plastic',1), new Cup('yellow','plastic',2)];

  if (isset($_GET['show_cup'])) {
    $cupArray[$_GET['show_cup']]->liftUp();

    if ($_SESSION['ball'] == $_GET['show_cup']) {
      $amount = $amount + $game->getAmountPerGame();
      $game->ballUnderCup($cupArray, $ball, $_SESSION['ball']);

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

    $player = new Player('Michael Grootelaar', $amount);

  include('view/view.php');
?>
