<html>
 <head>
  <title>Assign print_r() output to a variable</title>
 </head>
 <body bgcolor="CCFF66">
  <h3>Assign print_r() output to a variable</h3>
  <pre><b>
  <?php
    $colors = array('red','green','blue','yellow');
    $display = print_r($colors,true); // Assign output to $display
    echo $display;
    reset($colors);
  ?>
  </b></pre>
 </body>
</html>
