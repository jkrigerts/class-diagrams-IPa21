<?php

require_once "PropulsionSystem.php";

class ICEngine extends PropulsionSystem {

  function __construct(public $size, private $cylinderCount) {
    
  }

  public function work() {
    echo "Brumm, brummm";
  }
}