<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$str = 'Some text text';
$data = explode(' ', $str);
print_r($data);

$str2 = ['Some', 'Some', 'Some'];
$data2 = implode(' ', $str2);
echo $data2;

$str3 = "\n   <p>Hello</p>\n";
$str3 .= "\n<p>world</p>   \t\n";
//echo $str3;
echo trim($str3, "\t");

$str4 = ',...... test,';
echo rtrim($str4, ',');

$str5 = 'password';
echo md5($str5);

$str6 = "Hello\n world";
echo nl2br($str6);
