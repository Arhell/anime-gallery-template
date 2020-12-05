<?php

declare(strict_types=1);

function sum(int ...$ints){
  return array_sum($ints);
}

var_dump(sum(2,4,5));