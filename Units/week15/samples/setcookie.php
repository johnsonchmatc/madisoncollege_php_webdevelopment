<?php
  setcookie('usr','Ellie Quigley');
  setcookie('color','blue');
?>
<html>
 <head><title>The Cookie Array</title></head>
 <body bgcolor="lavender">
  <font face="verdana" size='+1'>
  <h2>$_COOKIE[]</h2>
  <?php
    if (! empty($_COOKIE['color'])) {
      echo '<pre>';
      print_r($_COOKIE);
      echo '</pre>';
    }
  ?>
  </font>
 </body>
</html>
