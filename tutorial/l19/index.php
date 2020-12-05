<?php error_reporting(-1);

echo date_default_timezone_get();
echo '<br>';
echo date_default_timezone_set('Europe/London');
echo '<br>';
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y-m-d H:i:s', time());
echo '<br>';
echo time();
echo '<br>';
echo '2010 - ' . date('Y');
echo '<br>';
phpinfo();

$date = getdate();
print_r($date);
echo '<br>';
echo $date['year'];
echo '<br>';
echo date('Y-m-d H:i:s', strtotime('+1 day 2 hours'));
echo '<br>';

echo time();
echo '<br>';
echo mktime(date('H'), date('i'), date('s')+1, date('m'), date('d'), date('Y'));

$t = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')+1);
echo date('Y-m-d H:i:s', $t);