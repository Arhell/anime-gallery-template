<?php error_reporting(-1);

//setcookie('test', 'val', time()*3600, '/');
//setcookie('test', '', time() - 3600);
//echo $_COOKIE['test'];

isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/') : setcookie('counter', 1, time()+3600, '/');
echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;