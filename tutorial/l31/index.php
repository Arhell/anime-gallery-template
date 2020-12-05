<?php

use classes\controllers\{Controller, PageController};
use classes\models\{Model, PageModel};

spl_autoload_register(function ($class){
  $file = str_replace('\\', '/', $class) . '.php';
  if(is_file($file)) {
    require_once $file;
  }
});

new Controller();
new PageController();
new Model();
new PageModel();