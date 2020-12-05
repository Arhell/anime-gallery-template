<?php error_reporting(-1);

echo '<select>';
for ($i = 1900; $i <= 2020; $i++ ) {
  echo '<option>$i</option>';
}
echo '</select>';

$arr = ['1', '2', '3'];
$arr[5] = '4';
$arr[] = '6';

foreach ($arr as $item) {
  echo $item . '<be>';
}

$names = [
  '1' => '11',
  '2' => '22',
  '3' => '33'
];

foreach ($names as $name) {
  echo $name . '<be>';
}

$names2 = [
    '1' => '11',
    '2' => '22',
    '3' => '33'
];


foreach ($names2 as $key => $name2) {
  echo "Num $key, Num2: $name2 <br>";
}

$arr2 = ['1', '2', '3'];

foreach ($arr2 as $k => $v) {
  echo "Num $k, Num2: $v <br>";
}

$a = 5;

if ($a > 3 && $a < 7) {
  echo 'ok';
} else {
  echo 'no';
}

$b = 2;

if ($b > 3 || $b < 7) {
  echo 'ok';
} else {
  echo 'no';
}

for ($i = 0; $i <= 30; $i++) {
  echo $i . '<br>';
  if ( $i == 5 ) {
    echo 'Found';
    break;
  }
}

for ($i = 0; $i <= 30; $i++) {
  if ($i >= 10 && $i <= 20) continue;
  echo $i . '<br>';
}
