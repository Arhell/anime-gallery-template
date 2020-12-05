<?php

function sum($a = 1, $b = 2) {
  echo $a + $b;
  echo '<br>';
}

function sum2(&$a, $b) {
  echo $a + $b;
  echo '<br>';
  $a2 = 100;
}

function sum3($a, $b) {
  $c = $a + $b;
  return $c;
}

function my_array_keys($arr) {
  $data = [];
  foreach ($arr as $key => $value) {
    $data[] = $key;
  }
  return $data;
}


