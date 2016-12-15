<?php
  abstract class Player {
    // You need to choose between 2 classes "HumanPlayer" or "ComputerPlayer".
    abstract function __toString();

    /**
    * The name of the player.
    * @var string
    */
    private $name;
    /**
    * The amount of the player.
    * @var float
    */
    private $amount;

    /**
    * Constructs a player.
    * @param string $name
    * @param float $amount
    * @return void
    */
    function __construct($name, $amount) {
      $this->setName($name);
      $this->setAmount($amount);
    }

    /**
    * Sets the name of the player.
    * @param string $name
    * @return void
    */
    function setName($name) {
      $this->name = $name;
    }

    /**
    * Gets the name of the player.
    * @return string
    */
    function getName() {
      return $this->name;
    }

    /**
    * Sets the amount of the player.
    * @param float $amount
    * @return void
    */
    function setAmount($amount) {
      $this->amount = $amount;
    }

    /**
    * Gets the amount of the player.
    * @return float
    */
    function getAmount() {
      return $this->amount;
    }
  }

  class HumanPlayer extends Player {
    /**
    * Constructs the human player.
    * @return void
    */
    function __construct($name, $amount) {
      parent::__construct($name, $amount);
    }

    /**
    * Shows the human player.
    * @return string
    */
    function __toString() {
      return '<b>'.$this->getname().':'.$this->getAmount().'</b>';
    }
  }

  class ComputerPlayer extends Player {
    /**
    * Shows the computer player.
    * @return string
    */
    function __toString() {
      return "";
    }
  }
?>
