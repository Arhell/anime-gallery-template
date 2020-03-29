<?php error_reporting(-1);

$arr = array('1', '2', '3');

$arr_result = array_keys($arr);

echo "<pre>";
echo $arr_result;
echo "</pre>";

$goods = [
  [
    'title' => 'Text1',
    'price' => 100,
    'description' => 'some'
  ],
  [
    'title' => 'Text2',
    'price' => 200,
    'description' => 'some2'
  ],
  [
    'title' => 'Text3',
    'price' => 300,
    'description' => 'some3'
  ]
];

$goods_result = array_keys($goods[0]);

echo "<pre>";
echo $goods_result;
echo "</pre>";

$goods_result2 = array_values($goods[0]);

echo "<pre>";
echo $goods_result2;
echo "</pre>";

//echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
//echo "<br>";
//echo $goods[1]['title'] . ' - ' . $goods[1]['price'];

$i = 0;
while ($i < 2) {
  echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'];
  echo "<br>";
  $i++;
}

echo count($arr);
echo count($goods, 1);


$array1 = array('a' => 'green', 'red', 'blue', 'red', 3);
$array2 = array('b' => 'green', 'yellow', 'red');
$result = array_diff($array1, $array2);
$result2 = array_intersect($array1, $array2);

echo "<pre>";
echo $result;
echo "</pre>";

echo "<pre>";
echo $result2;
echo "</pre>";

$search_array = array('first' => 1, 'second' => 4);
if(array_key_exists('first', $search_array)) {
  echo 'OK';
} else {
  echo 'NO';
}

$arr1 = array('color' => 'red', 2, 4);
$arr2 = array('a', 'b', 'color' => 'green', 'share' => 'text', 4);
$arr_result1 = array_merge($arr1, $arr2);
$arr_result2 = $arr1 + $arr2;

echo "<pre>";
echo $arr_result1;
echo "</pre>";

echo "<pre>";
echo $arr_result2;
echo "</pre>";

$new_result1 = array_rand($arr, 2); // random key
$new_result2 = array_reverse($arr, true);

echo "<pre>";
echo $new_result1;
echo "</pre>";

echo "<pre>";
echo $new_result2;
echo "</pre>";

$city = 'Some $city';
$state = 'Some state';
$event = 'EVENT';

$all = compact('city', 'state', 'event');

echo "<pre>";
echo $all;
echo "</pre>";

$some_arr = [
  'city' => 'SF',
  'state' => 'CA',
  'event' => 'do'
];

extract($some_arr);
echo $city;

echo "<pre>";
echo $some_arr;
echo "</pre>";




