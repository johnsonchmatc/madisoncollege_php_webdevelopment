<?php
  $myString = 'apples#oranges#peaches';
  // Split by #
  $myArray = preg_split('/#/', $myString);
  echo '<pre>';
  print_r($myArray);
  echo '</pre>';
?>
