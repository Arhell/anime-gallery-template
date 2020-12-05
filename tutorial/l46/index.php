<?php

use classes\iInterface;
use classes\{BookProduct, Product};


error_reporting(-1);

function autoloader1($class)
{
  $class = srt_replace("\\", "/", $class);
  echo 1;
  $file = __DIR__ . "/{$class}.php";
  if(file_exists($file)) {
    require_once $file;
  }
}

function autoloader2($class)
{
  echo 2;
  $file = __DIR__ . "/{$class}.php";
  if(file_exists($file)) {
    require_once $file;
  }
}

spl_autoload_register('autoloader1');
spl_autoload_register('autoloader2', true, true);

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(iInterface $product) {
  echo "<p>Some text {$product->getName()}</p>>";
}

$book = new BookProduct('Text1', 20, 100);
offerCase($book);

debug($book);


