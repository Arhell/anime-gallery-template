<?php


class BookProduct extends Product
{

  public $page;

  public function __construct($name, $price, $page)
  {
    parent::__construct($name, $price);
    $this->page = $page;
    $this->setDiscount(5);
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

}