<html>
 <head>
  <title>The Error Operator</title>
 </head>
 <body bgcolor="lightblue" >
  <font face="arial">
  <?php
    $num1 = 0;
    $num2 = 2;
    echo "<h4>Error coming. Watch out!</h4>";
    // Illegal division by zero will generate an error
    $div = $num2 / $num1;
  ?>
 </body>
</html>
