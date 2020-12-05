<?php error_reporting(-1);

session_start();

//$_SESSION['name'] = 'Name';
//$_SESSION['login'] = 'login';
//echo $_SESSION['name'];
//unset($_SESSION['name']);
//var_dump($_SESSION);
//
//session_unset();
//session_destroy();

define('ADMIN', 'admin');

echo session_id();

if(!empty($_POST['login'])) {
  if($_POST['login'] === ADMIN) {
    $_SESSION['admin'] = ADMIN;
    $_SESSION['res'] = 'login';
    header('Location: index.php');
    die();
  } else {
    $_SESSION['res'] = 'error';
  }
  header('Location: session1.php');
  die();

}

?>

<ul>
  <li><a href="index.php">session1</a></li>
  <li><a href="index2.php">session2</a></li>
  <li><a href="secret.php">secret</a></li>
</ul>

<hr>

<?php
  if(isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
  }
?>

<form action="" method="post">
  <input type="text" name="login">
  <button type="submit">login</button>
</form>