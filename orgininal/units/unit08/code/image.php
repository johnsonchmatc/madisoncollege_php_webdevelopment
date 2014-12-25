<html>
 <head>
  <title>Finding Pixel Coordinates</title>
 </head>
 <body bgcolor="8CCCCA">
  <br />
  <fieldset><legend><b>Pizza Choices</b></legend>
  <?php
    if ($_POST['topping']) {
      print "<ul>";
      foreach ($_POST['topping'] as $value ) {
        print "<li>$value</li>";
      }
      print "</ul>";
    }
    print "The pixel coordinates of the image are: <br />";
    $coord1 = $_POST['pizzas_x'];
    $coord2 = $_POST['pizzas_y'];
    print "$coord1, $coord2<br />";
  ?>
  </fieldset>
 </body>
</html>
