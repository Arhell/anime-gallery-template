<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$str = '[i]Some[/i] [B]text[/b]';
//$str = str_replace('[b]', '<b>', $str);
//$str = str_replace('[/b]', '</b>', $str);
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];
//$str = str_replace($search, $replace, $str);
$str = str_ireplace($search, $replace, $str);
echo $str;

$str2 = '<i>Some</i> <b>text</b>';
echo strip_tags($str2, '<b><i>');

$str3 = 'hello';
echo strlen($str3);
echo mb_strlen($str3, 'utf-8');
