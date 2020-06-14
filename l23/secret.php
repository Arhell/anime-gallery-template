<?php error_reporting(-1);

session_start();

if(isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']);

if(!isset($_SESSION['admin'])) die('No');

echo "login, {$_SESSION['admin']}!";

?>
<a href="secret.php?do=exit">logout</a>
<ul>
  <li><a href="index.php">session1</a></li>
  <li><a href="index2.php">session2</a></li>
  <li><a href="secret.php">secret</a></li>
</ul>