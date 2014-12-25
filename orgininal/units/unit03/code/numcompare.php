<html>
 <head><title>Comparing Numbers</title></head>
 <body bgcolor="#00ff99">
  <?php
    $x = 5;
    $y = 4;
    $result = $x > $y;
    echo "<h3>Is \$x > \$y? The result is $result, true.<br />";
    $result = $x < $y;
    echo "Is \$x < \$y? The result is ", (int) $result,",
          false.<br />";
  ?>
 </body>
</html>
