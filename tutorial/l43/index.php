<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/Id.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Text1', 20, 100);

debug($book);

echo $book->getProduct();

echo $book->price;
echo $book->getDiscount();

$product = new Product('Text', 1);

$book->addProduct('test', 10);
$book->test();
