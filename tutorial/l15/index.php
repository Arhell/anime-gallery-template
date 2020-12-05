<?php
//require_once 'inc.php';
//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain; charset=utf-8');
//header('Content-Disposition: attachment; filename="text.txt"');
readfile('text.txt');
//header('HTTP/1.0 404 Not Found');
//header('HTTP/1.0 304 Not Modified');
//header('Location: inc.php');
//header('refresh: 5; url=inc.php');
//exit;
die
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?=$test2?>
  some text
</body>
</html>