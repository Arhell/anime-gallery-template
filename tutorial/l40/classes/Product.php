<?php


class Product
{
  public $name;
  public $price;

  public $cpu;
  public $pages;

  public function __construct($name, $price, $cpu = null, $pages = null)
  {
    $this->name = $name;
    $this->price = $price;
    $this->cpu = $cpu;
    $this->pages = $pages;
  }

  public function getCpu()
  {
    return $this->cpu;
  }

  public function getPages()
  {
    return $this->pages;
  }

  public function getProduct($type = 'note')
  {
    $out = "<hr><b>About:</b><br>
            Some: {$this->name}<br>
            Price: {$this->price}<br>";

    if($type == 'note') {
      $out .= "Text: {$this->cpu}<br>";
    } else {
      $out .= "Num: {$this->pages}<br>";
    }

    return $out;
  }
}
