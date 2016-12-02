<?php
  class Ball {
    /**
    * Color of the ball.
    * @var string
    */
    private $color;

    /**
    * Constructs the ball.
    * @param $color
    * @return void
    */
    function __construct($color) {
      $this->setColor($color);
    }

    /**
    * Sets the color of the ball.
    * @param $color
    * @return void
    */
    function setColor($color) {
      $this->color = $color;
    }

    /**
    * Gets the color of the ball.
    * @return string
    */
    function getColor() {
      return $this->color;
    }

    /**
    * Shows the ball.
    * @return string
    */
    function show() {
      return '<div class="ball '.$this->getColor().'"></div>';
    }
  }
?>
