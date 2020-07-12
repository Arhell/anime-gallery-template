<?php

function clear() {
  global $db;
  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysqli_real_escape_string($db, $value);
  }
}

function save_mess() {
  global $db;
  clear();
  extract($_POST);
//  $name = mysqli_real_escape_string($db, $_POST['name']);
//  $text = mysqli_real_escape_string($db, $_POST['text']);
  $query = "INSERT INTO gb (name, text) VALUES ('$name', '$text')";
  mysqli_query($db, $query);
}

function get_mess() {
  global $db;
  $quary = "SELECT * FROM gb ORDER BY id DESC";
  $res = mysqli_query($db, $quary);
  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) .'</pre>';
}


