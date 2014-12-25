<html>
 <head><title>Your Fare</title></head>
 <body bgcolor="lightgreen">
  <font face="arial" size="+1">
  <p>
  <?php
    extract($_REQUEST);
    if (! isset ( $submit_age )) { // Simple conditional
      exit;
    }
  ?>
  <table border="1" cellpadding="10">
  <tr bgcolor="yellow">
  <?php
    if ($age >= 55 ){
      $price = 8.25;
      print "<td><b>You pay \$$price, the senior fare!</td>";
    }
    else {
      $price = 10.00;
      print "<td><b>You pay \$$price regular adult fare.</td>";
    }
  ?>
  </tr>
  </table>
 </body>
</html>
