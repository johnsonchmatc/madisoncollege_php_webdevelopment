<?php
  // Callback function
  function salestax($price) {
    $tax = 1.15;
    return($price * $tax);
  }
  $before_prices = array(1.50, 3.55, 4.75, 6.00);
  // array_map
  $after_prices = array_map("salestax", $before_prices);
  print "<b>Before map:  ";
  foreach ($before_prices as $value) {
    printf("\$%.2f  ", $value);
  }
  echo "\n<br /><br />";
  print "After map:  ";
  foreach ($after_prices as $value){
    printf("\$%.2f  ", $value);
  }
?>
