<?php

define('DBHOST', 'localhost');
define('DBUSER', 'login');
define('DBPASS', 'password');
define('DBBASE', 'database');

//define('DB', [
//  'localhost',
//  'login',
//  'password',
//  'database'
//]);

define('DB', [
  'DBHOST' => 'localhost',
  'DBUSER' => 'login',
  'DBPASS' => 'password',
  'DBBASE' => 'database'
]);

echo '<pre>';
print_r(DB);
echo '</pre>';
echo DB[DBBASE];