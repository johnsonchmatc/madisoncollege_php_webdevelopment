<?php
  $friend = "Sam";
  $friend2 = who();
  echo 'My friends are: ', $friend, ' ', $friend2, '<br />';
  
  function who() {
    $friend = "Joe"; 
    return $friend;
  }
  
  $friend3 = who();
  print 'My friends are: '. $friend .' '. $friend3 .'<br />';
  
  
  function raise_sal() {
    global $salary;
    $salary *= 1.1;
  }
  
  $salary = 50000;
  raise_sal();
  echo 'Congratulations! Your new salary is: $'. $salary .'<br />';
?>
