<?php
  $firstNum = 0;
  $secondNum = 1;
  print "$firstNum, $secondNum, ";

  while ($secondNum < 1000) {
    $nextFibNum = $firstNum + $secondNum;
    print "$nextFibNum, ";
// debug print statement   
print "[$firstNum + $secondNum = $nextFibNum]<br />";

    $firstNum = $secondNum;
    $secondNum = $nextFibNum;
  }
?>
