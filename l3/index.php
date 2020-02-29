<?php
/*
boolean: true | false
integer
float
string
*/

$var = true;
var_dump($var);
echo gettype($var);

$int = '10' + 5;
var_dump($int);

$fl = 1.3;
var_dump($fl);

$var2 = 10;
$str = '\'string\'. $var2';
$str2 = "\"string\". {$var2}";

var_dump($str);
var_dump($str2);
var_dump($str3);


$str3 = <<<HERE
  "string". {$var2}";
HERE;

var_dump($str3);

$str4 = <<<'HERE'
  'string'. {$var2}
HERE;

var_dump($str4);

?>





