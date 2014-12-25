<?php
  $grades = array(40, 90, 89, 93, 75);
  $result = average($grades);
  print "The average grade is: ". $result ."<br />";
  
  function average($scores) {
    $sum = 0;
    // Find the size of the array
    $size = count($scores);
    if ($size == 0) {
      echo "Empty parameter list<br />";
      exit();
    }
    for ($i=0; $i<$size; $i++) {
      $sum += $scores[$i];
    }
    // Return the average
    return $sum / $size;
  }
?>
