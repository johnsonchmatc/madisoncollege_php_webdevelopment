<html>
 <head><title>Mixing HTML and PHP</title></head>
 <body>
  <?php
    <font size="+2">   // Wrong!!! Cannot place HTML directly
                       // into PHP script
    print "It's such a perfect day!<br />";  // Okay here within
                                             // the statement
  ?>
 </body>
</html>

