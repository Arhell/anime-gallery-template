<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

$db = mysqli_connect('', '','','db') or die('error');
if(!$db) die(mysqli_connect_error());

mysqli_set_charset($db, "utf8");

//$insert = "INSERT INTO `db` (name, text) VALUES ('Name', 'text')";
//$res_insert = mysqli_query($db, $insert);
//if($res_insert) echo 'ok';
//else 'error';
//echo mysqli_error($db);

$update = "UPDATE db SET text = CONCAT(text, '!!!') WHERE id > 4";
$res_update = mysqli_query($db, $update) or die(mysqli_error($db));

$delete = "DELETE FROM db WHERE id = 6";
$res_delete = mysqli_query($db, $delete) or die(mysqli_error($db));
echo mysqli_affected_rows($db);

$res = mysqli_query($db, "SELECT * FROM db");
echo $res;

