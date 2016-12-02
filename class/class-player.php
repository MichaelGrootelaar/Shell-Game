<?php
  class Player {
    /**
    * The name of the player.
    * @var string
    */
    private $name;
    /**
    * The amount of the player.
    * @var integer
    */
    private $amount;

    /**
    * Constructs a player.
    * @param $name
    * @param $amount
    * @return void
    */
    function __construct($name, $amount) {
      $this->setName($name);
      $this->setAmount($amount);
    }

    function setName($name) {
      $this->name = $name;
    }

    function getName() {
      return $this->name;
    }

    function setAmount($amount) {
      $this->amount = $amount;
    }

    function getAmount() {
      return $this->amount;
    }

    /**
    * Shows the name and amount of the player.
    * @return string
    */
    function show(){
      return '<b>'.$this->getname().':'.$this->getAmount().'</b>';
    }
  }
?>
