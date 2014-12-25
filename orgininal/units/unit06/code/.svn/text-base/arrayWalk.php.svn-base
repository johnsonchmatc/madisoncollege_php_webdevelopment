<html>
 <head>
  <title>Walking Through a Multidimensional Array
  </title>
 </head>
 <body>
  <div align="center">
  <h3>Using a Callback Function with a Multidimensional Array</h3>
  <?php
    $numbers = array(array(1,2,3,4),
                     array(4,8,10,12),
                     array(20,25,30,35),
                    );
    
    function cube(&$element,$index) {
      print $index;   // prints 012301230123
      $element = $element * $element * $element;
    }
  ?>
  <table border='1'><caption><font size='-1'>The <em>
  array_walk_recursive()</em> function</font></caption>
  <?php
    array_walk_recursive($numbers,'cube');
    for($i=0; $i < 3; $i++) {
      echo "<tr bgcolor='999FFF'>";
      for($j=0; $j<4; $j++) {
        echo "<td><b>".$numbers[$i][$j] ;
      }
      echo "</td></tr>";
    }
    echo "</table>";
  ?>
  </div>
 </body>
</html>
