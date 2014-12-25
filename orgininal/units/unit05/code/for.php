<html>
 <head>
  <title>The for Loop</title>
 </head>
 <body bgcolor="lightgreen">
  <table border="1" bordercolor="black" bgcolor="yellow">
  <caption>Elements</caption>
  <?php
    $colors=array('red','white','blue','black');
    for($i = 0; $i < count($colors); $i++) {
      echo "<tr><td><b>$colors[$i]</b></td></tr>";
    }
  ?>
  </table>
 </body>
</html>
