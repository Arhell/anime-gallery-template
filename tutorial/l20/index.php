<?php error_reporting(-1);

$date = date_create(date('Y-m-d H:i:s'));
//print_r($date);
echo date_format($date, 'Y-m-d H:i:s');
echo '<br>';
date_add($date, date_interval_create_from_date_string('3 days + 3 hours + 10 minutes + 3 seconds'));
echo '<br>';
echo microtime();
echo '<br>';

$start = microtime(true);
//usleep(10000000);

for($i = 1; $i <= 10000000; $i++){
  if($i == 10000000) echo '<p>Some text</p>';
}

$end = microtime(true);

echo $end - $start;