<?php error_reporting(-1);

require_once 'func.php';

$nums = [1, 2, 3];
echo count($nums);

$names = ['name1', 'name2'];
echo count($names);

$x = 10;
$y = 10;

sum(3, 3);
sum($x, $y);
sum();

$a = 133;
echo $a;

$a2 = 5;
$b2 = 10;
sum2($a2, $b2);
echo $a2;

$res = sum3(1,2);
echo $res;

$nums2 = [1, 2, 3];
$keys = array_keys($nums2);
print_r($keys);

$keys2 = my_array_keys($nums2);
print_r($keys2);

$names2 = ['text1' => 'name1', 'text2' => 'name2'];

$keys3 = my_array_keys($names2);
print_r($keys3);

$test = [];
