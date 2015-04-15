<?php
  $myCity = 'SAN FRANCISCO';
  $myArray = preg_split('//', $myCity, -1, PREG_SPLIT_NO_EMPTY);
  
  echo '<h2>Splitting A Word into Letters</h2>';
  echo '<pre>';
  print_r($myArray);
  echo '</pre>';
?>
