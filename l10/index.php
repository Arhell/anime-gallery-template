<?php error_reporting(-1);

$arr = ['1', '2', '3'];
$arr[] = '4';
$arr[] = '5';

print_r($arr);

$i = 0;
while ($i <= 10) {
  echo $i . "<br>";
  $i++;
}

for($i = 0; $i <= 10; $i++) {
  echo $i . "<br>";
}

for($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . "<br>";
}

$names = [
    'text1' => 'some1',
    'text2' => 'some2',
    'text3' => 'some3',
];

print_r($names);






