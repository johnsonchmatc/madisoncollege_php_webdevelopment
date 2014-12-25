<html>
 <head>
  <title>Sample 3</title>
 </head>
 <body>
  <h2>Celsius to Farenheit Conversion</h2>
  <table>
  <tr><th>Celsius</th><th>Farenheit</th><tr>
  <?php
    $C = -50;
    while ($C < 100) {
      $F = ($C * 1.8) + 32;
      print "<tr><td>$C</td><td>$F</td>";
      if ($F == 32) {
        break;
      }
      $C += 5;
    }
  ?>
  </tr>
  </table>
  <table>
  <tr><th>Celsius</th><th>Farenheit</th><tr>
  <?php
    for ($C = -50; $C < 100; $C += 5) {
      $F = ($C * 1.8) + 32;
      print "<tr><td>$C</td><td>$F</td>";
    }
  ?>
  </tr>
  </table>
 </body>
</html>
