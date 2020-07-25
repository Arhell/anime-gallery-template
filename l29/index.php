<?php

//$user = isset($_GET['user']) ? $_GET['user'] : 'quest';
echo $user = $_GET['user'] ?? 'quest';
$a = 1;
$b = 2;

//echo $a <=> $b;

if(($a <=> $b) === 1) {
  echo '$a > $b';
} elseif (($a <=> $b) === -1) {
  echo '$a < $b';
} else {
  echo '$a = $b';
}