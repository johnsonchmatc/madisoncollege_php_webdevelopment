<?php
  $numbers = array(1,2,3,4,5,6);
  print "<pre>Before: ";
  print_r($numbers);
  
  $new_numbers = square($numbers);
  print "<br />After: ";
  print_r($new_numbers);
  print "</pre><br />";
  
  function square($n) {
    for($i=0; $i<count($n); $i++) {
      $n[$i] = $n[$i] * $n[$i];
    }
    return $n; // Return an array
  }
?>
