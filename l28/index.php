<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

require_once 'fun.php';
require_once 'connect.php';

if(!empty($_POST)) {
  save_mess();
  header("Location: {$_SERVER['PHP_SELF']}");
  exit;
}

$messages = get_mess();
//print_arr($messages);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Title</title>

  <style>

    .message {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }

  </style>
</head>
<body>

<form action="index.php" method="post">
  <p>
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="text">Text:</label><br>
    <textarea name="text" id="text"></textarea>
  </p>
  <button type="submit">Write</button>
</form>

<hr>

<?php if(!empty($messages)): ?>
  <?php foreach ($messages as $message): ?>
    <div class="message">
      <p>Name: <?=$message['name']?>| Date: <?=$message['date']?></p>
      <div><?=nl2br(htmlspecialchars($message['text']))?></div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
