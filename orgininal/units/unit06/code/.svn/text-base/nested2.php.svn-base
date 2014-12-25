<?php
  function outer ($a, $b) {
    print "Greetings from outer()\n<br />";
    
    function square($x) {  // Nested function
      print "Greetings from square()\n<br />";
      return $x * $x;
    }
    return square($a) + square($b);
  }
  
  $sum = outer(5,8);
  echo "The sum of the squares is: $sum\n<br";
  // Wrong! Will cause square() to be redeclared
  $sum = outer(10,2);
?>
