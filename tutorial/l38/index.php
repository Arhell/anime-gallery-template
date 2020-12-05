<?php

require_once 'classes/Car.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('dark', 4, 130, 'brand');

$car1->__construct('dark', 4, 130, 'brand');

echo $car1->getCarInfo();

$car1->getLor();

