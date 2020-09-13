<?php

require_once 'classes/Car.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

debug($car1);

$car1->color = 'dark';
$car1->brand = 'brand';
$car1->speed = 130;
$car1->year = 2010;

$car2->color = 'light';
$car2->brand = 'brand2';
$car2->speed = 120;
$car2->year = 2020;

debug($car1);
debug($car2);

echo "<h3>About car:</h3>
Brand: {$car1->brand}<br>
color: {$car1->color}<br>
wheels: {$car1->wheels}<br>
year: {$car1->year}<br>
speed: {$car1->speed}<br>";

