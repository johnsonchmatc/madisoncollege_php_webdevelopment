<?php
  $myStr = 'PORT OF SAN FRANCISCO';
  $myArray = preg_split('/\s/', $myStr, -1,
                        PREG_SPLIT_OFFSET_CAPTURE);
  echo '<h2>Splitting a Phrase into Words</h2>';
  echo '<pre>';
  print_r($myArray);
  echo '</pre>';
?>
