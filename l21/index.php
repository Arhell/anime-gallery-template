<?php error_reporting(-1);

if(isset($_POST['send'])) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
}

//if(isset($_GET['send'])) {
//  echo '<pre>';
//  print_r($_GET);
//  echo '</pre>';
//}

if(!empty($_GET)) {
  echo '<pre>';
  print_r($_GET);
  echo '</pre>';
}

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

  <form method="post" action="">
    <p>
      <input type="text" name="name">
    </p>
    <p>
      <textarea name="text"></textarea>
    </p>
    <p>
      <input type="checkbox" name="box">
    </p>
    <p>
      <select name="lang[]" multiple>
        <option value="en">En</option>
        <option value="ru">Ru</option>
        <option value="ja">Ja</option>
      </select>
    </p>
    <p>
      <button type="submit" name="send" value="test">send</button>
    </p>
  </form>

  <hr>

  <a href="index.php?name=Name&amp;test=123&amp;subject=TEST">link</a>

  <hr>

<!--  <p>-->
<!--    --><?php //if(isset($_POST['name'])) echo $_POST['name']; else echo 'some text'?>
<!--  </p>-->

  <p>
    some text <?php if(!empty($_POST['text'])) echo nl2br($_POST['text']); else echo 'some text'?>
  </p>

  <p>
    some text <?php echo !empty($_POST['text']) ? nl2br($_POST['text']) : 'some text' ?>
  </p>

  <p>
    <?php if(isset($_POST['box']) && $_POST['box'] == 'on') echo 'on'?>
  </p>

</body>
</html>
