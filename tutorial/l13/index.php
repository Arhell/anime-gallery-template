<?php error_reporting(-1)?>
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

  <p>Lorem ipsum dolor sit amet.</p>

  <?php include "inc/inc.php"?>
  <?php require "inc/inc.php"?>
  <?php require_once "inc/inc.php"?>
  <?php include_once "inc/inc.php"?>

  <p>Lorem ipsum dolor sit amet.</p>

</body>
</html>