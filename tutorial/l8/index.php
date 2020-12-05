<?php error_reporting(-1);

$arr = array('1', '2', '3');
$arr[] = '4';
var_dump($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr[0];
echo $arr{1};

$arr2 = [1, 2, 'cat', 4, 5, 6, 7, 8, 9, 10, ['Some', 'text', 'github']];
echo "<pre>";
print_r($arr2);
echo "</pre>";

echo $arr2[10][0];

$arr3 = [
  3 => '1',
  5 => '2',
  11 => '3',
  '4',
];
echo $arr3[11];

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
    ]
];

echo "<pre>";
print_r($goods);
echo "</pre>";

echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo "<br>";
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];

