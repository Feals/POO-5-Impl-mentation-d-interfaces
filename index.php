<?php


require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$car = new Car('green', 4, 4,'electric');
var_dump($car);

echo "<br><br>essayons d'allumer la lumière <br><br>";

echo $car->switchOn();

echo "<br><br>essayons d'éteindre la lumière <br><br>";
echo $car->switchOff() ."<br><br>";

$blueBike = new Bicycle('blue', 1 , true);
$blueBike->setCurrentSpeed(0);
echo "vitesse actuel du vélo" . "  " . $blueBike->getCurrentSpeed() . "km/h";
var_dump($blueBike);
echo "<br><br>essayons d'allumer la lumière <br><br>";

echo $blueBike->switchOn();

echo "<br><br>et en roulant? <br><br>";
echo $blueBike->setCurrentSpeed(10);
echo $blueBike->switchOn();

echo "<br><br>essayons d'éteindre la lumière <br><br>";
echo $blueBike->switchOff() ."<br><br><br><br>";

echo "et avec un vélo sans dynamo?";

$redBike = new Bicycle('red', 1, false);
$redBike->setCurrentSpeed(0);
var_dump($redBike);

echo "<br><br>essayons d'allumer la lumière <br><br>";

echo $redBike->switchOn();

echo "<br><br>et en roulant? <br><br>";
echo $redBike->setCurrentSpeed(10);
echo $redBike->switchOn();



