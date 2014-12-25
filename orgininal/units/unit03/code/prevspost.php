<html>
 <head>
  <title>Autoincrement and Autodecrement</title>
 </head>
 <body bgcolor="6699ff">
  <?php
    $x=5; $y=0;
    $y = ++$x;  // add 1 to $x first; then assign to $y
    print "<h3>Preincrement:<br />";
    print "\$y is $y.<br />";
    print "\$x is $x.<br />";
    print "<hr>";
    $x=5; $y=0;
    $y = $x++;
    print "Postincrement:<br />";
    print "\$y is $y. <br />";
    print "\$x is $x. <br />";
  ?>
 </body>
</html>
