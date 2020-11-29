<?php

namespace classes;

class BookProduct extends Product implements iInterface
{

  public $page;

  public function __construct($name, $price, $page)
  {
    parent::__construct($name, $price);
    $this->page = $page;
    $this->setDiscount(5);
    var_dump(self::class);
  }

  public function getCase()
  {

  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "Text {$this->price}<br>";
    $out .= "Text2 {$this->getDiscount()}<br>";
    $out .= "Some text {$this->page}<br>";
    return $out;
  }

  public function getPage()
  {
    return $this->page;
  }

  public function addProduct($name, $price, $numPages = 0)
  {
    var_dump($name);
    var_dump($price);
    var_dump($numPages);
  }

}