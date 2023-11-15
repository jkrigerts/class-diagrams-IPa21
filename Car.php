<?php

require_once("Tire.php");

class Car {
  public $color;
  public $brand;
  private $releaseYear;
  private $mileage;
  // Kā pateikt, ka auto ir 4 riepas
  private $tires = [];
  private $propulsionSystems = [];

  function __construct($color, $brand, $releaseYear, $mileage, $tireSize, $tirePressure, $type)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->releaseYear = $releaseYear;
    $this->mileage = $mileage;

    for ($i = 0; $i < 4; $i++) {
      $this->tires[] = new Tire($tireSize, $tirePressure); 
    }

    // Pieliec motoru vai divus
    // $type vērtības -> Hybrid, Electric, Gasoline, Diesel, H2
    // Pārbaudi kāds ir type
    if ($type === "Hybrid") {
      $this->propulsionSystems[] = new ICEngine(1,1,650,"Gasoline", 0.7);
      $this->propulsionSystems[] = new ElectricMotor(1, "Electriciry", 0.8);
    } else if ($type === "Electric") {
      $this->propulsionSystems[] = new ElectricMotor(1, "Electriciry", 0.8);
    } else if ($type === "Gasoline" || $type === "Diesel") {
      $this->propulsionSystems[] = new ICEngine(1,1,650,"Gasoline", 0.7);
    }
    else {
      echo "Car not supported";
    }
  }

  public function move() {
  }
  function makeNoise() {
  }
}