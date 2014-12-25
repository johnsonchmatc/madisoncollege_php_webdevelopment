<?php
  $dice1 = rand(1,6);
  $dice2 = rand(1,6);
  $total = $dice1 + $dice2;

  if ($total = 7 || $total = 11) {
    print 'You win!';
  } 
  else {
    print 'Better luck next time!';
  }
?>
