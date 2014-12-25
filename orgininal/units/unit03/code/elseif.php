<html>
 <head><title>Your Price</title></head>
 <body bgcolor="chartreuse">
  <font face="arial" size="+1">
  <?php
    extract($_REQUEST); // Get form input data
    if (! isset ($submit_price) || $age == "" ) {
      print "You must enter your age..<br />";
      exit;
    }
  ?>
  <table border="1" cellpadding="10">
  <tr bgcolor="azure">
  <?php
    if ($age > 0 && $age < 13) {
       $price = 5.00;
       print "<td><b>You pay \$$price, the child's price!</td>";
    }
    elseif ($age >= 13 && $age < 55 ) {
      $price = 8.25;
      print "<td><b>You pay \$$price regular adult price.</td>";
    }
    elseif ($age >= 55 && $age <= 120) {
      $price = 10.00;
      print "<td><b>You pay \$$price, the senior price.</td>";
    }
    else {
      print "<td><b>You are not a human!</td>";
    }
  ?>
  </tr>
  </table>
  </font>
 </body>
</html>
