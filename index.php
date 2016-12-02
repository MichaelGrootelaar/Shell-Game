<?php
  session_start();
  require_once('class/class-ball.php');
  require_once('class/class-player.php');
  require_once('class/class-cup.php');

  $ball = new Ball('red');
  $player = new Player('Michael Grootelaar', 100);

  $cupArray = [new Cup('yellow','plastic'), new Cup('yellow','plastic'), new Cup('yellow','plastic')];

  function start() {
    for ($i=0;$i<3;$i++) {
      $cuparray[$i]->putDown();
    }

    $randomNumber = rand(0,2);

    $cuparray[$randomNumber]->setBall($ball->show());

    $_SESSION['ball'] = $randomNumber;
  }

  include('view/view.php');
?>
