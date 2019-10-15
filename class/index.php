<?php
require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'fuel');
echo $car->forward();

$truck = new truck(100, 'white', 3, 'fuel');
var_dump($truck);
echo $truck->forward();
echo $truck->fillingIN();
