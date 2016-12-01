<?php
  class Ball {
    private $color;

    function __construct($color) {
      $this->setColor($color);
    }

    function setColor($color) {
      $this->color = $color;
    }

    function getColor() {
      return $this->color;
    }
  }
?>
