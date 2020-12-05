<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

copy('text.txt', 'folder/text.txt');

if(file_exists('folder/text.txt')) echo 'file exist';
else echo 'no file';

//echo $file = file_get_contents('text.txt');
//$file = file_get_contents('https://php.net');
//echo htmlspecialchars($file);

//echo nl2br($file = file_get_contents('text.txt'));

//$file = file_get_contents('https://php.net');
//$file2 = file_get_contents('https://php.net');
//file_put_contents('folder/file.txt', $file, FILE_APPEND);
//file_put_contents('folder/file.txt', $file2, FILE_APPEND);

//$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//echo '<pre>';
//print_r($file);
//echo '</pre>';

if(is_dir('folder')) echo 'folder';
else echo 'no folder';


if(is_file('text.txt')) echo 'file';
else echo 'no file';

rename('text.txt', 'folder/file2.txt');

mkdir('1/2/3', 0777, true);

mkdir('5');
rmdir('5');

touch('folder/file.txt', time()-3600);

unlink('folder/file.txt');

