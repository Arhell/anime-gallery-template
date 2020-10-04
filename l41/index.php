<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NoneProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Text1', 20, 100);
$notebook = new NoneProduct('Text2', 1000, 'Note');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();
