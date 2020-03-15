<?php

//$var = false;
//var_dump((bool) $var);
//var_dump((bool) '');

//$lite = 'green';
//
//if($lite == 'green') {
//  echo 'we may go';
//}

//var_dump(5 > 3);
//if (5 > 3) {
//  echo 'ok';
//}

//if (5 > 3)
//  echo 'ok';
//
//if (5 > 3) echo 'ok';

$lite = 'yellow';

if( $lite == 'green' ) {
  if (5 > 3) {
    echo '5 > 3';
  }
  echo 'we may go';
}elseif ($lite == 'yellow') {
  echo 'We may ready';
}else {
  echo 'we must stop';
}
