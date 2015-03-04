<html>
 <head>
  <title>Fibonacci Series</title>
 </head>
  <body>
  <div align="center">
  <?php
    $count=0;
    
    function fib($num) {
      /* Find the Fibonacci value of a number */
      global $count;
      $count++;
      switch($num) {
        case 0:
          return(0);
          break;
        case 1:
          return(1);
          break;
        default:  // Including recursive calls
          return(fib($num - 1) + fib($num - 2));
          break;
      }
    }
  ?>
  <table border="1" cellspacing="2" cellpadding="5">
  <caption>Fibonacci Sequence</caption>
  <tr>
  <?php
    for($num=0; $num < 10; $num++) {
      $value = fib($num);
      // The Fibonacci sequence of 9 numbers starting at 0
      echo "<td bgcolor='#33FF66'>$value</td>";
    }
  ?>
  <tr>
  <br />
  </table>
  <br />
  The function called itself <?php echo $count; ?> times.<br />
  </div>
 </body>
</html>
