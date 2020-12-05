<?php error_reporting(-1);

//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

echo $_SERVER('PHP_SELF');
echo $_SERVER('SERVER_NAME');
echo $_SERVER('QUERY_STRING');
echo $_SERVER('DOCUMENT_ROOT');
echo $_SERVER('HTTP_HOST');
echo $_SERVER('HTTP_REFERER');
echo $_SERVER('REMOTE_ADDR');

if(!empty($_FILES)) {
  echo '<pre>';
  print_r($_FILES);
  echo '</pre>';
  move_uploaded_file($_FILES['file']['tmp_name'],'upload/' . $_FILES['file']['name']);
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

  <form method="post" action="" enctype="multipart/form-data">
    <p>
      <input type="file" name="file">
    </p>
  </form>

</body>
</html>
