<?php
  // Turn on output buffering
  ob_start();
?>
<html>
 <head>
  <title>Buffering Output Before Headers</title>
 </head>
 <body bgcolor="lavender">
  <font face="verdana" size='+1'>
  <h2>Buffering Output Before Headers</h2>
  <?php
    setcookie('usr','Ellie Quigley');
    setcookie('color','blue');

    if (! empty($_COOKIE['color'])) {
      echo '<pre>';
      print_r($_COOKIE);
      echo '</pre>';
    }
  ?>
  </font>
 </body>
</html>
<?php
  // Flush the buffer and end output buffering
  ob_end_flush();
?>
