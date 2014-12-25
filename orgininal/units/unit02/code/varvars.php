<html>
 <head><title>Variable Variables</title></head>
 <body bgcolor="669966">
  <font face = "arial" size="+1">
  <?php
    $color1 = "red";
    $color2 = "blue";
    $color3 = "yellow";
    for($count = 1; $count <= 3; $count++){
      $primary = "color" . $count;   // Variable variable
      print "<font color= ${$primary}>";
      echo "The value stored in $primary: ${$primary}<br />";
    }
  ?>
  </font>
 </body>
</html>
