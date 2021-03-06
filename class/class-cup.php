<?php
  interface CupCheck {
    function setBall($ball);
    function liftUp();
    function putDown();
    function __toString();
  }

  class Cup implements CupCheck {
    /**
    * The color of the cup.
    * @var string
    */
    private $color;
    /**
    * The type material of the cup.
    * @var string
    */
    private $type;
    const TYPE_PLASTIC = 'plastic';
    const TYPE_GLASS = 'glass';
    /**
    * The position of the cup.
    * @var boolean
    */
    private $positionUp;
    /**
    * The ball.
    * @var object
    */
    private $ball = null;
    /**
    * The ID of the cup.
    * @var string
    */
    private $id;

    /**
    * Constructs a cup.
    * @param $color
    * @param $type
    * @return void
    */
    function __construct($color, $type = TYPE_PLASTIC, $id) {
      $this->setColor($color);
      $this->setType($type);
      $this->setId($id);
    }

    /**
    * Sets the cup color.
    * @param $color
    * @return void
    */
    function setColor($color) {
      $this->color = $color;
    }

    /**
    * Gets the cup color.
    * @return string
    */
    function getColor() {
      return $this->color;
    }

    /**
    * Sets the type of the cup.
    * @param $type
    * @return void
    */
    function setType($type) {
      $this->type = $type;
    }

    /**
    * Gets the type of the cup.
    * @return void
    */
    function getType() {
      return $this->type;
    }

    /**
    * Puts the cup in the up position.
    * @param $positionUp
    * @return void
    */
    function setPositionUp($positionUp) {
      $this->positionUp = $positionUp;
    }

    /**
    * Puts the cup in the up position.
    * @return boolean
    */
    function getPositionUp() {
      return $this->positionUp;
    }

    /**
    * Sets the ID for the cup.
    * @param $id
    * @return void
    */
    function setId($id){
      $this->id = $id;
    }

    /**
    * Gets the ID from the cup.
    * @return string
    */
    function getId(){
      return $this->id;
    }

    /**
    * Sets the ball object.
    * @param $ball
    * @return void
    */
    function setBall($ball) {
      $this->ball = $ball;
    }

    /**
    * Gets the ball object.
    * @return object
    */
    function getBall() {
      return $this->ball;
    }

    /**
    * Shows a cup.
    * @return string
    */
    function __toString() {
      if ($this->getPositionUp()) {
        $position = 'liftup';
        $function = $this->putDown();
      } else {
        $position = 'putdown';
        $function = $this->liftUp();
      }

      if ($this->getType() == 'glass') {
        $color = '';
      } else {
        $color = $this->getColor();
      }

      return '<a href="?show_cup='.$this->getId().'"><div class="cup '.$color.' '.$position.'">'.$this->getBall().'</div></a>';
    }

    /**
    * Lifts the cup up.
    * @return void
    */
    function liftUp() {
      $this->setPositionUp(true);
    }

    /**
    * Puts the cup down.
    * @return void
    */
    function putDown() {
      $this->setPositionUp(false);
    }
  }
?>
