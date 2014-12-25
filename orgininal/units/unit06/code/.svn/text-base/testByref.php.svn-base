<?php
  // test of string functions for call by reference
  $testStr = 'This string contains \"double quotes\", a \"\\\" and a &lt;br&gt; tag
              (also a real newline)';
  
  // run a function on it and then compare the returned string
  // to the original string to see if it passes the string by ref
  $outStr = stripslashes($testStr);
  
  if (strcmp($testStr, $outStr) == 0) 
  {
    print '<br>They both got modified, pass by reference!<br>';
    echo $outStr, '<br>';
  }
  else
  {
    print '<br>They are different, pass by value!<br>';
    echo 'In: ', $testStr, '<br>';
    echo 'Out: ', $outStr, '<br>';
  }
 
  $outStr = htmlspecialchars_decode($testStr);
  
  if (strcmp($testStr, $outStr) == 0) 
  {
    print '<br>They both got modified, pass by reference!<br>';
    echo $outStr, '<br>';
  }
  else
  {
    print '<br>They are different, pass by value!<br>';
    echo 'In: ', $testStr, '<br>';
    echo 'Out: ', $outStr, '<br>';
  }
  
  $outStr = nl2br($testStr);
  
  if (strcmp($testStr, $outStr) == 0) 
  {
    print '<br>They both got modified, pass by reference!<br>';
    echo $outStr, '<br>';
  }
  else
  {
    print '<br>They are different, pass by value!<br>';
    echo 'In: ', $testStr, '<br>';
    echo 'Out: ', $outStr, '<br>';
  }
?>
