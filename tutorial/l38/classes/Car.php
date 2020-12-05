<?php


class Car
{
  public $color;
  public $wheels;
  public $speed;
  public $brand;

//  public function __construct($color, $wheels, $speed, $brand)
//  {
//    $this->color = $color;
//    $this->wheels = $wheels;
//    $this->speed = $speed;
//    $this->brand = $brand;
//    echo __METHOD__ . '<br>';
//  }

  public function Car($color, $wheels, $speed, $brand) {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
    echo __METHOD__ . '<br>';
  }

  public function getLor() {
    ?>
      <div>text</div>
    <?php
  }

  public function getCarInfo() {
    return "<h3>About car:</h3>
    Brand: {$this->brand}<br>
    color: {$this->color}<br>
    wheels: {$this->wheels}<br>
    speed: {$this->speed}<br>";
  }

  public function __destruct()
  {
    var_dump($this);
  }
}