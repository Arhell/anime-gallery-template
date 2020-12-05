<?php


class BookProduct extends Product
{

  public $page;

  public function __construct($name, $price, $page)
  {
    parent::__construct($name, $price);
    $this->page = $page;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "Some text {$this->page}<br>";
    return $out;
  }

  public function getPage()
  {
    return $this->page;
  }

}