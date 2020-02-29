<?php

$title = 'hello world';
$title = 'page title';
$fruit = 'apple';
$some_var = "Some text Some {$fruit}";
$someVar = 'Some text';

$var = '123';
$Var = '456';

define("PAGE", "new page");
//define("PAGE", "new page2")

const PAGE2 = 'new const'; #only php version 5.3+
//  $this = 'this'

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
</head>
<body>
<h1> <?php echo $title; ?> </h1>
<p><?php echo $some_var; ?></p>
<p><?php echo $someVar; ?></p>
<p><?php echo $var; ?></p>
<p><?php echo $Var; ?></p>
<p><?php echo PAGE ?></p>
<p><?php echo PAGE2 ?></p>
</body>
</html>