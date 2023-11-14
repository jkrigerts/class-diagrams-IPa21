<?php
include "Car.php";
include "ElectricMotor.php";

include "ICEngine.php";

$myCar = new Car("Orange", "Dacia", 2022, 19200, 15, 2.2);


// $electric = new ElectricMotor(960, "electricity", 0.9);
// echo $electric->power;

$regularEngine = new ICEngine(960, "gasoline", 0.7);
echo $regularEngine->power;