<html>
 <head><title>Sample 4</title></head>
 <body>
  <pre>
  <?php
    $str1 = "Dan";
    $str2 = "Daniel";
    $str3 = "new york";
    $str4 = "New York";
    
    if ($str1 == $str2) {
      print "\n'$str1' equals '$str2'\n";
    }
    else {
      print "\n'$str1' not equal to '$str2'\n";
    }
    if (strcmp($str1, $str2) == 0) {
      print "\n'$str1' equals '$str2'\n";
    }
    else {
      print "\n'$str1' not equal to '$str2'\n";
    }
    if (strcmp($str1, substr($str2, 0, 3)) == 0) {
      print "\n'$str1' equals '". substr($str2, 0, 3) ."' from '$str2'\n";
    }
    else {
      print "\n'$str1' not equal to '". substr($str2, 0, 3) ."' from '$str2'\n";
    }
    if (strcasecmp($str3, $str4) == 0) {
      print "\n'$str3' equals '$str4' (case-insensitive)\n";
    }
    else {
      print "\n'$str3' not equal to '$str4' (case-insensitive)\n";
    }
  ?>
  </pre>
 </body>
</html>
