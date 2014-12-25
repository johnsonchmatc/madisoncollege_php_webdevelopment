<html>
 <head>
  <title>Function Arguments</title>
 </head>
 <body bgcolor="lightgreen">
  <font size="+1" face="arial">
  <?php
    function raise_sal() {
      global $salary;
      $salary *= 1.1; // 10 percent raise
    }
    $salary = 50000;
    raise_sal();
    echo 'Congratulations! Your new salary is: $'. $salary .'<br />';
  ?>
  </font>
 </body>
</html>
