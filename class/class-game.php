<?php
  class Game {
    /**
    * Amount points per game.
    * @var float
    */
    private $amountPerGame;

    /**
    * Constructs the game.
    * @param float $amountPerGame
    * @return void
    */
    function __construct($amountPerGame) {
      $this->setAmountPerGame($amountPerGame);
    }

    /**
    * Sets the amount per game.
    * @param float $amountPerGame
    * @return void
    */
    function setAmountPerGame($amountPerGame) {
      $this->amountPerGame = $amountPerGame;
    }

    /**
    * Gets the amount per game.
    * @return float
    */
    function getAmountPerGame() {
      return $this->amountPerGame;
    }

    /**
    * Generates a random number.
    * @return float
    */
    function randomNumber() {
      return rand(0,2);
    }

    /**
    * Puts down all the cups.
    * @param object $cupArray
    * @return void
    */
    function downCups($cupArray) {
      for ($i=0;$i<3;$i++) {
        $cupArray[$i]->putDown();
      }
    }

    /**
    * Sets ball under cup.
    * @param object $cupArray
    * @param object $ball
    * @param float $number
    * @return void
    */
    function ballUnderCup($cupArray, $ball, $number) {
      $cupArray[$number]->setBall($ball);
    }

    /**
    * Starts the game.
    * @param object $cupArray
    * @param object $ball
    * @return void
    */
    function start($cupArray, $ball) {
      $this->downCups($cupArray);

      $randomNumber = $this->randomNumber();

      $this->ballUnderCup($cupArray, $ball, $randomNumber);

      $_SESSION['ball'] = $randomNumber;
    }
  }
?>
