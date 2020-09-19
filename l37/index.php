<?php

require_once 'classes/Car.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();

$car1->color = 'dark';
$car1->brand = 'brand';
$car1->speed = 130;

$car2->color = '111';
$car2->brand = '111';
$car2->speed = 111;

echo $car1->getCarInfo();
echo $car2->getCarInfo();

