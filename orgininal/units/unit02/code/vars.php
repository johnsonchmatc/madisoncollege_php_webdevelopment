<html>
 <head><title>Variables</title></head>
 <body bgcolor="lightblue">
  <?php
    $name = "Marko";
    $city = "San Francisco";
  ?>
  <font face = "verdana" size='+1'>
  <p>
  Today is <?=date("l")?>. // same as <?php echo date("l"); ?>
  <br />
  His name is <?=$name?> and he works in <?=$city?>.
  </font>
 </body>
</html>
