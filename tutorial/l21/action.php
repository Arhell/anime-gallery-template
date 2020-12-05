<?php error_reporting(-1);

if(isset($_POST['send'])) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
}

if(isset($_GET['send'])) {
  echo '<pre>';
  print_r($_GET);
  echo '</pre>';
}

//if(!empty($_POST)) {
//  echo '<pre>';
//  print_r($_POST);
//  echo '</pre>';
//}
//
//if(!empty($_GET)) {
//  echo '<pre>';
//  print_r($_GET);
//  echo '</pre>';
//}

?>

<p>
  <a href="index.php">back</a>
</p>

