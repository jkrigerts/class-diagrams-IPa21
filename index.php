<?php
include "Car.php";
include "ElectricMotor.php";
include "ICEngine.php";

$myCar = new Car("Orange", "Dacia", 2022, 19390, 15, 2.2, "Electric");


print "some {$myCar->brand} some other text";
// print_r($myCar);

abstract class Fruit {
  function __construct() {
    echo "ssv";
  }
}