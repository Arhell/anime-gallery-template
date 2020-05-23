<?php error_reporting(-1);

$str = 'Hello world';
//echo mb_stripos($str, 'l', 0, 'utf-8');
if(mb_strpos($str, 'l', 0, 'utf-8')) echo 'ok';
else echo 'no';

$str2 = 'hello world';
$str3 = 'HELLO WORLD';

echo mb_strtoupper($str2, 'utf-8');
echo mb_strtolower($str3, 'utf-8');

$str4 = 'Hello world';
echo mb_substr($str4, 0, 5, 'utf-8');

$str5 = '<i>Hello</i>i>, some <b>text</b>';
echo htmlspecialchars($str5, ENT_QUOTES, 'utf-8');

$str6 = '<i>Hello</i>i>, some <b>text</b>';
echo htmlspecialchars_decode($str6);