<?php
  function outer($a, $b) {
    print "Greetings from outer()\n<br />";
    
    function square($x) {   // Nested function
      print "Greetings from square()\n<br />";
      return $x * $x;
    }
    return square($a) + square($b);
  }
  
  $sum = outer(5,8); // Call to outer()
  echo "The sum of the squares is: $sum\n<br";
  $squared = square(5);
  print "5 squared is: $squared.\n<br />";
?>
