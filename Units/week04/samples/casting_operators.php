<html>
 <head><title>Type Casting</title></head>
 <body bgcolor="aqua">
  <font face="verdana" size="+1">
  <?php
      $string = "500 dogs";
      $number = (int) $string;
  ?>
    The value in \$string has been cast to an int: <?= $number ?> <br />

  <hr>
  <?php
      $total_seconds = 1132; 
  ?>
  <?= $total_seconds / 60 ?>
  <?php
      // Example of casting to an integer
      $minutes = (int)($total_seconds / 60); 
      // Example of modulus
      $seconds_left = $total_seconds % 60;
  ?>
    You ran for <?= $minutes ?> minutes and <?= $seconds_left ?> seconds

  <hr>

  <?php
    $total = 5;
    $non_float_total = (int) 5;

    echo $non_float_total + 2.3;

    $total = (float) $total;
    echo "\$total has been cast to float: ", $total + 2.3, "<br />";
    if( "2"> "100 dogs") {print "true";}
  ?>
 </body>
</html>
