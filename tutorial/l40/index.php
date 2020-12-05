<?php

error_reporting(-1);
require_once 'classes/Product.php';

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new Product('Text1', 20, null, 1000);
$notebook = new Product('Text2', 1000, 'Some');

debug($book);
debug($notebook);

echo $book->getProduct('bock');
echo $notebook->getProduct();
