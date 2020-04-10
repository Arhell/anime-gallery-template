<?php error_reporting(-1);

$var = 3;

if ($var == 1) {
  echo 'Var = 1';
}elseif ($var == 2) {
  echo 'Var = 2';
}elseif ($var == 3) {
  echo 'Var = 3';
}else {
  echo 'else';
}

switch ($var) {
  case 1:
    echo 'Var = 1';
    break;
  case 2:
    echo 'Var = 2';
    break;
  case 3:
    echo 'Var = 3';
    break;
  default:
    echo 'else';
}

$bool = true;
$str1 = 1;
$str2 = 1;
$str3 = 1;

if($bool) {
  echo "<table class='class' border='1'>
          <tr>
            <td>$str1</td>
            <td>$str2</td>
            <td>$str3</td>
          </tr>
      </table>";
}

$names = [
    '1' => '11',
    '2' => '22',
    '3' => '33'
];

foreach ($names as $key => $name) {
  echo "Num $key, Num2: $name <br>";
}

foreach ($names as $key => $name):
  echo "Num $key, Num2: $name <br>";
endforeach;

foreach ($names as $key => $name): ?>
  Num <?php echo $key ?>, Num2: <?php echo $name ?> <br>
<?php
endforeach;

?>

<?php if($bool): ?>
  <table class='class' border='1'>
      <tr>
        <td><?php echo $str1 ?></td>
        <td><?php echo $str2 ?></td>
        <td><?php echo $str3 ?></td>
      </tr>
  </table>
<?php endif; ?>

<?php foreach ($names as $key => $name): ?>
  Num <?php echo $key ?>, Num2: <?php echo $name ?> <br>
<?php endforeach; ?>
