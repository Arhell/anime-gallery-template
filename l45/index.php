<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/Id.php';
require_once 'classes/iInterface.php';

function autoloader($class)
{
  $file = __DIR__ . "/classes/{$class}.php";
  if(file_exists($file)) {
    require_once $file;
  }
}

spl_autoload_register('autoloader');

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(iInterface $product) {
  echo "<p>Some text {$product->getName()}</p>>";
}

$book = new BookProduct('Text1', 20, 100);
offerCase($book);

debug($book);

echo $book->getProduct();

class A{};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;

var_dump($a instanceof A);
var_dump($b instanceof B);
var_dump($c instanceof C);
