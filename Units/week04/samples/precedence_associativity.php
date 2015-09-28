<html>
  <head>
    <title>Precedence and Associativity()</title>
  </head>
  <body>
    <?php
      $result = 5 + 4 * 12 / 4;
      print "$result = 5 + 4 * 12 / 4";
      $result = (5 + 4) * 12 / (4 - 2);
      print "<br />$result = ( 5 + 4 ) * 12 / (4 - 2) ";
    ?>
  </body>
</html>
