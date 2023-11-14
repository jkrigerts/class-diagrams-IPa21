<?php

require_once("Tire.php");

class Car {
  public $color;
  public $brand;
  private $releaseYear;
  private $mileage;
  // Kā pateikt, ka auto ir 4 riepas
  private $tires = [];

  function __construct($color, $brand, $releaseYear, $mileage, $tireSize, $tirePressure)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->releaseYear = $releaseYear;
    $this->mileage = $mileage;

    for ($i = 0; $i < 4; $i++) {
      $this->tires[] = new Tire($tireSize, $tirePressure); 
    }
  }

  public function move() {
  }
  function makeNoise() {
  }
}