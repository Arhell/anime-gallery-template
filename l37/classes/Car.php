<?php


class Car
{
  public $color;
  public $wheels = 4;
  public $speed = 100;
  public $brand;

  public function getCarInfo() {
    return "<h3>About car:</h3>
    Brand: {$this->brand}<br>
    color: {$this->color}<br>
    wheels: {$this->wheels}<br>
    speed: {$this->speed}<br>";
  }
}